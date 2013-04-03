<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class portofolio extends CI_Controller {
	function index() {
		$this->load->view( 'panel/portofolio_grid' );
	}
	
	function edit($portofolio_id) {
		$this->load->view( 'panel/portofolio_entry', array('portofolio_id' => $portofolio_id) );
	}
	
	function action() {
		$action = (empty($_POST['action'])) ? '' : $_POST['action'];
		
		if ($action == 'Update') {
			$result = $this->Portofolio_model->update($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		} else if ($action == 'Delete') {
			$result = $this->Portofolio_model->delete($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		}
		
		echo json_encode($result);
	}
}