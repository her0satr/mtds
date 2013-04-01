<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sumber_Biaya_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
    function GetArray() {
        $Array[] = array( 'ArrayID' => '', 'ArrayTitle' => '-');
        $Array[] = array( 'ArrayID' => 'Sendiri', 'ArrayTitle' => 'Sendiri');
        $Array[] = array( 'ArrayID' => 'Instansi', 'ArrayTitle' => 'Instansi');
        $Array[] = array( 'ArrayID' => 'Beasiswa', 'ArrayTitle' => 'Beasiswa');
		
        return $Array;
    }
}