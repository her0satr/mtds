<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Program_Studi_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArrayTawar($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemua'] = (isset($Param['WithSemua'])) ? $Param['WithSemua'] : 0;
		$Param['PILIHAN_KE'] = (isset($Param['PILIHAN_KE'])) ? $Param['PILIHAN_KE'] : 0;
		
		/*
        $RawQuery = "
			CALL PSB.GETPRODITAWAR(
				'" . $Param['K_JENJANG'] . "', '" . $Param['K_FAKULTAS'] . "', '" . $Param['K_SELEKSI'] . "', '" . $Param['TAHUN'] . "',
				'" . $Param['IS_GANJIL'] . "', '" . $Param['K_JUR_SLTA'] . "', '" . $Param['K_SLTA'] . "'
			)";
		/*	*/
        $RawQuery = "
			CALL PSB.GETPRODITAWAR2013(
				'" . $Param['K_CABANG'] . "', '" . $Param['K_JENJANG'] . "', '" . $Param['K_FAKULTAS'] . "', '" . $Param['K_SELEKSI'] . "',
				'" . $Param['TAHUN'] . "', '" . $Param['IS_GANJIL'] . "', '" . $Param['K_JUR_SLTA'] . "', '" . $Param['K_SLTA'] . "'
			)";
		$ArrayProgramStudi = $this->db2->Query($RawQuery);
		
		foreach ($ArrayProgramStudi as $Key => $Array) {
			if (!empty($Param['PILIHAN_KE'])) {
				$Array['PILIHAN_KE'] = $Param['PILIHAN_KE'];
			}
			
			$ArrayProgramStudi[$Key]['JSON'] = json_encode($Array);
			$ArrayProgramStudi[$Key]['CONTENT'] = $Array['PRODI'] . ' - ' . $Array['KELAS'];
		}
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArrayProgramStudi, array('JSON' => '', 'CONTENT' => '-'));
		}
		
		if ($Param['WithSemua'] == 1) {
			$ArrayProgramStudi[] = array('singkat' => 'Semua Program Studi', 'content' => 'Semua Program Studi');
		}
		
        return $ArrayProgramStudi;
	}
}