<?php 

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'cuadra_dbwebsite';
	
	$con = new mysqli($host, $user, $pass, $db);
		
		if($con -> connect_error){
			echo 'Error';
		}
		//else {
			 //echo 'Connected';
		//header('location../index.html');
		//}
?>