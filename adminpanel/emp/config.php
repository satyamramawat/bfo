<?php
	error_reporting(0);
	$con1 = mysql_connect("127.0.0.1","root","","test") or die(mysql_error());
	mysql_select_db("test",$con1)or die(mysql_error());
?>