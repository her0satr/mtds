<?php
if (! function_exists('StripArray')) {
	function StripArray($Array, $FieldName = array()) {
		$ArrayResult = array();
		foreach($Array as $Key => $Element) {
			if (in_array($Key, $FieldName) && in_array($Element, array('0', '0000-00-00', '0000-00-00 00:00:00'))) {
				$ArrayResult[$Key] = null;
			} else {
				$ArrayResult[$Key] = stripslashes($Element);
			}
		}
		return $ArrayResult;
	}
}

if (! function_exists('EscapeString')) {
	function EscapeString($Array) {
		$ArrayResult = array();
		foreach($Array as $Key => $Element) {
			$ArrayResult[$Key] = mysql_escape_string($Element);
		}
		return $ArrayResult;
	}
}

if (! function_exists('GetOption')) {
	function GetOption($OptAll, $ArrayOption, $Selected) {
		$temp = ($Selected == 0) ? 'selected' : '';
		$Content = ($OptAll) ? '<option value="0" '.$temp.'>All<option>' : '';
		foreach ($ArrayOption as $Value => $Title) {
			$temp = ($Selected == $Value) ? 'selected' : '';
			$Content .= '<option value="'.$Value.'" '.$temp.'>'.$Title.'</option>';
		}
		return $Content;
	}
}

if (! function_exists('ShowOption')) {
    function ShowOption($Param) {
		$Param['OptAll'] = (isset($Param['OptAll'])) ? $Param['OptAll'] : false;
		$Param['ArrayID'] = (isset($Param['ArrayID'])) ? $Param['ArrayID'] : 'id';
	
		$Param['ArrayTitle'] = (isset($Param['ArrayTitle'])) ? $Param['ArrayTitle'] : 'title';
		$Param['Selected'] = (isset($Param['Selected'])) ? $Param['Selected'] : '';
		
		$Content = '';
		$Selected = '';
		if ($Param['OptAll']) {
			$Selected = ($Param['Selected'] == '0') ? 'selected' : '';
			$Content .= '<option value="0" ' . $Selected . '>Semua<option>';
		}
		
		foreach ($Param['Array'] as $Array) {
			$Value = (isset($Array[$Param['ArrayID']])) ? $Array[$Param['ArrayID']] : '';
			$Title = (isset($Array[$Param['ArrayTitle']])) ? $Array[$Param['ArrayTitle']] : '';
			$Selected = ($Param['Selected'] == $Value) ? 'selected' : '';
			
			$Content .= "<option value='".$Value."' ".$Selected.">".$Title."</option>";
		}
		
        return $Content;
    }
}

if (! function_exists('ArrayToJSON')) {
	function ArrayToJSON($Array) {
		$Result = '';
		foreach ($Array as $Key => $Element) {
			$Element = mysql_escape_string($Element);
			$Result .= (empty($Result)) ? "'$Key': '$Element'" : ",'$Key':'$Element'";
		}
		$Result = '{' . $Result . '}';
		return $Result;
	}
}

if (! function_exists('ConvertToUnixTime')) {
	function ConvertToUnixTime($String) {
		preg_match('/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/i', $String, $Match);
		$UnixTime = mktime ($Match[4], $Match[5], $Match[6], $Match[2], $Match[3], $Match[1]);
		$UnixTime = 'new Date('.$UnixTime.')';
		return $UnixTime;
	}
}

if (! function_exists('ConvertDateToString')) {
	function ConvertDateToString($String) {
		preg_match('/(\d{4})-(\d{2})-(\d{2}) (\d{2}):(\d{2}):(\d{2})/i', $String, $Match);
		return date("d F Y", mktime (0, 0, 0, $Match[2], $Match[3], $Match[1]));
	}
}

if (! function_exists('ConvertDateToQuery')) {
	function ConvertDateToQuery($String) {
		$Array = explode('/', $String);
		return $Array[2] . '-' . $Array[0] . '-' . $Array[1];
	}
}

