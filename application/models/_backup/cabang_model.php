<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabang_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
    
    function GetArray($Param = array()) {
		$Param['EmptyRecord'] = (isset($Param['EmptyRecord'])) ? $Param['EmptyRecord'] : 1;
		$Param['WithSemua'] = (isset($Param['WithSemua'])) ? $Param['WithSemua'] : 0;
		
		$ArrayCabang = array(
			array('K_CABANG' => 1, 'CABANG_NAMA' => 'Malang'),
			array('K_CABANG' => 3, 'CABANG_NAMA' => 'Kediri'),
			array('K_CABANG' => 30, 'CABANG_NAMA' => 'Vokasi')
		);
		
		if ($Param['EmptyRecord'] == 1) {
			array_unshift($ArrayCabang, array('K_CABANG' => '', 'CABANG_NAMA' => '-'));
		}
		
		if ($Param['WithSemua'] == 1) {
			$ArrayCabang[] = array('K_CABANG' => 'Semua Cabang', 'CABANG_NAMA' => 'Semua Cabang');
		}
		
        return $ArrayCabang;
	}
}
?>