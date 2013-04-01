<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permission_model extends CI_Model {
	function __construct() {
        parent::__construct();
    }
	
	function GetCollection($Param = array()) {
		$ArrayPermission[] = array( 'Group' => 'Administrasi', 'ModulName' => 'UnitKerja', 'Link' => '/administrasi/master/unit_kerja', 'Title' => 'Unit Kerja' );
		$ArrayPermission[] = array( 'Group' => 'Administrasi', 'ModulName' => 'Quota', 'Link' => '/administrasi/penerimaan/quota', 'Title' => 'Quota' );
		
		$ArrayPermission[] = array( 'Group' => 'Master', 'ModulName' => 'SiteConfig', 'Link' => '/site/config', 'Title' => 'Site Config' );
		
		$ArrayResult['PermissionData'] = $ArrayPermission;
		$ArrayResult['PermissionCount'] = count($ArrayPermission);
		
		return $ArrayResult;
	}
	
	function GetArrayMenu($Param = array()) {
		$ArrayResultMenu = array();
		$Permission = $this->GetCollection($Param);
		foreach ($Permission['PermissionData'] as $Key => $Array) {
			$ArrayResultMenu[] = $Array;
		}
		
		return $ArrayResultMenu;
	}
	
	function GetArrayMenuGroup($Param) {
		$Array = $this->GetArrayMenu($Param);
		
		$ArrayTemp = array();
		foreach ($Array as $Key => $Temp) {
			$ArrayTemp[$Temp['Group']][] = $Temp;
		}
		
		$Counter = 0;
		$ArrayResult = array();
		foreach ($ArrayTemp as $Key => $Temp) {
			$ArrayResult[$Counter]['Title'] = $Key;
			$ArrayResult[$Counter]['Child'] = $Temp;
			
			$Counter++;
		}
		
		return $ArrayResult;
	}
}