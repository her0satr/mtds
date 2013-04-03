<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class upload extends CI_Controller {
	function index() {
        $this->load->view( 'panel/common/upload' );
	}
}