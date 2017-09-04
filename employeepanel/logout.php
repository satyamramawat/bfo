<?php
	session_start();
	$_SESSION['emplogin']=="false";
	header("location:../index.html");
	//session_destroy();
	unset($_SESSION['emplogin']);
?>