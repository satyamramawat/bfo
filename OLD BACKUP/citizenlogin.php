<?php


// Connect to server and select databse.
$con=mysqli_connect("127.0.0.1","root","","test"); 
$db=mysqli_select_db($con,"test") or die(mysql_error()); 

// username and password sent from form 
$myusername=$_POST['user']; 
$mypassword=md5($_POST['pass']); 

//// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM citizen WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword"); 
header("location:about.html");
}
else {
echo "Wrong Username or Password";
}
?>