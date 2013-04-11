<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Controller {
	function index() {
		$this->load->view( 'panel/contact_grid' );
	}
	
	function action() {
		$action = (empty($_POST['action'])) ? '' : $_POST['action'];
		
		if ($action == 'Delete') {
			$result = $this->Contact_Log_model->delete($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		}
		
		echo json_encode($result);
	}
}