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
		// get page
		preg_match('/page\_([0-9]+)/i', $_SERVER['REQUEST_URI'], $match);
		$page_active = (isset($match[1])) ? $match[1] : 1;
		
		// get portofolio name
		preg_match('/portofolio\/([0-9a-z\_]+)/i', $_SERVER['REQUEST_URI'], $match);
		$portofolio_name = (isset($match[1])) ? $match[1] : '';
		
		$this->load->view( 'website/portofolio', array( 'page_active' => $page_active, 'portofolio_name' => $portofolio_name ) );
	}
	
	function news() {
		$product_name = (empty($this->uri->segments[2])) ? '' : $this->uri->segments[2];
		
		if (empty($product_name)) {
			$this->load->view( 'website/news' );
		} else {
			$this->load->view( 'website/news_detail' );
		}
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