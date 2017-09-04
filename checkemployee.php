<?php
	session_start();
	include("connection.php");
	$unm=$_POST['user'];
	$pwd=$_POST['pass'];	
	$data=mysql_query("select * from employee where username='$unm' and pass='$pwd'");
	$total_rows=mysql_num_rows($data);
	if($total_rows>0)
	{
		$row=mysql_fetch_array($data);
		$_SESSION['id']=$row['empid'];
		$_SESSION['emplogin']="true";
		$_SESSION['name']=$row['username'];
      
		header("location:employeepanel/index.php");
	}
	else
	{
		$_SESSION['emplogin']="false";
          
		header("location:index.html");
                
		
	}
?>