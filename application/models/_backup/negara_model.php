<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Negara_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemuaNegara'] = (isset($Param['WithSemuaNegara'])) ? $Param['WithSemuaNegara'] : 0;
		
        $RawQuery = "SELECT * FROM PSB.M_NEGARA WHERE content != '-' ORDER BY content ASC";
		$ArrayNegara = $this->db2->Query($RawQuery);
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArrayNegara, array('CONTENT' => '-'));
		}
		
		if ($Param['WithSemuaNegara'] == 1) {
			$ArrayNegara[] = array('singkat' => 'Semua Negara', 'content' => 'Semua Negara');
		}
        return $ArrayNegara;
	}
}