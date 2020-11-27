<?php
	
	$servername ="localhost";
	$username ="root";
	$password ="";
	$dbname ="Alobha";

	$db_conn = mysqli_connect($servername,$username,$password,$dbname);
	if($db_conn->connect_error){
		die("Connection field:". $db_conn->connect_error);
	}
	else{
		// echo "Your connection success";
	}
session_start();
?>
