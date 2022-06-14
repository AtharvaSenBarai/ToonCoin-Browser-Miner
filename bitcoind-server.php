<?php
	require_once 'jsonRPCClient.php';
	
	$url = "127.0.0.1";
	$port = "443";
	$username = "ath3.001";
	$password = "123456";	

	$bitcoin = new jsonRPCClient('http://'.$username.':'.$password.'@'.$url.':'.$port.'/');

?>
