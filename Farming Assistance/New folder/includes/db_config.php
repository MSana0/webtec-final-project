<?php
	$dbhost="localhost";
	$dbuser="custable";
	$dbpass="123456";
	$dbname="customer";
	$conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
	if($conn->connect_errno){
		echo "Database connection failed";
	}
?>