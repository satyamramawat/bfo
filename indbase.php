<?php
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$add=$_POST["address"];

	$tab="create table users (fname varchar(20), lname varchar(20),email varchar(50),address varchar(20))";
	$in="INSERT into users values('$fname','$lname','$email','$add')";
	$q="SELECT * FROM users";
echo "<hr>";
echo "<h3>insertion</h3>";
echo "<h4>Newly entered values</h4>"."<br>";
echo "<b>Name:</b>".$fname."<br>";
echo "<b>Last:</b>".$lname."<br>";
echo "<b>Email:</b> ".$email."<br>";
echo "<b>Addres:</b> ".$add."<br>";


echo "<hr>"."<b>DATABASE RECORDS</b>"."<br>"."<hr>";
	
	$con=new mysqli("127.0.0.1","root","","test");
	mysqli_query($con,$tab);
	mySqli_query($con,$in);
	$re=mysqli_query($con,$q)or die(mysql_error());
	while($row=mysqli_fetch_array($re)){
		echo $row[0]."&nbsp &nbsp".$row[1]."&nbsp &nbsp".$row[2]."&nbsp &nbsp".$row[3]."</br>";
	}

echo "<hr>";
?>