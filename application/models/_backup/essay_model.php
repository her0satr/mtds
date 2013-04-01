<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Essay_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray($Param = array()) {
        $RawQuery = "CALL ISA.GETMFORM('x')";
		$Array = $this->db2->Query($RawQuery);
		
        return $Array;
	}
	
	function GetArrayPasca() {
		$Array = array(
			array('K_FORM' => 1, 'CONTENT' => 'Apa ada memiliki Pemberi Rekomenasi Kelayakan Akademik, jika ada harap tulis sesuai format : Nama - Jabatan - Instansi'),
			array('K_FORM' => 2, 'CONTENT' => 'Pengajuan Lamaran ke Program Pascasarjana Universitas Brawijaya, jika pernah isikan tahun pengajuannya'),
			array('K_FORM' => 3, 'CONTENT' => 'Tuliskan Karya Ilmiah yang pernah anda buat'),
			array('K_FORM' => 4, 'CONTENT' => 'Sebutkan kekuatan dan kelemahan yang anda miliki'),
			array('K_FORM' => 5, 'CONTENT' => 'Sebutkan identitas pemberi rekomendasi jika ada')
		);
		
		return $Array;
	}
}
