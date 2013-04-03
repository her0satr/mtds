<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	function index() {
		preg_match('/([a-z]+)\/?$/i', $_SERVER['REQUEST_URI'], $Match);
		if (isset($Match[1]) && $Match[1] == 'panel') {
			$redirect_link = base_url('/panel/home');
			header("Location: $redirect_link");
			exit;
		}
		
		$this->load->view( 'website/home' );
	}
	
	function order() {
		$this->load->view( 'website/order' );
	}
	
	function about() {
		$this->load->view( 'website/about' );
	}
	
	function product() {
		$this->load->view( 'website/product' );
	}
	
	function contact() {
		$this->load->view( 'website/contact' );
	}
}