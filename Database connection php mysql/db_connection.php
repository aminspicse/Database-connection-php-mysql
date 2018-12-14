<?php
	$host_name = 'localhost';
	$usename = 'root';
	$password = '';
	$db_name = 'your database name';
	$con = mysqli_connect($host_name, $usename, $password, $db_name);
	if(mysqli_connect_errno()){
		echo 'Connection Failed';
	}
	else{
		echo 'Connection Success';
	}
?>