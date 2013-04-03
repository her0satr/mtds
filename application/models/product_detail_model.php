<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_Detail_model extends CI_Model {
	function __construct() {
        parent::__construct();
		
        $this->Field = array('product_detail_id', 'product_id', 'display_type_id', 'product_detail_title', 'product_detail_desc', 'order_no');
    }
	
	function update($param) {
		$Result = array();
		
		if (empty($param['portofolio_id'])) {
			$InsertQuery  = GenerateInsertQuery($this->Field, $param, PRODUCT_DETAIL);
			$InsertResult = mysql_query($InsertQuery) or die(mysql_error());
		   
			$Result['portofolio_id'] = mysql_insert_id();
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil disimpan..';
		} else {
			$UpdateQuery  = GenerateUpdateQuery($this->Field, $param, PRODUCT_DETAIL);
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
                SELECT ProductDetail.*
                FROM ".PRODUCT_DETAIL." ProductDetail
                WHERE ProductDetail.portofolio_id = '".$param['portofolio_id']."'
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
		$StringSorting = (isset($param['sort'])) ? GetStringSorting($param['sort']) : 'product_detail_title ASC';
		
		$SelectQuery = "
			SELECT ProductDetail.*
			FROM ".PRODUCT_DETAIL." ProductDetail
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
			FROM ".PRODUCT_DETAIL." ProductDetail
			WHERE 1 $StringFilter
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$TotalRecord = $Row['TotalRecord'];
		}
		
		return $TotalRecord;
	}
	
	function delete($param) {
        $DeleteQuery  = "DELETE FROM ".PRODUCT_DETAIL." WHERE portofolio_id = '".$param['portofolio_id']."' LIMIT 1";
        $DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
        
        $Result['QueryStatus'] = '1';
        $Result['Message'] = 'Data berhasil dihapus.';
		
		return $Result;
	}
}