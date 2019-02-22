<?php
	session_start();
	if($_SESSION['email']){
	}
	else{
	  header("location: login.php");
    }
?>