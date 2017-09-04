<?php
	session_start();
	include("connection.php");
	$unm=$_POST['user'];
	$pwd=$_POST['pass'];	
	$data=mysql_query("select * from admin where username='$unm' and pass='$pwd'");
	$total_rows=mysql_num_rows($data);
	if($total_rows>0)
	{
		$row=mysql_fetch_array($data);
		$_SESSION['id']=$row['UserNameID'];
		$_SESSION['adminlogin']="true";
		$_SESSION['name']=$row['username'];
		header("location:adminpanel/profile/profile1.php");
	}
	else
	{
		$_SESSION['adminlogin']="false";
          
		header("location:admin.php");
                
		
	}
?>