<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quota_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
	function Update($Param) {
        $RawQuery = "CALL PSB.INSKODEPENDAFTAR('".$Param['K_SELEKSI']."', '".$Param['K_JENJANG']."', ".$Param['JUMLAH'].")";
		$Array = $this->db2->Query($RawQuery, 1);
		$Array = GetMessage($Array);
		
		return $Array;
	}
	
	function GetArray($Param = array()) {
        $RawQuery = "
			SELECT
				B.CONTENT SELEKSI, C.CONTENT JENJANG, COUNT TERSEDIA
			FROM PSB.KODE_PENDAFTAR A
			LEFT JOIN PSB.M_SELEKSI B ON A.K_SELEKSI = B.K_SELEKSI
			LEFT JOIN PSB.M_JENJANG C ON A.K_JENJANG = C.K_JENJANG
			WHERE IS_USED = '0'
			GROUP BY B.CONTENT, C.CONTENT
			ORDER BY B.CONTENT ASC
		";
		$Array = $this->db2->Query($RawQuery);
		
		return $Array;
	}
}