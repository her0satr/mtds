<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	function index() {
        $this->load->view( 'panel/login' );
	}
	
	function dashboard() {
        $this->User_model->login_required();
        $this->load->view( 'panel/dashboard' );
	}
	
	function logout() {
		$this->User_model->logout();
		exit;
	}
}