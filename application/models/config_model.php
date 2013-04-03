<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config_model extends CI_Model {
	function __construct() {
        parent::__construct();
		
        $this->Field = array('config_id', 'config_category', 'config_name', 'config_title', 'config_content', 'config_hide');
    }
	
	function update($param) {
		$Result = array();
		
		if (empty($param['config_id'])) {
			$InsertQuery  = GenerateInsertQuery($this->Field, $param, CONFIG);
			$InsertResult = mysql_query($InsertQuery) or die(mysql_error());
		   
			$Result['config_id'] = mysql_insert_id();
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil disimpan..';
		} else {
			$UpdateQuery  = GenerateUpdateQuery($this->Field, $param, CONFIG);
			$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
		   
			$Result['config_id'] = $param['config_id'];
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil diperbaharui..';
		}
		
		return $Result;
	}
	
	function get_by_id($param) {
		$Array = array();
        
		if (isset($param['config_id'])) {
            $SelectQuery  = "
                SELECT Config.*
                FROM ".CONFIG." Config
                WHERE Config.config_id = '".$param['config_id']."'
                LIMIT 1";
        }
        
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		if (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$Array = StripArray($Row);
		}
		
		return $Array;
	}
	
	function get_array($param = array()) {
		$Array = array();
		$StringFilter = GetStringFilter($param);
		
		$PageOffset = (isset($param['start']) && !empty($param['start'])) ? $param['start'] : 0;
		$PageLimit = (isset($param['limit']) && !empty($param['limit'])) ? $param['limit'] : 25;
		$StringSorting = (isset($param['sort'])) ? GetStringSorting($param['sort']) : 'config_name ASC';
		
		$SelectQuery = "
			SELECT Config.*
			FROM ".CONFIG." Config
			WHERE 1 $StringFilter
			ORDER BY $StringSorting
			LIMIT $PageOffset, $PageLimit
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$Row = StripArray($Row);
			$Array[] = $Row;
		}
		
		return $Array;
	}
	
	function get_count($param = array()) {
		$TotalRecord = 0;
		
		$StringFilter = GetStringFilter($param);
		
		$SelectQuery = "
			SELECT COUNT(*) AS TotalRecord
			FROM ".CONFIG." Config
			WHERE 1 $StringFilter
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$TotalRecord = $Row['TotalRecord'];
		}
		
		return $TotalRecord;
	}
	
	function delete($param) {
        $DeleteQuery  = "DELETE FROM ".CONFIG." WHERE config_id = '".$param['config_id']."' LIMIT 1";
        $DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
        
        $Result['QueryStatus'] = '1';
        $Result['Message'] = 'Data berhasil dihapus.';
		
		return $Result;
	}
}