
<?php
include("connection.php");
 if(isset($_POST['submit']))
  { 
   $image0 = addslashes(file_get_contents($_FILES['Profile_Pic']['tmp_name'])); //SQL Injection defence!
    $aid=$_POST['usr'];
     
     $sql = "INSERT INTO usr (Name,Profile_Pic) VALUES ('$aid','$image0')";

if (mysql_query($sql)) 
{
    echo "New record created successfully";
     header('Location: image1.php'); 
} 
     else 
{
    echo "Error: ";
}
  }
   

      ?>