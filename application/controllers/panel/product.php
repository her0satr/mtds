<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product extends CI_Controller {
	function index() {
		$this->load->view( 'panel/product_grid' );
	}
	
	function edit($product_id) {
		$this->load->view( 'panel/product_entry', array('product_id' => $product_id) );
	}
	
	function action() {
		$action = (empty($_POST['action'])) ? '' : $_POST['action'];
		
		if ($action == 'Update') {
			$result = $this->Product_model->update($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		} else if ($action == 'Delete') {
			$result = $this->Product_model->delete($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		}
		
		echo json_encode($result);
	}
}