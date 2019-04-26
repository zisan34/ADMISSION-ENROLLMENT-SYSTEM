<?php

	$dbserver = 'localhost';
	$dbuser = 'root';
	$dbpassword = '';
	$database  = 'users'; 


	$conn = new mysqli($dbserver,$dbuser,$dbpassword,$database);

	if(!$conn)
		die("Couldn't Connect to the database".mysql_errno());

?>
