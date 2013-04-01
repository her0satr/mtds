<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jenjang_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemua'] = (isset($Param['WithSemua'])) ? $Param['WithSemua'] : 0;
		$Param['IsPasca'] = (isset($Param['IsPasca'])) ? $Param['IsPasca'] : 0;
		
        $RawQuery = "SELECT * FROM PSB.M_JENJANG ORDER BY CONTENT ASC";
		$ArrayJenjang = $this->db2->Query($RawQuery);
		
		if ($Param['IsPasca'] == 1) {
			foreach ($ArrayJenjang as $Key => $Array) {
				if (! in_array($Array['K_JENJANG'], array(03, 02, 11))) {
					unset($ArrayJenjang[$Key]);
				}
			}
		}
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArrayJenjang, array('CONTENT' => '-', 'CONTENT_ENG' => '-'));
		}
		
		if ($Param['WithSemua'] == 1) {
			$ArrayJenjang[] = array('singkat' => 'Semua Jenjang', 'content' => 'Semua Jenjang');
		}
		
        return $ArrayJenjang;
	}
}
