<?php
	//include("libs/Prodip.php");
	//$pro = new Prodip();
	//Controller/method/parameter
	$url = $_GET['url'];
	$url = rtrim($url,"/");
	$url = explode("/", $url);
	/*$url[0]
	$url[1]
	$url[2]*/

	include("Comtrollers/".$url[0].".php");
	$cat = new $url[0]();

	/*echo "<pre>";
	print_r($url);
	echo "</pre>";*/

?>