<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_Category_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
	function get_array($param = array()) {
		$param['EmptyOption'] = (empty($param['EmptyOption'])) ? 1 : $param['EmptyOption'];
		
		if ($param['EmptyOption'] == 1) {
			$Array[] = array('product_category_id' => '0', 'product_category_name' => '-');
		} else {
			$Array = array();
		}
		
		$StringFilter = GetStringFilter($param);
		
		$PageOffset = (isset($param['start']) && !empty($param['start'])) ? $param['start'] : 0;
		$PageLimit = (isset($param['limit']) && !empty($param['limit'])) ? $param['limit'] : 25;
		$StringSorting = (isset($param['sort'])) ? GetStringSorting($param['sort']) : 'product_category_name ASC';
		
		$SelectQuery = "
			SELECT ProductCategory.*
			FROM ".PRODUCT_CATEGORY." ProductCategory
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
}