<?php
    $myusername=$_POST['user']; 
    $mypassword=($_POST['pass']); 

    $tab="CREATE TABLE admin ( UserNameID int(9) NOT NULL auto_increment, username VARCHAR(40) NOT NULL, pass VARCHAR(40) NOT NULL, PRIMARY KEY(UserNameID) )";

	$in="insert into admin(username, pass) values ('$myusername','$mypassword')";
    $q="SELECT * FROM admin";
echo "<hr>";
echo "<h3>ADMIN ADDED SUCCESFULLY </h3>";


	
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

<a href="index.php">Now Click here to go back to admin panel</a>;
