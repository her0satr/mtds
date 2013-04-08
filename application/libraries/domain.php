<?php

class domain {
	function __construct() {
		$this->extensions = array (
			'com' 		=> array('whois.crsnic.net','/No match for/i'),
			'info' 		=> array('whois.afilias.net','/NOT FOUND/i'),	
			'net' 		=> array('whois.crsnic.net','/No match for/i'),
			'name' 		=> array('whois.nic.name','/No match/i'),
			'org' 		=> array('whois.pir.org','/NOT FOUND/i'),
			'biz' 		=> array('whois.biz','/Not found/i'),
			'tv' 		=> array('whois.nic.tv', '/No match for/i')
		);
	}
	
	function submit($param) {
		set_time_limit(0);
		ob_start();
		
		if (!empty($param['domain']) && !empty($param['extension'])) {
			$extension = $param['extension'];
			$domain = str_replace(array('www.', 'http://'), NULL, $param['domain']);
			$domain_name = $domain.'.'.$extension;
			$result[] = $this->check($domain_name, $extension);
		}
		
		foreach ($this->extensions as $ext => $data) {
			if ($ext == $param['extension']) {
				continue;
			} else if (count($result) >= 5) {
				break;
			}
			
			$domain = str_replace(array('www.', 'http://'), NULL, $param['domain']);
			$domain_name = $domain.'.'.$ext;
			$result[] = $this->check($domain_name, $ext);
		}
		
		ob_flush();
		flush();
		
		return $result;
	}
	
	function check($domain_name, $ext) {
		$buffer = '';
		$sock = fsockopen($this->extensions[$ext][0], 43) or die('Error Connecting To Server:');
		fputs ($sock, $domain_name . "\r\n");
		while( !feof($sock) ) { $buffer .= fgets($sock, 128); }
		fclose($sock);
		
		preg_match($this->extensions[$ext][1], $buffer, $match);
		if (count($match) > 0) {
			$result['avaliable'] = 1;
			$result['message'] = $domain_name.' tersedia.';
		} else {
			$result['avaliable'] = 0;
			$result['message'] = $domain_name.' tidak tersedia.';
		}
		
		return $result;
	}
}
?>