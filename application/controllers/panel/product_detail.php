<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_detail extends CI_Controller {
	function index($product_id) {
		$this->load->view( 'panel/product_detail_grid', array('product_id' => $product_id) );
	}
	
	function edit($product_id, $product_detail_id) {
		$this->load->view( 'panel/product_detail_entry', array('product_id' => $product_id, 'product_detail_id' => $product_detail_id) );
	}
	
	function action() {
		$action = (empty($_POST['action'])) ? '' : $_POST['action'];
		
		if ($action == 'Update') {
			$_POST['product_detail_desc'] = tinymc_fix($_POST['product_detail_desc']);
			$result = $this->Product_Detail_model->update($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		} else if ($action == 'Delete') {
			$result = $this->Product_Detail_model->delete($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		}
		
		echo json_encode($result);
	}
}