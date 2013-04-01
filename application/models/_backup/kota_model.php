<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kota_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemuaKota'] = (isset($Param['WithSemuaKota'])) ? $Param['WithSemuaKota'] : 0;
		
        $RawQuery = "SELECT * FROM PSB.M_KOTA WHERE K_PROPINSI = '" . $Param['K_PROPINSI'] . "'";
		$ArrayKota = $this->db2->Query($RawQuery);
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArrayKota, array('CONTENT' => '-'));
		}
		
		if ($Param['WithSemuaKota'] == 1) {
			$ArrayKota[] = array('singkat' => 'Semua Kota', 'content' => 'Semua Kota');
		}
        return $ArrayKota;
	}
	
    function GetArraySpmk($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		
		$ArraySpmk = $this->db2->Query("CALL PSB.GETKOTAUJIAN('" . TAHUN . "')");
		
		foreach ($ArraySpmk as $Key => $Array) {
			$ArraySpmk[$Key]['JSON'] = json_encode($Array);
		}
		
		if ($Param['EmptyRecord']) {
			array_unshift($ArraySpmk, array('JSON' => '-', 'CONTENT' => '-'));
		}
		
		return $ArraySpmk;
    }
}