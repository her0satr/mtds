<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slta_Jurusan_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemuaSltaJurusan'] = (isset($Param['WithSemuaSltaJurusan'])) ? $Param['WithSemuaSltaJurusan'] : 0;
		
        $RawQuery = "
			SELECT *
				FROM PSB.JUR_SLTA A, PSB.M_JUR_SLTA B
				WHERE
					A.K_KEJURUAN = B.K_KEJURUAN
					AND A.K_JUR_SLTA = B.K_JUR_SLTA
					AND K_SLTA = '" . $Param['K_SLTA'] . "'
		";
		$ArraySltaJurusan = $this->db2->Query($RawQuery);
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArraySltaJurusan, array('CONTENT' => '-'));
		}
		
		if ($Param['WithSemuaSltaJurusan'] == 1) {
			$ArraySltaJurusan[] = array('singkat' => 'Semua SltaJurusan', 'content' => 'Semua SltaJurusan');
		}
        return $ArraySltaJurusan;
	}
}