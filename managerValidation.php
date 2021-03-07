<?php
$db = mysqli_connect('localhost', 'root', '', 'crs-help'); 

	$myusername = "Tila";
	$mypassword = "12345";
	
 if(isset($_POST['loginManager'])){
	$username = mysqli_real_escape_string($db, $_POST['managerUsername']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	if($username == $myusername and $password == $mypassword){
		setcookie('managerUsername', $username, time()+60*60*7);
		header("location: managerIndex.php");
	}
	session_start();
	$_SESSION['managerUsername'] = $username;
	header("location: managerIndex.php");
	
	}else{
	echo "Username or Password is Invalid.,br> click here <a href='ManagerLogin.php'> try again</a>";
	
	
	header("location: ManagerLogin.php");}
 
 
 ?>