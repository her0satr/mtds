<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agama_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
    
    function GetArray($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemua'] = (isset($Param['WithSemua'])) ? $Param['WithSemua'] : 0;
		
        $RawQuery = "SELECT * FROM PSB.M_AGAMA WHERE k_agama != '99' ORDER BY K_AGAMA ASC";
		$ArrayAgama = $this->db2->Query($RawQuery);
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArrayAgama, array('CONTENT' => '-'));
		}
		
		if ($Param['WithSemua'] == 1) {
			$ArrayAgama[] = array('singkat' => 'Semua Agama', 'content' => 'Semua Agama');
		}
		
        return $ArrayAgama;
	}
}
?>