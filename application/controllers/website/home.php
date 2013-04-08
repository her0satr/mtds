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
		$product_name = (empty($this->uri->segments[2])) ? '' : $this->uri->segments[2];
		
		if (empty($product_name)) {
			$this->load->view( 'website/product' );
		} else {
			$this->load->view( 'website/product_detail' );
		}
	}
	
	function portofolio() {
		$this->load->view( 'website/portofolio' );
	}
	
	function service() {
		$this->load->view( 'website/service' );
	}
	
	function domain() {
		$this->load->view( 'website/domain' );
	}
	
	function contact() {
		$this->load->view( 'website/contact' );
	}
}