<?php
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$add=$_POST["address"];
    $myusername=$_POST['user']; 
    $mypassword=md5($_POST['pass']); 
 

    $tab="create table citizen(UserID int(9) NOT NULL auto_increment,firstname varchar(20), lastname varchar(20),email varchar(50),address varchar(20),username VARCHAR(40) NOT NULL, password VARCHAR(40) NOT NULL, PRIMARY KEY(UserID))";
	$in="INSERT into citizen(firstname,lastname,email,address,username,password)  values('$fname','$lname','$email','$add','$myusername','$mypassword')";
    $q="SELECT * FROM citizen";
echo "<hr>";
echo "<h3>YOU SIGN UP SUCCESFULLY </h3>";
echo "<h4>Your details</h4>"."<br>";
echo "<b>Name:</b>".$fname."<br>";
echo "<b>Last:</b>".$lname."<br>";
echo "<b>Email:</b> ".$email."<br>";
echo "<b>Addres:</b> ".$add."<br>";


echo "<hr>";


	
	$con=new mysqli("127.0.0.1","root","","test");
	mysqli_query($con,$tab);
	mySqli_query($con,$in);
	$re=mysqli_query($con,$q)or die(mysql_error());
	while($row=mysqli_fetch_array($re))
//    {
//		echo $row[0]."&nbsp &nbsp".$row[1]."&nbsp &nbsp".$row[2]."&nbsp &nbsp".$row[3]."</br>";
//	}

echo "<hr>";
?>

<a href="citizenlogin.html">Now Click here to login</a>;