<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fakultas_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray($Param = array()) {
		$Param['IsQuery'] = (isset($Param['IsQuery'])) ? $Param['IsQuery'] : 0;
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemua'] = (isset($Param['WithSemua'])) ? $Param['WithSemua'] : 0;
		
		$StringJenjang = (!empty($Param['K_JENJANG'])) ? "AND K_JENJANG = '" . $Param['K_JENJANG'] . "'" : '';
		
		if ($Param['IsQuery'] == 1) {
			$RawQuery = "SELECT * FROM PSB.M_FAKULTAS WHERE K_FAKULTAS <> 'x' $StringJenjang";
		} else {
//			$RawQuery = "CALL PSB.GETM_FAKULTAS_SPMK('".$Param['TAHUN']."', '".$Param['IS_GANJIL']."')";
			$RawQuery = "CALL PSB.GETFAKULTASBYCABANG('".$Param['K_CABANG']."', '".$Param['TAHUN']."', '".$Param['K_SELEKSI']."')";
		}
		
		$ArrayFakultas = array();
		$ArrayTable = $this->db2->Query($RawQuery);
		foreach ($ArrayTable as $Key => $Array) {
			if ($Array['K_FAKULTAS'] == '14') {
				continue;
			}
			
			$ArrayFakultas[$Key] = $ArrayTable[$Key];
			$ArrayFakultas[$Key]['JSON'] = json_encode($Array);
		}
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArrayFakultas, array('CONTENT' => '-', 'CONTENT_ENG' => '-', 'FAKULTAS' => '-'));
		}
		
		if ($Param['WithSemua'] == 1) {
			$ArrayFakultas[] = array('singkat' => 'Semua Fakultas', 'content' => 'Semua Fakultas');
		}
		
        return $ArrayFakultas;
	}
}