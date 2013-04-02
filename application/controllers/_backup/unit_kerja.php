<?php
class unit_kerja extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->User_model->LoginRequired();
        $this->load->view( 'operator/administrasi/unit_kerja' );
    }
	
    function grid() {
        $this->User_model->LoginRequired();
		
		$result['success'] = true;
		$result['rows'] = $this->M_Unit_Kerja->GetArray($_POST);
		$result['totalCount'] = $this->M_Unit_Kerja->GetCount($_POST);
        
        echo json_encode($result);
    }
	
	function action() {
        $this->User_model->LoginRequired();
		
		$Result = array();
		$Action = (isset($_POST['Action'])) ? $_POST['Action'] : '';
		
		if ($Action == 'UpdateUnitKerja') {
			$Result = $this->M_Unit_Kerja->Update($_POST);
		} else if ($Action == 'GetUnitKerjaByID') {
			$Result = $this->M_Unit_Kerja->GetByID(array('unit_kerja_id' => $_POST['unit_kerja_id']));
		} else if ($Action == 'DeteleUnitKerjaByID') {
			$Result = $this->M_Unit_Kerja->Delete(array('unit_kerja_id' => $_POST['unit_kerja_id']));
		}
		
		echo json_encode($Result);
	}
	
	function view() {
		$this->load->view( 'operator/administrasi/popup/unit_kerja');
	}
}