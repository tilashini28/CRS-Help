<?php
	session_start();
	session_destroy();
	echo "You Successfully logout";
	header("location: ManagerLogin.php"); 
	
?>