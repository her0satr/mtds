<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seleksi_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemua'] = (isset($Param['WithSemua'])) ? $Param['WithSemua'] : 0;
		
        $RawQuery = "SELECT * FROM PSB.M_SELEKSI ORDER BY CONTENT ASC";
		$ArraySeleksi = $this->db2->Query($RawQuery);
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArraySeleksi, array('CONTENT' => '-', 'CONTENT_ENG' => '-'));
		}
		
		if ($Param['WithSemua'] == 1) {
			$ArraySeleksi[] = array('singkat' => 'Semua Seleksi', 'content' => 'Semua Seleksi');
		}
		
        return $ArraySeleksi;
	}
}
