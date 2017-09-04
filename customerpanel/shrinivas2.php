<?php
error_reporting(0);
session_start();

if($_SESSION['citilogin']!="true")
{
	header("location:../citizenlogin.php"); 
}

include("connection.php");

$name=$_SESSION['fname'];
$food_category = $_POST['foodc'];
$source = $_POST['foods'];
$duration = $_POST['duration'];
$Capacity = $_POST['Capacity'];
$address=$_SESSION['add'];
$time=$_POST['time'];

if(isset($_POST['go']))
{
   
    mysql_query("insert into c_order values('','$name','$duration',0,'$food_category','$source','$Capacity','$address','$time')");
    header("location:timy.php");   
}

if(isset($_POST['logout']))
{
   $_SESSION['citilogin']=="false";
	header("location:../index.html");
	//session_destroy();
	unset($_SESSION['citilogin']);  
}

?>
