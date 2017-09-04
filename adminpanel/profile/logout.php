<?php
	session_start();
	$_SESSION['adminlogin']=="false";
	header("location:../../index.html");
	//session_destroy();
	unset($_SESSION['adminlogin']);
?>