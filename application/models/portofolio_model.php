<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portofolio_model extends CI_Model {
	function __construct() {
        parent::__construct();
		
        $this->Field = array('portofolio_id', 'portofolio_title', 'portofolio_desc', 'portofolio_link', 'portofolio_image', 'portofolio_date');
    }
	
	function update($param) {
		$Result = array();
		
		if (empty($param['portofolio_id'])) {
			$InsertQuery  = GenerateInsertQuery($this->Field, $param, PORTOFOLIO);
			$InsertResult = mysql_query($InsertQuery) or die(mysql_error());
		   
			$Result['portofolio_id'] = mysql_insert_id();
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil disimpan..';
		} else {
			$UpdateQuery  = GenerateUpdateQuery($this->Field, $param, PORTOFOLIO);
			$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
		   
			$Result['portofolio_id'] = $param['portofolio_id'];
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil diperbaharui..';
		}
		
		return $Result;
	}
	
	function get_by_id($param) {
		$Array = array();
        
		if (isset($param['portofolio_id'])) {
            $SelectQuery  = "
                SELECT Portofolio.*
                FROM ".PORTOFOLIO." Portofolio
                WHERE Portofolio.portofolio_id = '".$param['portofolio_id']."'
                LIMIT 1";
        }
        
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		if (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$Array = $this->sync($Row);
		}
		
		return $Array;
	}
	
	function get_array($param = array()) {
		$Array = array();
		$StringFilter = GetStringFilter($param);
		
		$PageOffset = (isset($param['start']) && !empty($param['start'])) ? $param['start'] : 0;
		$PageLimit = (isset($param['limit']) && !empty($param['limit'])) ? $param['limit'] : 25;
		$StringSorting = (isset($param['sort'])) ? GetStringSorting($param['sort']) : 'portofolio_date DESC';
		
		$SelectQuery = "
			SELECT Portofolio.*
			FROM ".PORTOFOLIO." Portofolio
			WHERE 1 $StringFilter
			ORDER BY $StringSorting
			LIMIT $PageOffset, $PageLimit
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$Array[] = $this->sync($Row);
		}
		
		return $Array;
	}
	
	function get_count($param = array()) {
		$TotalRecord = 0;
		
		$StringFilter = GetStringFilter($param);
		
		$SelectQuery = "
			SELECT COUNT(*) AS TotalRecord
			FROM ".PORTOFOLIO." Portofolio
			WHERE 1 $StringFilter
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$TotalRecord = $Row['TotalRecord'];
		}
		
		return $TotalRecord;
	}
	
	function delete($param) {
        $DeleteQuery  = "DELETE FROM ".PORTOFOLIO." WHERE portofolio_id = '".$param['portofolio_id']."' LIMIT 1";
        $DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
        
        $Result['QueryStatus'] = '1';
        $Result['Message'] = 'Data berhasil dihapus.';
		
		return $Result;
	}
	
	function sync($row) {
		$row = StripArray($row);
		$row['portofolio_name_link'] = base_url('portofolio/'.$row['portofolio_name']);
		$row['portofolio_image_link'] = base_url('static/upload/'.$row['portofolio_image']);
		
		return $row;
	}
}