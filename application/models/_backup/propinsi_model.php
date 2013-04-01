<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Propinsi_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemuaPropinsi'] = (isset($Param['WithSemuaPropinsi'])) ? $Param['WithSemuaPropinsi'] : 0;
		
        $RawQuery = "SELECT * FROM PSB.M_PROPINSI WHERE k_negara = '" . $Param['K_NEGARA'] . "'";
		$ArrayPropinsi = $this->db2->Query($RawQuery);
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArrayPropinsi, array('CONTENT' => '-'));
		}
		
		if ($Param['WithSemuaPropinsi'] == 1) {
			$ArrayPropinsi[] = array('singkat' => 'Semua Propinsi', 'content' => 'Semua Propinsi');
		}
        return $ArrayPropinsi;
	}
}