<?php
	session_start();
	include("connection.php");
	$unm=$_POST['user'];
	$pwd=md5($_POST['pass']);	
	$data=mysql_query("select * from citizen where username='$unm' and password='$pwd'");
	$total_rows=mysql_num_rows($data);
	if($total_rows>0)
	{
		$row=mysql_fetch_array($data);
		$_SESSION['id']=$row['UserID'];
		$_SESSION['citilogin']="true";
		$_SESSION['name']=$row['username'];
                $_SESSION['fname']=$row['firstname'];
                $_SESSION['lname']=$row['lastname'];
                $_SESSION['add']=$row['address'];
		header("location:customerpanel/index - Copy.php");
	}
       
	else
	{
		$_SESSION['citilogin']="false";
                header("location:citizenlogin.html");
                              
        }
           

?>