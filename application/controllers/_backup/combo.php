<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class combo extends CI_Controller {
	function index() {
		$Action = (isset($_POST['Action'])) ? $_POST['Action'] : '';
		unset($_POST['Action']);
		
		$StringArrayID = (isset($_POST['ArrayID'])) ? $_POST['ArrayID'] : 'JSON';
		$StringArrayTitle = (isset($_POST['ArrayTitle'])) ? $_POST['ArrayTitle'] : 'CONTENT';
		
		if ($Action == 'GetSltaUjianSpmkByKota') {
			$Param = array(
				'K_KOTA' => (isset($_POST['K_KOTA'])) ? $_POST['K_KOTA'] : '',
				'K_PROPINSI' => (isset($_POST['K_PROPINSI'])) ? $_POST['K_PROPINSI'] : '',
				'K_NEGARA' => (isset($_POST['K_NEGARA'])) ? $_POST['K_NEGARA'] : '',
				'TAHUN' => (isset($_POST['TAHUN'])) ? $_POST['TAHUN'] : ''
			);
            $Result = $this->Slta_model->GetLokasiUjianSpmk($Param);
            echo ShowOption(array( 'Array' => $Result, 'ArrayID' => 'K_SLTA', 'ArrayTitle' => $StringArrayTitle));
		} else if ($Action == 'GetPropinsiByNegara') {
			$Result = $this->Propinsi_model->GetArray($_POST);
            echo ShowOption(array( 'Array' => $Result, 'ArrayID' => 'K_PROPINSI', 'ArrayTitle' => $StringArrayTitle));
		} else if ($Action == 'GetKotaByPropinsi') {
			$Result = $this->Kota_model->GetArray($_POST);
            echo ShowOption(array( 'Array' => $Result, 'ArrayID' => 'K_KOTA', 'ArrayTitle' => $StringArrayTitle));
		} else if ($Action == 'GetSltaByKota') {
			$Result = $this->Slta_model->GetArray($_POST);
            echo ShowOption(array( 'Array' => $Result, 'ArrayID' => 'K_SLTA', 'ArrayTitle' => $StringArrayTitle));
		} else if ($Action == 'GetJurusanSltaBySlta') {
			$Result = $this->Slta_Jurusan_model->GetArray($_POST);
            echo ShowOption(array( 'Array' => $Result, 'ArrayID' => 'K_JUR_SLTA', 'ArrayTitle' => $StringArrayTitle));
		} else if ($Action == 'GetFakultasByJenjang') {
			$Result = $this->Fakultas_model->GetArray($_POST);
            echo ShowOption(array( 'Array' => $Result, 'ArrayID' => $StringArrayID, 'ArrayTitle' => $StringArrayTitle));
		} else if ($Action == 'GetFakultasByCabang') {
			$Result = $this->Fakultas_model->GetArray($_POST);
            echo ShowOption(array( 'Array' => $Result, 'ArrayID' => $StringArrayID, 'ArrayTitle' => $StringArrayTitle));
		} else if ($Action == 'GetProgramStudiByFakultas') {
			$Result = $this->Program_Studi_model->GetArrayTawar($_POST);
            echo ShowOption(array( 'Array' => $Result, 'ArrayID' => $StringArrayID, 'ArrayTitle' => $StringArrayTitle));
		}
	}
	
	function ext() {
		$Action = (isset($_POST['Action'])) ? $_POST['Action'] : '';
		unset($_POST['Action']);
		
		// Name Like
		$NameLike = $this->input->post('NameLike');
		$NameLike = (empty($NameLike)) ? $this->input->post('query') : $NameLike;
		
		// Force Display ID
		$ForceID = $this->input->post('ForceID');
		$TempForceID = preg_replace('/[^0-9]+/i', '', $ForceID);
		$ForceDisplayID = ($ForceID == $TempForceID) ? $ForceID : 0;
		
		// Limit Option
		$Limit = 75;
		
		if ($Action == 'Jenjang') {
			$Result = $this->Jenjang_model->GetArray(array('EmptyRecord' => 0));
		} else if ($Action == 'Seleksi') {
			$Result = $this->Seleksi_model->GetArray(array('EmptyRecord' => 0));
		}
		
		echo json_encode($Result);
	}
}