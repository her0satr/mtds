<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftar_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
	/*	Region Stored Procedure */
	
	function GetPendaftar($Param) {
		if (isset($Param['NO_PENDAFTARAN'])) {
			$RawQuery = "CALL PSB.SPMKCEKLOGIN('" . $Param['NO_PENDAFTARAN'] . "','" . $Param['K_SELEKSI'] . "')";
			$RecordTemp = $this->db2->Query($RawQuery);
			if (count($RecordTemp) == 1) {
				$Record = $RecordTemp[0];
			}
		}
		
		return $Record;
	}
	
	function GetBySP($Param) {
		$RawQuery = "CALL PSB.GETPENDAFTARBIO( '".$Param['K_PENDAFTAR']."' )";
		$RecordTemp = $this->db2->Query($RawQuery);
		
		$Record = array();
		if (count($RecordTemp) == 1) {
			$Record = $RecordTemp[0];
		}
		
		if (!empty($Record['PHOTO_PATH'])) {
			$Record['PHOTO_PATH_LINK'] = 'http://ws.ub.ac.id/selma2010/public/images/UserTemp/' . $Record['PHOTO_PATH'];
		} else {
			$Record['PHOTO_PATH_LINK'] = $this->config->item('base_url') . '/static/images/no-pict.jpg';
		}
		
		return $Record;
	}
	
    function GetProgramStudy($Param) {
        $ArrayPilihan = array();
        $RawQuery = "CALL PSB.GETPENDAFTARPIL('".$Param['K_PENDAFTAR']."')";
		$RecordTemp = $this->db2->Query($RawQuery);
        $ArrayPilihan = (is_array($RecordTemp)) ? $RecordTemp : $ArrayPilihan;
		
		return $ArrayPilihan;
    }
	
	function UpdateXml($Param) {
        $RawQuery = "CALL PSB.INSRAWPENDAFTAR ('" . $Param['NO_PENDAFTARAN'] . "', '" . $Param['Xml'] . "')";
		$ResultQuery = $this->db2->Query($RawQuery, 1);
	}
	
	function ExecuteXml($Param) {
		if ($Param['K_SELEKSI'] == K_SELEKSI_ISA) {
			$RawQuery = "CALL ISA.INSPENDAFTAR2013 ('" . $Param['NO_PENDAFTARAN'] . "', '" . $Param['TAHUN'] . "')";
		} else {
			$RawQuery = "CALL PSB.INSPENDAFTAR2013 ('" . $Param['NO_PENDAFTARAN'] . "', '" . $Param['TAHUN'] . "', '" . $Param['K_SELEKSI'] . "')";
		}
		$ResultQuery = $this->db2->Query($RawQuery, 1);
		
		return $ResultQuery[0];
	}
	
	function DeleteNoPendaftar($Param) {
        $RawQuery = "CALL PSB.DELRAWPENDAFTAR ('" . $Param['NO_PENDAFTARAN'] . "')";
		$ResultQuery = $this->db2->Query($RawQuery, 1);
		
		return $ResultQuery[0];
	}
	
	/*	Region Photo */
	function UpdatePhoto($Param) {
        $RawQuery = "CALL PSB.UPDPENDAFTAR2013 ('" . $Param['NO_PENDAFTARAN'] . "', '" . $Param['PHOTO_PATH'] . "')";
		$ResultQuery = $this->db2->Query($RawQuery, 1);
		return $ResultQuery[0];
	}
}