if (! function_exists('MoneyFormat')) {
	function MoneyFormat($Value) {
		return number_format($Value, 2, ',', '.');
	}
}

if (! function_exists('Upload')) {
	function Upload($InputName, $PathDir = 'User') {
		$ArrayResult = array('Result' => '0', 'FileDirName' => '');
		if (isset($_FILES[$InputName]) && is_array($_FILES[$InputName]) && is_array($_FILES[$InputName]['name'])) {
			$FileCount = count($_FILES[$InputName]['name']);
			for ($i = 0; $i < $FileCount; $i++) {
				if ($_FILES[$InputName]['error'][$i] == '0') {
					$Extention = F_GetExtention($_FILES[$InputName]['name'][$i]);
					$FileName = date("Ymd_His").'_'.rand(1000,9999).'.'.$Extention;
					
					@mkdir(IMGS_DIR.'/'.date("Y"));
					@mkdir(IMGS_DIR.'/'.date("Y").'/'.date("m"));
					@mkdir(IMGS_DIR.'/'.date("Y").'/'.date("m").'/'.date("d"));
					$FileLocation = IMGS_DIR.'/'.date("Y").'/'.date("m").'/'.date("d").'/'.basename($FileName);
					$FileRequest = date("Y").'/'.date("m").'/'.date("d").'/'.basename($FileName);
					
					if (move_uploaded_file($_FILES[$InputName]['tmp_name'][$i], $FileLocation)) {
						$ParamImage = array(
							'FileSource' => $FileLocation,
							'Width' => 456,
							'Height' => 320,
						);
						F_Resize($ParamImage);
						$ArrayResult['Result'] = '1';
						$ArrayResult['ArrayImage'][] = $FileRequest;
					}
				}
			}
		}
		else if (isset($_FILES[$InputName]) && !empty($_FILES[$InputName]) && !empty($_FILES[$InputName]['name'])) {
			$Extention = GetExtention($_FILES[$InputName]['name']);
			$ArrayResult['Message'] = 'There was an error uploading the file, please try again!';
			$ArrayResult['FileDirName'] = '';
			
			if (! in_array($Extention, array('jpg', 'gif', 'png', 'bmp', 'xls'))) {
				$ArrayResult['Message'] = 'Hanya file bertipe jpg, gif, png, bmp dan xls yang dapat di upload.';
			} else if ($_FILES[$InputName]['error'] == '0') {
				$DirYear = date("Y");
				$DirMonth = date("m");
				$DirDay = date("d");
				
				@mkdir($PathDir.'/'.$DirYear);
				@mkdir($PathDir.'/'.$DirYear.'/'.$DirMonth);
				@mkdir($PathDir.'/'.$DirYear.'/'.$DirMonth.'/'.$DirDay);
				
				$FileName = date("Ymd_His").'_'.rand(1000,9999).'.'.$Extention;
				$FileDirectory = $PathDir;
				$FileLocation = $FileDirectory.'/'.$DirYear.'/'.$DirMonth.'/'.$DirDay.'/'.basename($FileName);
				
				if (move_uploaded_file($_FILES[$InputName]['tmp_name'], $FileLocation)) {
					$ArrayResult['Result'] = '1';
					$ArrayResult['Message'] = 'Upload file berhasil.';
					$ArrayResult['FileDirName'] = $DirYear.'/'.$DirMonth.'/'.$DirDay.'/'.$FileName;
				}
			}
		}
		
		return $ArrayResult;
	}
}

