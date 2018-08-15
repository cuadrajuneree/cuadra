<?php 
include("../config.php");

if(isset($_POST['submit'])){
$username = $con->real_escape_string($_POST['user']);
$password = $con->real_escape_string($_POST['upass']);

//if (!$username){ return false; }
//if (!$password){ return false; }

$query = $con->query("SELECT * FROM accounts WHERE acc_username = '$username' and acc_password = '$password' ");

$check = $query->num_rows;

if ($check == 1){
	/* if($row = $query->fetch_object()){
		$_SESSION['Username'] = $row-> Username; */
		
		header("location:../users.php");
	}
else{
	$error = "Password did not match!!!";
	header("location:../index.php");
	exit;
	// <script type = "text/javascript"> alert('Error'); </script> 
}
}
?>