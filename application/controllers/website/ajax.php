<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ajax extends CI_Controller {
	function index() {
		$action = (empty($_POST['action'])) ? '' : $_POST['action'];
		unset($_POST['action']);
		$array_config = $this->Config_model->init();
		
		$result = array();
		if ($action == 'SubmitEmail') {
			$message = '';
			foreach ($_POST as $key => $value) {
				$message .= $key.' : '.$value."<br />\n";
			}
			
			$email_dest = $array_config['admin-email']['config_content_clean'];
			$array_email_to = explode(',',  $email_dest);
			foreach ($array_email_to as $email_to) {
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: ' . $_POST['email'] . "\r\n";
				mail(trim($email_to), 'Penawaran Mitra Desain', $message, $headers);
			}
			
			$param_update = array(
				'contact_log_id' => 0,
				'contact_log_desc' => $message,
				'contact_log_date' => date("Y-m-d")
			);
			$this->Contact_Log_model->update($param_update);
			
			$result['status'] = true;
			$result['message'] = 'Terima Kasih, informasi anda berhasil dikirim.';
		} else if ($action == 'CheckDomain') {
			$result = $this->domain->submit(array('domain' => $_POST['domain'], 'extension' => $_POST['extension']));
		}
		
		echo json_encode($result);
	}
}