if (! function_exists('UploadFtp')) {
    function UploadFtp($File, $Name = 'Image') {
		$File['WithCreateDir'] = (isset($File['WithCreateDir'])) ? $File['WithCreateDir'] : 0;
		$File['UploadFtp'] = (isset($File['UploadFtp'])) ? $File['UploadFtp'] : 0;
        $ArrayResult = array('Message' => '', 'Status' => 1);
        
        if (isset($_FILES[$Name]) && !empty($_FILES[$Name])) {
			$FileName = basename($File['Name'] . '.' . $File['Extention']);
			$PathFileName = $File['UploadPathLocal'] . '/'. $FileName;
			@unlink($PathFileName);
            if (! move_uploaded_file($_FILES[$Name]['tmp_name'], $PathFileName)) {
				$ArrayResult['Status'] = 0;
                $ArrayResult['Message'] = '<span class="red">There was an error uploading the file, please try again!</span>';
            } else if ($Name == 'Image') {
				ImageResize($PathFileName, $PathFileName, PHOTO_WIDTH, PHOTO_HEIGHT, 1);
			}
			
			if ($ArrayResult['Status'] == 1 && $File['UploadFtp'] == 1) {
				$FtpConnection = ftp_connect(SFTP_HOST);
				$FtpResource = ftp_login($FtpConnection, SFTP_USER, SFTP_PASS);
				ftp_pasv($FtpConnection, (bool)true);
				
				// Create Date Directory
				$DateDir = '';
				if ($File['WithCreateDir'] == 1) {
					$DirFile = array(date("Y"), date("m"), date("d"));
					foreach ($DirFile as $Directory) {
						$DateDir .= $Directory . '/';
						$File['UploadPathFtp'] .= '/' . $Directory;
						@ftp_mkdir($FtpConnection, $File['UploadPathFtp']);
					}
				}
				
				// Delete File with same name
				$FileNameDelete = $File['UploadPathFtp'] . '/' . basename($File['Name']);
				foreach (array('jpg', 'png', 'jpeg', 'pdf', 'doc') as $Value) {
					@ftp_delete($FtpConnection, $FileNameDelete . '.' . $Value);
				}
				
				ftp_chdir($FtpConnection, $File['UploadPathFtp']);
				$FtpUpload = ftp_put($FtpConnection, $FileName, $PathFileName, FTP_BINARY);
				
                $ArrayResult['FileName'] = $DateDir . $File['Name'] . '.' . $File['Extention'];
			}
        }
        
        return $ArrayResult;
    }
}

if (! function_exists('GetExtention')) {
	function GetExtention($FileName) {
		$FileName = strtolower(trim($FileName));
		if (empty($FileName)) {
			return '';
		}
		
		$ArrayString = explode('.', $FileName);
		return $ArrayString[count($ArrayString) - 1];
	}
}

if (! function_exists('Write')) {
	function Write($FileLocation, $FileContent) {
		$Handle = fopen($FileLocation, 'ab+');
		if ($Handle) {
			fputs($Handle, $FileContent);
			fclose($Handle);
		}
	}
}

if (! function_exists('GetStringFilter')) {
	function GetStringFilter($Param, $ReplaceField = array()) {
		$StringFilter = '';
		
		if (isset($Param['filter']) && !empty($Param['filter'])) {
			$Filter = json_decode($Param['filter']);
			
			foreach ($Filter as $Array) {
				$Field = (isset($ReplaceField[$Array->field])) ? $ReplaceField[$Array->field] : $Array->field;
				
				if (isset($Array->field) && isset($Array->value)) {
					if ($Array->type == 'numeric') {
						if ($Array->comparison == 'eq') {
							$StringFilter .= "AND " . $Field." = '".$Array->value."' ";
						} else if ($Array->comparison == 'lt') {
							$StringFilter .= "AND " . $Field." < '".$Array->value."' ";
						} else if ($Array->comparison == 'gt') {
							$StringFilter .= "AND " . $Field." > '".$Array->value."' ";
						}
					} else if ($Array->type == 'date') {
						if ($Array->comparison == 'eq') {
							$StringFilter .= "AND " . $Field." = '".ConvertDateToQuery($Array->value)."' ";
						} else if ($Array->comparison == 'lt') {
							$StringFilter .= "AND " . $Field." < '".ConvertDateToQuery($Array->value)."' ";
						} else if ($Array->comparison == 'gt') {
							$StringFilter .= "AND " . $Field." > '".ConvertDateToQuery($Array->value)."' ";
						}
					} else if ($Array->type == 'list') {
						$Array->field = $Field;
						$StringFilter .= GetStringFromList($Array);
					} else if ($Array->type == 'custom') {
						$StringFilter .= "AND " . $Array->field . ' ';
					} else {
						$StringFilter .= "AND " . $Field." LIKE '".$Array->value."%' ";
					}
				}
			}
		}
		
		return $StringFilter;
	}
}

