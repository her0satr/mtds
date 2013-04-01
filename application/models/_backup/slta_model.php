<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slta_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemuaPropinsi'] = (isset($Param['WithSemuaPropinsi'])) ? $Param['WithSemuaPropinsi'] : 0;
		
        $RawQuery = "SELECT * FROM PSB.M_SLTA WHERE K_KOTA = '" . $Param['K_KOTA'] . "'";
		$ArrayPropinsi = $this->db2->Query($RawQuery);
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArrayPropinsi, array('CONTENT' => '-'));
		}
		
		if ($Param['WithSemuaPropinsi'] == 1) {
			$ArrayPropinsi[] = array('singkat' => 'Semua Propinsi', 'content' => 'Semua Propinsi');
		}
        return $ArrayPropinsi;
	}
	
    function GetLokasiUjianSpmk($Param) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemuaSlta'] = (isset($Param['WithSemuaSlta'])) ? $Param['WithSemuaSlta'] : 0;
		
        $RawQuery = "CALL PSB.GETSLTAUJIAN('".$Param['K_KOTA']."', '".$Param['K_PROPINSI']."', '".$Param['K_NEGARA']."', '".$Param['TAHUN']."', '3')";
		$ArraySlta = $this->db2->Query($RawQuery);
		
		foreach ($ArraySlta as $Key => $Array) {
			$ArraySlta[$Key]['JSON'] = json_encode($Array);
		}
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArraySlta, array('CONTENT' => '-'));
		}
		
		if ($Param['WithSemuaSlta'] == 1) {
			$ArraySlta[] = array('singkat' => 'Semua Slta', 'content' => 'Semua Slta');
		}
        
        return $ArraySlta;
	}
}