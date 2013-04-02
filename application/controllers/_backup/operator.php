<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class operator extends CI_Controller {
	function index() {
		$LinkOperator = $this->config->item('base_url') . '/manage/home';
		header('Location: ' . $LinkOperator);
		exit;
	}
}