if (! function_exists('GetStringFromList')) {
	function GetStringFromList($Param) {
		$ArrayFieldYesNo = array('supplier_active', 'agent_active', 'car_active', 'customer_active', 'driver_active', 'guide_active');
		$ArrayEmptyOrExist = array('driver_photo');
		
		$StringResult = '';
		if (in_array($Param->field, $ArrayFieldYesNo)) {
			foreach ($Param->value as $Value) {
				if ($Value == 'Yes') {
					$StringResult .= (empty($StringResult)) ? "'1'" : ", '1'";
				} else if ($Value == 'No') {
					$StringResult .= (empty($StringResult)) ? "'0'" : ", '0'";
				}
			}
			$StringResult = (empty($StringResult)) ? '' : "AND " . $Param->field . " IN (" . $StringResult . ") ";
		} else if (in_array($Param->field, $ArrayEmptyOrExist)) {
			foreach ($Param->value as $Value) {
				if ($Value == 'Yes') {
					$StringResult .= (empty($StringResult)) ? $Param->field . " != '' " : "OR " . $Param->field . " != '' ";
				} else if ($Value == 'No') {
					$StringResult .= (empty($StringResult)) ? $Param->field . "= '' " : "OR " . $Param->field . " = '' ";
				}
			}
			$StringResult = (empty($StringResult)) ? '' : "AND (" . $StringResult . ") ";
		} else {
			echo 'Please create new filter spesification';
			exit;
		}
		
		return $StringResult;
	}
}

if (! function_exists('GenerateInsertQuery')) {
	function GenerateInsertQuery($ArrayField, $ArrayParam, $Table, $Param = array()) {
        $Param['AllowSymbol'] = (isset($Param['AllowSymbol'])) ? $Param['AllowSymbol'] : 0;
        
		$StringField = $StringValue = '';
		foreach ($ArrayField as $Column) {
			$StringField .= (empty($StringField)) ? $Column : ', ' . $Column;
			
			$Value = (isset($ArrayParam[$Column])) ? $ArrayParam[$Column] : '';
			$Value = mysql_escape_string($Value);
            
            if ($Param['AllowSymbol'] == 0) {
                $Value = preg_replace('/[^\x20-\x7E|\x0A]/i', '', $Value);
            }
            
			$StringValue .= (empty($StringValue)) ? "'" . $Value . "'" : ", '" . $Value . "'";
		}
		$Query = "INSERT INTO `$Table` ($StringField) VALUES ($StringValue)";
		
		return $Query;
	}
}

if (! function_exists('GenerateUpdateQuery')) {
	function GenerateUpdateQuery($ArrayField, $ArrayParam, $Table, $Param = array()) {
        $Param['AllowSymbol'] = (isset($Param['AllowSymbol'])) ? $Param['AllowSymbol'] : 0;
        
		$StringQuery = '';
		foreach ($ArrayField as $Key => $Column) {
			if ($Key != 0 && isset($ArrayParam[$Column])) {
                $Value = $ArrayParam[$Column];
                if ($Param['AllowSymbol'] == 0) {
                    $Value = preg_replace('/[^\x20-\x7E|\x0A]/i', '', $Value);
                }
                
				$StringQuery .= (empty($StringQuery)) ? '' : ', ';
				$StringQuery .= "$Column = '" . mysql_escape_string($Value) . "'";
			}
		}
		$Query = "UPDATE `$Table` SET $StringQuery WHERE " . $ArrayField[0] . " = '" . $ArrayParam[$ArrayField[0]] . "'";
		
		return $Query;
	}
}

