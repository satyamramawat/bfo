<?php
error_reporting(0);
	$user=$_POST["user"];
	$pass=$_POST["pass"];
    
        $nuser=$_POST["nuser"];
	$npass=$_POST["npass"];
	


   // $in="DELETE FROM `employee` WHERE name='$name'";
    $in="UPDATE `admin` SET `username`='$nuser' WHERE username='$user'";
    $ina="UPDATE `admin` SET `pass='$npass' WHERE pass='$user'";
  



    $q="SELECT * FROM admin";
   echo "UPDATED DATABASE RECORDS "."<br>"."<hr>";
   $con=new mysqli("127.0.0.1","root","","test");
    mySqli_query($con,$in);
    mySqli_query($con,$ina);
   
	$re=mysqli_query($con,$q)or die(mysql_error());
	while($row=mysqli_fetch_array($re)){
		echo $row[0]."&nbsp &nbsp".$row[1]."</br>";
	}


echo "<h1>Record has been UPDATED of : </h1>".$user;


?>

<a href="index.php">Now Click here to go back to admin panel</a>;