<?php
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$email=$_POST["email"];
	$add=$_POST["address"];
    $adr=$_POST["aadhar"];
    $myusername=$_POST['user']; 
    $mypassword=md5($_POST['pass']); 



mysql_query($insert_image);
   

    $tab="create table employee(UserID int(9) NOT NULL auto_increment,firstname varchar(20), lastname varchar(20),email varchar(50),address varchar(20),aadhar_no varchar(20) NOT NULL ,username VARCHAR(40) NOT NULL, password VARCHAR(40) NOT NULL, PRIMARY KEY(UserID))";
	$in="INSERT into employee(firstname,lastname,email,address,aadhar_no,image_path)  values('$fname','$lname','$email','$add','$adr','$imagename')";
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