if (! function_exists('GetNextAutoIncrement')) {
	function GetNextAutoIncrement($Table) {
		$NextAutoIncrement = 1;
		
		$SelectQuery = "SHOW TABLE STATUS LIKE '$Table'";
		$ResultQuery = mysql_query($SelectQuery) or die(mysql_error());
		if (false !== $Row = mysql_fetch_assoc($ResultQuery)) {
			$NextAutoIncrement = $Row['Auto_increment'];
		}
		
		return $NextAutoIncrement;
	}
}

if (! function_exists('GetStringMonth')) {
	function GetStringMonth($Param) {
		if (empty($Param['value'])) {
			return  '';
		}
		
		$Param['Year'] = (isset($Param['Year'])) ? $Param['Year'] : date("Y");
		
		$StringMonth = "AND MONTH(" . $Param['field'] . ") = '" . $Param['value'] . "' AND YEAR(" . $Param['field'] . ") = '" . $Param['Year'] . "'";
		return $StringMonth;
	}
}

if (! function_exists('GetStringSorting')) {
	function GetStringSorting($String, $Field = array()) {
        $Result = '';
        $ArrayString = json_decode($String);
        foreach ($ArrayString as $Array) {
			$FieldName = (isset($Field[$Array->property])) ? $Field[$Array->property] : $Array->property;
			
            $Result .= (empty($Result)) ? $Result : ', ';
            $Result .= $FieldName . ' ' . $Array->direction;
        }
		
        return $Result;
	}
}

if (! function_exists('SentMail')) {
    function SentMail($Param) {
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
        $headers .= 'To: ' . $Param['To'] . "\r\n";
        $headers .= 'From: ' . $Param['From'] . "\r\n";
        mail($Param['To'], $Param['Subject'], $Param['Message'], $headers);
    }
}

if (! function_exists('GetLengthChar')) {
	function GetLengthChar($String, $LengthMax, $Follower = '') {
		if (strlen($String) > $LengthMax) {
			$String = substr($String, 0, $LengthMax);
			$Stringpos = strrpos($String, ' ');
			if (false !== $Stringpos) $String = substr($String, 0, $Stringpos);
			if (!empty($Follower)) {
				$String .= $Follower;
			}
		}
		return $String;
	}
}

if (! function_exists('GetXml')) {
	function GetXml($Param) {
		$Content = '';
		foreach ($Param['Child'] as $TagName) {
			if (isset($Param['Source'][$TagName])) {
				$Content .= '<' . $TagName . '>' . $Param['Source'][$TagName] . '</' . $TagName . '>' . "\n";
			}
		}
		
		if (!empty($Param['Root'])) {
			$Content = '<' . $Param['Root'] . '>' . $Content . '</' . $Param['Root'] . '>' . "\n";
		}
		
		return $Content;
	}
}

if (! function_exists('GetMessage')) {
	function GetMessage($QueryResult) {
		$QueryResult = (count($QueryResult) == 1) ? $QueryResult[0] : $QueryResult;
		$QueryResult['ERROR'] = (isset($QueryResult['ERROR'])) ? trim($QueryResult['ERROR']) : '';
		
		$Array = array( 'QueryStatus' => 0, 'Message' => '' );
		if ($QueryResult['ERROR'] == '00000') {
			$Array['QueryStatus'] = 1;
			$Array['Message'] = 'Data berhasil disimpan';
		} else {
			$Array['QueryStatus'] = 0;
			$Array['Message'] = 'Data gagal disimpan';
		}
		
		return $Array;
	}
}
?>