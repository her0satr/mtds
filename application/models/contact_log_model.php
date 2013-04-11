<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_Log_model extends CI_Model {
	function __construct() {
        parent::__construct();
		
        $this->Field = array('contact_log_id', 'contact_log_desc', 'contact_log_date');
    }
	
	function update($param) {
		$Result = array();
		
		if (empty($param['contact_log_id'])) {
			$InsertQuery  = GenerateInsertQuery($this->Field, $param, CONTACT_LOG);
			$InsertResult = mysql_query($InsertQuery) or die(mysql_error());
		   
			$Result['contact_log_id'] = mysql_insert_id();
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil disimpan..';
		} else {
			$UpdateQuery  = GenerateUpdateQuery($this->Field, $param, CONTACT_LOG);
			$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
		   
			$Result['contact_log_id'] = $param['contact_log_id'];
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil diperbaharui..';
		}
		
		return $Result;
	}
	
	function get_by_id($param) {
		$Array = array();
        
		if (isset($param['contact_log_id'])) {
            $SelectQuery  = "
                SELECT ContactLog.*
                FROM ".CONTACT_LOG." ContactLog
                WHERE ContactLog.contact_log_id = '".$param['contact_log_id']."'
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
		$StringSorting = (isset($param['sort'])) ? GetStringSorting($param['sort']) : 'contact_log_date DESC';
		
		$SelectQuery = "
			SELECT ContactLog.*
			FROM ".CONTACT_LOG." ContactLog
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
			FROM ".CONTACT_LOG." ContactLog
			WHERE 1 $StringFilter
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$TotalRecord = $Row['TotalRecord'];
		}
		
		return $TotalRecord;
	}
	
	function delete($param) {
        $DeleteQuery  = "DELETE FROM ".CONTACT_LOG." WHERE contact_log_id = '".$param['contact_log_id']."' LIMIT 1";
        $DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
        
        $Result['QueryStatus'] = '1';
        $Result['Message'] = 'Data berhasil dihapus.';
		
		return $Result;
	}
	
	function sync($row) {
		$row = StripArray($row);
		
		return $row;
	}
}