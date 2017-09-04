<?php

  session_start();
error_reporting(0);
if($_SESSION['adminlogin']!="true")
{
	header("location:../admin.php"); 
}

include("connection.php");
?>
<html>
<head>
    
        <?php
$c=$_SESSION['name'];
$sql = "SELECT * FROM usr where Name='$c'";
$result = mysql_query($sql);
$result = $result->fetch_assoc();

?>
    </head> 
 <body>
 

<?php 
     $sql="SELECT * FROM usr";
     $result = mysql_query($sql);
           echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['Profile_Pic']  ).'; />';
    
     ?>

</body>

</html>