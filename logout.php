<?php
	session_start();
	$_SESSION['citilogin']=="false";
	header("location:index.html");
	//session_destroy();
	unset($_SESSION['citilogin']);
?>