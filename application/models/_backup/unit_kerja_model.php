<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unit_Kerja_model extends CI_Model {
	function __construct() {
        parent::__construct();
		
		$this->Field = array('unit_kerja_id', 'unit_kerja', 'unit_kerja_desc');
    }
	
	function Update($Param) {
		$Result = array();
		
		if (empty($Param['unit_kerja_id'])) {
			$InsertQuery  = GenerateInsertQuery($this->Field, $Param, UNIT_KERJA);
			$InsertResult = mysql_query($InsertQuery) or die(mysql_error());
			
			$Result['unit_kerja_id'] = mysql_insert_id();
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil tersimpan.';
		} else {
			$UpdateQuery  = GenerateUpdateQuery($this->Field, $Param, UNIT_KERJA);
			$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
			
			$Result['unit_kerja_id'] = $Param['unit_kerja_id'];
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil diperbaharui.';
		}
		
		return $Result;
	}
	
	function GetByID($Param) {
		$Array = array();
		
		if (isset($Param['unit_kerja_id'])) {
			$SelectQuery  = "
				SELECT UnitKerja.*
				FROM ".UNIT_KERJA." UnitKerja
				WHERE UnitKerja.unit_kerja_id = '".$Param['unit_kerja_id']."' LIMIT 1";
		}
		
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		if (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$Array = StripArray($Row);
		}
		
		return $Array;
	}
	
	function GetArray($Param = array()) {
		$Array = array();
		
		$StringSearch = (isset($Param['NameLike'])) ? "AND unit_kerja LIKE '" . $Param['NameLike'] . "%'"  : '';
		$StringFilter = GetStringFilter($Param);
		
		$PageOffset = (isset($Param['start']) && !empty($Param['start'])) ? $Param['start'] : 0;
		$PageLimit = (isset($Param['limit']) && !empty($Param['limit'])) ? $Param['limit'] : 25;
		$StringSorting = (isset($Param['sort'])) ? GetStringSorting($Param['sort']) : 'unit_kerja ASC';
		
		$SelectQuery = "
			SELECT *
			FROM ".UNIT_KERJA." UnitKerja
			WHERE 1 $StringSearch $StringFilter
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
	
	function GetCount($Param = array()) {
		$TotalRecord = 0;
		
		$StringSearch = (isset($Param['NameLike'])) ? "AND unit_kerja LIKE '" . $Param['NameLike'] . "%'"  : '';
		$StringFilter = GetStringFilter($Param);
		
		$SelectQuery = "
			SELECT COUNT(*) AS TotalRecord
			FROM ".UNIT_KERJA." UnitKerja
			WHERE 1 $StringSearch $StringFilter
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$TotalRecord = $Row['TotalRecord'];
		}
		
		return $TotalRecord;
	}
	
	function Delete($Param) {
		$DeleteQuery  = "DELETE FROM ".UNIT_KERJA." WHERE unit_kerja_id = '".$Param['unit_kerja_id']."' LIMIT 1";
		$DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
		
		$Result['QueryStatus'] = '1';
		$Result['Message'] = 'Data berhasil dihapus.';
		
		return $Result;
	}
}