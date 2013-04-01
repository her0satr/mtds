<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jenis_Identitas_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray() {
        $Array[] = array( 'ArrayID' => '-', 'ArrayTitle' => '-');
        $Array[] = array( 'ArrayID' => 'KTP', 'ArrayTitle' => 'KTP');
        $Array[] = array( 'ArrayID' => 'SIM', 'ArrayTitle' => 'SIM');
        $Array[] = array( 'ArrayID' => 'Kartu Pelajar', 'ArrayTitle' => 'Kartu Pelajar');
        return $Array;
    }
}