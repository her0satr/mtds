<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {
	function __construct() {
        parent::__construct();
		
        $this->Field = array('product_id', 'product_category_id', 'product_name', 'product_title', 'product_desc', 'product_image', 'product_date');
    }
	
	function update($param) {
		$Result = array();
		
		if (empty($param['product_id'])) {
			$InsertQuery  = GenerateInsertQuery($this->Field, $param, PRODUCT);
			$InsertResult = mysql_query($InsertQuery) or die(mysql_error());
		   
			$Result['product_id'] = mysql_insert_id();
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil disimpan..';
		} else {
			$UpdateQuery  = GenerateUpdateQuery($this->Field, $param, PRODUCT);
			$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
		   
			$Result['product_id'] = $param['product_id'];
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil diperbaharui..';
		}
		
		return $Result;
	}
	
	function get_by_id($param) {
		$Array = array();
        
		if (isset($param['product_id'])) {
            $SelectQuery  = "
                SELECT Product.*, ProductCategory.product_category_name
                FROM ".PRODUCT." Product
				LEFT JOIN ".PRODUCT_CATEGORY." ProductCategory ON ProductCategory.product_category_id = Product.product_category_id
                WHERE Product.product_id = '".$param['product_id']."'
                LIMIT 1";
		} else if (isset($param['product_name'])) {
            $SelectQuery  = "
                SELECT Product.*, ProductCategory.product_category_name
                FROM ".PRODUCT." Product
				LEFT JOIN ".PRODUCT_CATEGORY." ProductCategory ON ProductCategory.product_category_id = Product.product_category_id
                WHERE Product.product_name = '".$param['product_name']."'
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
		$StringSorting = (isset($param['sort'])) ? GetStringSorting($param['sort']) : 'product_title ASC';
		
		$SelectQuery = "
			SELECT Product.*, ProductCategory.product_category_name
			FROM ".PRODUCT." Product
			LEFT JOIN ".PRODUCT_CATEGORY." ProductCategory ON ProductCategory.product_category_id = Product.product_category_id
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
			FROM ".PRODUCT." Product
			WHERE 1 $StringFilter
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$TotalRecord = $Row['TotalRecord'];
		}
		
		return $TotalRecord;
	}
	
	function delete($param) {
        $DeleteQuery  = "DELETE FROM ".PRODUCT." WHERE product_id = '".$param['product_id']."' LIMIT 1";
        $DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
        
        $Result['QueryStatus'] = '1';
        $Result['Message'] = 'Data berhasil dihapus.';
		
		return $Result;
	}
	
	function sync($row) {
		$row = StripArray($row);
		$row['product_link'] = base_url('product/'.$row['product_name']);
		$row['product_image_link'] = base_url('static/upload/'.$row['product_image']);
		
		return $row;
	}
}