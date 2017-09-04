<?php
 session_start();
error_reporting(0);
if($_SESSION['emplogin']!="true")
{
	header("location:../employeelogin.php"); 
}

include("connection.php");
$id=$_SESSION['id'];
$at=$_GET['attd'];
$name=$_SESSION['fname'];
$type=$_SESSION['etype'];
$res=mysql_query("select * from employee where empid='$id'");
$row=mysql_fetch_array($res);
if($at==1)
{
   $sql=mysql_query("update employee set attendance=1 where empid='$id'");
    mysql_query("insert into emp values('','$id','$row[1]','$row[5]','0')");
    header("location:index.php");
    
}

if($at==0)
{
   $sql=mysql_query("update employee set attendance=0 where empid='$id'");
    mysql_query("delete from emp where empid='$id'");
    header("location:index.php");
}
?>