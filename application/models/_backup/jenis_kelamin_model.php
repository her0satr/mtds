<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jenis_Kelamin_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray() {
        $Array[] = array( 'ArrayID' => '', 'ArrayTitle' => '-', 'English' => '-');
        $Array[] = array( 'ArrayID' => 'L', 'ArrayTitle' => 'Laki - laki', 'English' => 'Male');
        $Array[] = array( 'ArrayID' => 'P', 'ArrayTitle' => 'Perempuan', 'English' => 'Female');
        return $Array;
    }
}