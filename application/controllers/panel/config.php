<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class config extends CI_Controller {
	function index() {
		$this->load->view( 'panel/config_grid' );
	}
	
	function edit($config_id) {
		$this->load->view( 'panel/config_entry', array('config_id' => $config_id) );
	}
	
	function action() {
		$action = (empty($_POST['action'])) ? '' : $_POST['action'];
		
		if ($action == 'Update') {
			$result = $this->Config_model->update($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		} else if ($action == 'Delete') {
			$result = $this->Config_model->delete($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		}
		
		echo json_encode($result);
	}
}