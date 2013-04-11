<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news extends CI_Controller {
	function index() {
		$this->load->view( 'panel/news_grid' );
	}
	
	function edit($news_id) {
		$this->load->view( 'panel/news_entry', array('news_id' => $news_id) );
	}
	
	function action() {
		$action = (empty($_POST['action'])) ? '' : $_POST['action'];
		
		if ($action == 'Update') {
			if (isset($_POST['news_title']))
				$_POST['news_name'] = $this->News_model->get_name($_POST['news_title']);
			
			$result = $this->News_model->update($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		} else if ($action == 'Delete') {
			$result = $this->News_model->delete($_POST);
			if ($result['QueryStatus'] == 1) {
				flashmsg_set($result['Message']);
			}
		}
		
		echo json_encode($result);
	}
}