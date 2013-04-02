<?php
class upload extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->User_model->LoginRequired();
		$Action = $this->input->post('Action');
		$Result['success'] = true;
		$Result['UploadStatus'] = 0;
		
		if ($Action == 'UploadImage') {
			$Result['UploadFileName'] = '';
			$Result['UploadMessage'] = 'Upload Fail.';
			
			$Image = Upload('Document', $this->config->item('base_path') . '/images/upload');
			if (!empty($Image['FileDirName'])) {
				$Result['UploadStatus'] = 1;
				$Result['UploadMessage'] = 'Upload successful';
				$Result['UploadFileName'] = $Image['FileDirName'];
				
				$PathFileName = $this->config->item('base_path') . '/images/upload/' . $Result['UploadFileName'];
				$ImageProperty = @getimagesize($PathFileName);
				if ($ImageProperty) {
					$Result['width'] = $ImageProperty[0];
					$Result['height'] = $ImageProperty[1];
				}
			}
		} else if ($Action == 'UploadDocument') {
			$Result['UploadFileName'] = '';
			$Result['UploadMessage'] = 'Upload Fail.';
			
			$ParamUpload = array(
				'UploadFtp' => 1,
				'WithCreateDir' => 1,
				'Name' => date('YmdHis') . '_' . rand(1000,9999),
				'Extention' => GetExtention($_FILES['document']['name']),
				'UploadPathFtp' => SFTP_PATH,
				'UploadPathLocal' => $this->config->item('base_path') . '/static/images/_temp'
			);
			$FileUpload = UploadFtp($ParamUpload, 'document');
			$FileUpload['LinkImage'] = SFTP_URL . '/' . $FileUpload['FileName'];
			
			if ($FileUpload['Status'] == 1) {
				$Result['UploadStatus'] = 1;
				$Result['UploadMessage'] = 'Upload successful';
				$Result['UploadFileName'] = $FileUpload['LinkImage'];
			}
		}
		
		echo json_encode($Result);
    }
}