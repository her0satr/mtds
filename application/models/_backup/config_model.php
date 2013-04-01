<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config_model extends CI_Model {
	function __construct() {
        parent::__construct();
		
		$this->Field = array('config_id', 'config_name', 'config_content', 'config_hidden', 'config_update');
    }
	
	function CheckPrasetya() {
		$Prasetya = $this->GetByID(array('config_name' => 'Prasetya'));
		$UnixContentDate = ConvertToUnixTime($Prasetya['config_update']);
		$UnixCurrentDate = ConvertToUnixTime(date("Y-m-d H:i:s"));
		$UnixContentDateTolerance = $UnixContentDate + 3600;
		
		if ($UnixContentDateTolerance < $UnixCurrentDate) {
			$LinkRss = 'http://prasetya.ub.ac.id/rss.xml?lang=en';
			
			$Curl = new CURL();
			$RssPrasetya = $Curl->get($LinkRss);
			if ($RssPrasetya) {
				$ArrayRss = XMLToArray($RssPrasetya, 0);
				$ContentRss = $ArrayRss['rss']['channel']['item'];
				
				$ArrayTitle = array();
				foreach ($ContentRss as $Key => $Array) {
					$ArrayTitle[] = $Array['title'];
					
					if (count($ArrayTitle) >= 5) {
						break;
					}
				}
				
				$Update = array( 'config_id' => $Prasetya['config_id'], 'config_content' => json_encode($ArrayTitle) );
				$this->Update($Update);
			}
		}
	}
	
	function Update($Param) {
		$Result = array();
		
		if (empty($Param['config_id'])) {
			$InsertQuery  = GenerateInsertQuery($this->Field, $Param, CONFIG, array('AllowSymbol' => 0));
			$InsertResult = mysql_query($InsertQuery) or die(mysql_error());
			
			$Result['config_id'] = mysql_insert_id();
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data successfully stored.';
		} else {
			$UpdateQuery  = GenerateUpdateQuery($this->Field, $Param, CONFIG, array('AllowSymbol' => 0));
			$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
			
			$Result['config_id'] = $Param['config_id'];
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data successfully updated.';
		}
		
		return $Result;
	}
	
	function GetByID($Param) {
		$Array = array();
		
		if (isset($Param['config_id'])) {
			$SelectQuery  = "
				SELECT Config.*
				FROM ".CONFIG." Config
				WHERE config_id = '".$Param['config_id']."'
				LIMIT 1";
		} else if (isset($Param['config_name']) && isset($Param['gereja_id'])) {
			$SelectQuery  = "
				SELECT Config.*
				FROM ".CONFIG." Config
				WHERE
					config_name = '".$Param['config_name']."'
					AND gereja_id = '".$Param['gereja_id']."'
				LIMIT 1
			";
		} else if (isset($Param['config_name'])) {
			$SelectQuery  = "
				SELECT Config.*
				FROM ".CONFIG." Config
				WHERE config_name = '".$Param['config_name']."'
				LIMIT 1";
		}
		
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		if (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$Array = StripArray($Row);
		}
		
		return $Array;
	}
	
	function GetArray($Param = array()) {
		$Array = array();
		
		/*
		$StringSearch = (isset($Param['NameLike'])) ? "AND config_name LIKE '%" . $Param['NameLike'] . "%'"  : '';
		$StringHidden = (isset($Param['config_hidden'])) ? "AND config_hidden = '" . $Param['config_hidden'] . "'"  : "AND config_hidden = '0'";
		$StringFilter = GetStringFilter($Param);
		
		$PageOffset = (isset($Param['start']) && !empty($Param['start'])) ? $Param['start'] : 0;
		$PageLimit = (isset($Param['limit']) && !empty($Param['limit'])) ? $Param['limit'] : 25;
        $StringSorting = (isset($Param['sort'])) ? GetStringSorting($Param['sort']) : 'config_name ASC';
		
		$SelectQuery = "
			SELECT Config.*
			FROM ".CONFIG." Config
			WHERE 1 $StringSearch $StringHidden $StringFilter
			ORDER BY $StringSorting
			LIMIT $PageOffset, $PageLimit
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$Row = StripArray($Row);
			$Array[] = $Row;
		}
		/*	*/
		
		return $Array;
	}
	
	function GetCount($Param = array()) {
		$TotalRecord = 0;
		
		/*
		$StringSearch = (isset($Param['NameLike'])) ? "AND config_name LIKE '%" . $Param['NameLike'] . "%'"  : '';
		$StringHidden = (isset($Param['config_hidden'])) ? "AND config_hidden = '" . $Param['config_hidden'] . "'"  : "AND config_hidden = '0'";
		$StringFilter = GetStringFilter($Param);
		
		$SelectQuery = "
			SELECT COUNT(*) AS TotalRecord
			FROM ".CONFIG." Config
			WHERE 1 $StringSearch $StringHidden $StringFilter
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$TotalRecord = $Row['TotalRecord'];
		}
		/*	*/
		
		return $TotalRecord;
	}
	
	function Delete($Param) {
		if (isset($Param['list_config_id'])) {
			$DeleteQuery  = "DELETE FROM ".CONFIG." WHERE config_id IN (".$Param['list_config_id'].")";
			$DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
		} else if (isset($Param['config_id'])) {
			$DeleteQuery  = "DELETE FROM ".CONFIG." WHERE config_id = '".$Param['config_id']."' LIMIT 1";
			$DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
		}
        
        $Result['QueryStatus'] = '1';
        $Result['Message'] = 'Data has been deleted.';
		
		return $Result;
	}
}