<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	function __construct() {
        parent::__construct();
		
        $this->Field = array('user_id', 'user_name', 'user_pass', 'user_display', 'user_email');
    }
	
	function update($param) {
		$Result = array();
		
		if (empty($param['user_id'])) {
			$InsertQuery  = GenerateInsertQuery($this->Field, $param, USER);
			$InsertResult = mysql_query($InsertQuery) or die(mysql_error());
		   
			$Result['user_id'] = mysql_insert_id();
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil disimpan..';
		} else {
			$UpdateQuery  = GenerateUpdateQuery($this->Field, $param, USER);
			$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
		   
			$Result['user_id'] = $param['user_id'];
			$Result['QueryStatus'] = '1';
			$Result['Message'] = 'Data berhasil diperbaharui..';
		}
		
		return $Result;
	}
	
	function get_by_id($param) {
		$Array = array();
        
		if (isset($param['user_name'])) {
            $SelectQuery  = "
				SELECT User.*
				FROM ".USER." User
				WHERE user_name = '".$param['user_name']."'
				LIMIT 1";
		} else if (isset($param['user_email'])) {
            $SelectQuery  = "SELECT * FROM ".USER." WHERE user_email = '".$param['user_email']."' LIMIT 1";
		} else if (isset($param['user_id'])) {
            $SelectQuery  = "
                SELECT User.*
                FROM ".USER." User
                WHERE User.user_id = '".$param['user_id']."'
                LIMIT 1";
        }
        
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		if (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$Array = StripArray($Row);
		}
		
		return $Array;
	}
	
	function get_array($param = array()) {
		$Array = array();
		$StringFilter = GetStringFilter($param);
		
		$PageOffset = (isset($param['start']) && !empty($param['start'])) ? $param['start'] : 0;
		$PageLimit = (isset($param['limit']) && !empty($param['limit'])) ? $param['limit'] : 25;
		$StringSorting = (isset($param['sort'])) ? GetStringSorting($param['sort']) : 'user_name ASC';
		
		$SelectQuery = "
			SELECT User.*
			FROM ".USER." User
			WHERE 1 $StringFilter
			ORDER BY $StringSorting
			LIMIT $PageOffset, $PageLimit
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
            unset($Row['password']);
            
			$Row = StripArray($Row);
			$Array[] = $Row;
		}
		
		return $Array;
	}
	
	function get_count($param = array()) {
		$TotalRecord = 0;
		
		$StringFilter = GetStringFilter($param);
		
		$SelectQuery = "
			SELECT COUNT(*) AS TotalRecord
			FROM ".USER." User
			WHERE 1 $StringFilter
		";
		$SelectResult = mysql_query($SelectQuery) or die(mysql_error());
		while (false !== $Row = mysql_fetch_assoc($SelectResult)) {
			$TotalRecord = $Row['TotalRecord'];
		}
		
		return $TotalRecord;
	}
	
	function delete($param) {
        $DeleteQuery  = "DELETE FROM ".USER." WHERE user_id = '".$param['user_id']."' LIMIT 1";
        $DeleteResult = mysql_query($DeleteQuery) or die(mysql_error());
        
        $Result['QueryStatus'] = '1';
        $Result['Message'] = 'Data berhasil dihapus.';
		
		return $Result;
	}
	
	/*	Region Login */

	function login_required() {
		$user_admin = $this->session->userdata('user_admin');
		
		if (! is_array($user_admin) || count($user_admin) <= 0) {
			header("Location: " . base_url('/panel/home') );
			exit;
		}
	}
	
	function get_current_user() {
		$user_admin = $this->session->userdata('user_admin');
		return $user_admin;
	}
	
	function set_login($user) {
		$this->session->set_userdata('user_admin', $user);
	}
	
	function logout() {
		$this->session->unset_userdata('user_admin');
		header("Location: " . base_url('/panel/home') );
		exit;
	}
	
	/*	End Region Login */
	
	/*

	
	function UpdateLogin($param) {
		$UpdateQuery  = "UPDATE ".USER." SET last_login = '".$param['last_login']."' WHERE id = '".$param['UserID']."' LIMIT 1";
		$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
	}
	
	function UpdateResetPassword($param) {
		$UpdateQuery  = "UPDATE ".USER." SET reset = '".$param['reset']."' WHERE id = '".$param['UserID']."' LIMIT 1";
		$UpdateResult = mysql_query($UpdateQuery) or die(mysql_error());
	}
	

	
	function GetArrayMenu($param = array()) {
		$ArrayResultMenu = array();
		$Permission = $this->M_Permission->GetCollection($param);
		foreach ($Permission['PermissionData'] as $Key => $Array) {
			$ArrayResultMenu[] = $Array;
		}
		
		return $ArrayResultMenu;
	}
	
	function GetArrayMenuGroup($param) {
		$Array = $this->GetArrayMenu($param);
		
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
	

	
	function RequestPassword($param) {
		$User = $this->GetByID(array('email' => $param['Email']));
		if (count($User) > 0) {
			$TempValue = date("Y-m-d H:i:s") . rand(1000,9999);
			$ResetValue = md5($TempValue);
			$this->UpdateResetPassword(array('UserID' => $User['UserID'], 'reset' => $ResetValue));
			
			$Message  = "Seseorang telah melakukan reset password untuk account :\n";
			$Message .= "Username : ".$User['username']."\n";
			$Message .= "Email : ".$User['email']."\n";
			$Message .= "Jika ini adalah kesalahan, maka abaikan email ini.\n";
			$Message .= "Untuk melakukan reset password, silahkan klik pada link berikut :\n";
			$Message .= $this->config->item('base_url') . '/administrator/action/reset-password/' . $ResetValue;
			@mail($param['Email'], 'Reset Password', $Message);
			
			$Result['QueryStatus'] = 1;
			$Result['Message'] = 'Reset password berhasil dikirimkan ke email anda.';
		} else {
			$Result['QueryStatus'] = 0;
			$Result['Message'] = 'Maaf, email anda tidak ditemukan.';
		}
		
		return $Result;
	}
	
	function ResetPassword($ResetValue) {
		$User = $this->GetByID(array('reset' => $ResetValue));
		if (count($User) > 0 && !empty($ResetValue)) {
			$TempValue = date("Y-m-d H:i:s") . rand(1000,9999);
			$Password = substr(md5($TempValue), 0, 20);
			
			$Message  = "Password account anda berhasil direset, berikut informasi account anda :\n\n";
			$Message .= "Username : ".$User['username']."\n";
			$Message .= "Email : ".$User['email']."\n";
			$Message .= "Password : ".$Password."\n\n";
			$Message .= "Terima Kasih\n";
			$Message .= "Admin";
			@mail($User['email'], 'Informasi Password Baru', $Message);
			
			$this->UpdateResetPassword(array('UserID' => $User['UserID'], 'reset' => ''));
			$this->UpdatePassword(array('UserID' => $User['UserID'], 'password' => md5($Password)));
			
			$Result = 'Silahkan memeriksa email anda untuk informasi password baru.';
		} else {
			$Result = 'Maaf, link ini sudah tidak aktif.';
		}
		return $Result;
	}
	/*	*/
}