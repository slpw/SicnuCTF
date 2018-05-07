<?php
	header("content-type:text/html;charset=utf-8");
	$imgsize = @getimagesize("flag_in_home_mrsmith_Desktop_flag_txt/".$_GET["img"]);
	if(!$imgsize){
		die("图像不存在<!-- ?img=1.png  -->");
	}
	print_r($imgsize[3]);
?>
