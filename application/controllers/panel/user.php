<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {
	function index() {
		$this->load->view( 'panel/user_grid' );
	}
	
	function edit($user_id) {
		$this->load->view( 'panel/user_entry', array('user_id' => $user_id) );
	}
	
	function action() {
		$action = (empty($_POST['action'])) ? '' : $_POST['action'];
		
		if ($action == 'Login') {
			$user = $this->User_model->get_by_id(array('user_name' => $_POST['user_name']));
			if (count($user) > 0 && EncriptPassword($_POST['user_pass']) == $user['user_pass']) {
				$this->User_model->set_login($user);
				$result['status'] = true;
				$result['redirect'] = base_url('panel/home/dashboard');
			} else {
				$result['status'] = false;
				$result['message'] = 'Login Gagal';
			}
		} else if ($action == 'Update') {
			if (empty($_POST['user_pass'])) {
				unset($_POST['user_pass']);
			} else {
				$_POST['user_pass'] = EncriptPassword($_POST['user_pass']);
			}
			
			$result = $this->User_model->update($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		} else if ($action == 'Delete') {
			$result = $this->User_model->delete($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		}
		
		
		echo json_encode($result);
	}
}