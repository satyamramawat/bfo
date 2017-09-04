<?php
    error_reporting(0);
	$id=$_POST["user"];

    $in="DELETE FROM `admin` WHERE UserNameID='$id'";
    $in1="DELETE FROM `admindetail` WHERE faid='$id'";
    $q="SELECT * FROM admin";
   echo "<h1>Deleted ADMIN : </h1>".$name;

   $con=new mysqli("127.0.0.1","root","","test");
    mySqli_query($con,$in);
    mySqli_query($con,$in1);
	$re=mysqli_query($con,$q)or die(mysql_error());
echo "<hr>";
?>

<a href="index.php">Now Click here to go back to admin panel</a>;