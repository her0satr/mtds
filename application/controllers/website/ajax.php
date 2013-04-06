<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ajax extends CI_Controller {
	function index() {
		$action = (empty($_POST['action'])) ? '' : $_POST['action'];
		unset($_POST['action']);
		$array_config = $this->Config_model->init();
		
		$result = array();
		if ($action == 'SubmitEmail') {
			$mail_param = array();
			$mail_param['To']  = html_entity_decode($array_config['admin-email']['config_content_clean']);
			$mail_param['From']  = $_POST['email'];
			$mail_param['Header']  = 'To: ' . html_entity_decode($array_config['admin-email']['config_content_clean']) . "\r\n";
			$mail_param['Header'] .= 'From: ' . $_POST['email'] . "\r\n";
			$mail_param['Subject'] = 'Penawaran Mitra Desain';
			
			$mail_param['Message'] = '';
			foreach ($_POST as $key => $value) {
				$mail_param['Message'] .= $key.' : '.$value."\n";
			}
			SentMail($mail_param);
			
			$result['status'] = true;
			$result['message'] = 'Terima Kasih, informasi anda berhasil dikirim.';
		}
		
		echo json_encode($result);
	}
}