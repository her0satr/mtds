<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status_Perkawinan_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray() {
        $Array[] = array( 'ArrayID' => '', 'ArrayTitle' => '-', 'English' => '-');
        $Array[] = array( 'ArrayID' => '1', 'ArrayTitle' => 'Belum Menikah', 'English' => 'Single');
        $Array[] = array( 'ArrayID' => '2', 'ArrayTitle' => 'Perempuan', 'English' => 'Married');
        return $Array;
    }
}