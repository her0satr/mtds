<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {
	function __construct() {
        parent::__construct();
		
        $this->Field = array('news_id', 'news_name', 'news_title', 'news_desc', 'news_date');
    }
	
	function update($param) {
		$Result = array();
		
		if (empty($param['news_id'])) {
			$InsertQuery  = GenerateInsertQuery($this->Field, $param, NEWS);
			$InsertResult = mysql_query($InsertQuery) or die(mysql_error());
		   
			$Result['news_id'] = mysql_insert_id();
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil disimpan..';
		} else {
			$UpdateQuery  = GenerateUpdateQuery($this->Field, $param, NEWS);
			$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
		   
			$Result['news_id'] = $param['news_id'];
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil diperbaharui..';
		}
		
		return $Result;
	}
	
	function get_by_id($param) {
		$Array = array();
        
		if (isset($param['news_id'])) {
            $SelectQuery  = "
                SELECT News.*
                FROM ".NEWS." News
                WHERE News.news_id = '".$param['news_id']."'
                LIMIT 1";
		} else if (isset($param['news_name'])) {
            $SelectQuery  = "
                SELECT News.*
                FROM ".NEWS." News
                WHERE News.news_name = '".$param['news_name']."'
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
		$StringSorting = (isset($param['sort'])) ? GetStringSorting($param['sort']) : 'news_date DESC';
		
		$SelectQuery = "
			SELECT News.*
			FROM ".NEWS." News
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
			FROM ".NEWS." News
			WHERE 1 $StringFilter
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$TotalRecord = $Row['TotalRecord'];
		}
		
		return $TotalRecord;
	}
	
	function get_name($value) {
		$name = strtolower(trim($value));
		$name = preg_replace('/[^0-9a-z]/i', '_', $name);
		return $name;
	}
	
	function delete($param) {
        $DeleteQuery  = "DELETE FROM ".NEWS." WHERE news_id = '".$param['news_id']."' LIMIT 1";
        $DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
        
        $Result['QueryStatus'] = '1';
        $Result['Message'] = 'Data berhasil dihapus.';
		
		return $Result;
	}
	
	function sync($row) {
		$row = StripArray($row);
		$row['news_link'] = base_url('news/'.$row['news_name']);
		
		$array_news_desc = explode('<!-- pagebreak -->', $row['news_desc'], 2);
		$row['news_desc_simple'] = $array_news_desc[0];
		
		return $row;
	}
}