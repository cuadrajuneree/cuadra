<?php

include("../config.php");

if(isset($_POST['registration'])){
		$username = $con -> real_escape_string($_POST['r_username']);
		$password = $con -> real_escape_string($_POST['r_password']);
		$firstname = $con -> real_escape_string($_POST['r_firstname']);
		$lastname = $con -> real_escape_string($_POST['r_lastname']);
		$address = $con -> real_escape_string($_POST['r_address']);
		
		$query = $con -> query("SELECT * FROM accounts WHERE acc_username = '$username'");
		$check = $query -> num_rows;
		if($check > 0){
            
            ?> <script type = "text/javascript"> window.alert('Error'); </script> <?php
            header("location:../register.php");
            exit;
		}else{
            
			$query = $con -> query ("INSERT INTO accounts (acc_username, acc_password, acc_firstname, acc_lastname, acc_address) VALUES ('$username','$password','$firstname','$lastname','$address')");
            
            header("location:../welcome.php");
		}
}

?>