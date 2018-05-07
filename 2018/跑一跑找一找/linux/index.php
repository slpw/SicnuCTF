<?php
	function filter($file){
	return preg_replace('/[a-z0-9.]/i','',"$file");
}
	$files = filter($_GET['filename']);
	system('less '.$files);
	show_source(__FILE__);
?>
