<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Golongan_Darah_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray() {
        $Array[] = array( 'ArrayID' => '', 'ArrayTitle' => '-');
        $Array[] = array( 'ArrayID' => 'A', 'ArrayTitle' => 'A');
        $Array[] = array( 'ArrayID' => 'B', 'ArrayTitle' => 'B');
        $Array[] = array( 'ArrayID' => 'AB', 'ArrayTitle' => 'AB');
        $Array[] = array( 'ArrayID' => 'O', 'ArrayTitle' => 'O');
        return $Array;
    }
}