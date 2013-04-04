<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_Detail_model extends CI_Model {
	function __construct() {
        parent::__construct();
		
        $this->Field = array('product_detail_id', 'product_id', 'display_type_id', 'product_detail_title', 'product_detail_desc', 'order_no');
    }
	
	function update($param) {
		$Result = array();
		
		if (empty($param['product_detail_id'])) {
			$InsertQuery  = GenerateInsertQuery($this->Field, $param, PRODUCT_DETAIL);
			$InsertResult = mysql_query($InsertQuery) or die(mysql_error());
		   
			$Result['product_detail_id'] = mysql_insert_id();
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil disimpan..';
		} else {
			$UpdateQuery  = GenerateUpdateQuery($this->Field, $param, PRODUCT_DETAIL);
			$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
		   
			$Result['product_detail_id'] = $param['product_detail_id'];
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil diperbaharui..';
		}
		
		return $Result;
	}
	
	function get_by_id($param) {
		$Array = array();
        
		if (isset($param['product_detail_id'])) {
            $SelectQuery  = "
                SELECT ProductDetail.*
                FROM ".PRODUCT_DETAIL." ProductDetail
                WHERE ProductDetail.product_detail_id = '".$param['product_detail_id']."'
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
		$StringProduct = (isset($param['product_id']) && !empty($param['product_id'])) ? "AND ProductDetail.product_id = '".$param['product_id']."'" : "";
		$StringFilter = GetStringFilter($param);
		
		$PageOffset = (isset($param['start']) && !empty($param['start'])) ? $param['start'] : 0;
		$PageLimit = (isset($param['limit']) && !empty($param['limit'])) ? $param['limit'] : 25;
		$StringSorting = (isset($param['sort'])) ? GetStringSorting($param['sort']) : 'DisplayType.display_type_order ASC, ProductDetail.order_no ASC';
		
		$SelectQuery = "
			SELECT ProductDetail.*, DisplayType.display_type_name
			FROM ".PRODUCT_DETAIL." ProductDetail
			LEFT JOIN ".DISPLAY_TYPE." DisplayType ON DisplayType.display_type_id = ProductDetail.display_type_id
			WHERE 1 $StringProduct $StringFilter
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
		
		$StringProduct = (isset($param['product_id']) && !empty($param['product_id'])) ? "AND ProductDetail.product_id = '".$param['product_id']."'" : "";
		$StringFilter = GetStringFilter($param);
		
		$SelectQuery = "
			SELECT COUNT(*) AS TotalRecord
			FROM ".PRODUCT_DETAIL." ProductDetail
			WHERE 1 $StringProduct $StringFilter
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$TotalRecord = $Row['TotalRecord'];
		}
		
		return $TotalRecord;
	}
	
	function delete($param) {
        $DeleteQuery  = "DELETE FROM ".PRODUCT_DETAIL." WHERE product_detail_id = '".$param['product_detail_id']."' LIMIT 1";
        $DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
        
        $Result['QueryStatus'] = '1';
        $Result['Message'] = 'Data berhasil dihapus.';
		
		return $Result;
	}
}