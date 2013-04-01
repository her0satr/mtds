<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Warga_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
    
    function GetArray($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemua'] = (isset($Param['WithSemua'])) ? $Param['WithSemua'] : 0;
		
        $RawQuery = "SELECT * FROM PSB.M_WARGA WHERE content != '-'";
		$ArrayWarga = $this->db2->Query($RawQuery);
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArrayWarga, array('CONTENT' => '-'));
		}
		
		if ($Param['WithSemua'] == 1) {
			$ArrayWarga[] = array('singkat' => 'Semua Warga', 'content' => 'Semua Warga');
		}
		
        return $ArrayWarga;
	}
}
?>