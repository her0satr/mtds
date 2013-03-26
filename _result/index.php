<?php
// Note that !== did not exist until 4.0.0-RC2

if ($handle = opendir('.')) {
	while (false !== ($file = readdir($handle))) {
		if ($file == 'index.php') {
			continue;
		}
		
		if (! is_dir($file)) {
			echo '<a href="'.$file.'">'.$file.'</a><br />';
		}
	}
	
	closedir($handle);
}
?>