<?php 
	require_once 'config.php' ;
	unset($_SESSION['loginform']);
	header('Location: signin.php');
?>