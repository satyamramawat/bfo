<?php
  ini_set('msql.connect_timeout',300);
  ini_set('default_socket_timeout',300);
  session_start();
error_reporting(0);
if($_SESSION['adminlogin']!="true")
{
	header("location:../admin.php"); 
}

include("connection.php");
?>


<html>
  <body>
      
      
        <form action="#" method="post" id="register-form" enctype="multipart/form-data" class="form">
                        
        		        <div class="body">
        		        	<!-- first name -->
    		        		
                            <label for="name">Select User:</label>
                            <select name="usr">
                            <?php
                                $sql=mysql_query("select * from admin");
                                while($row=mysql_fetch_array($sql))
                                {
                                    ?>
                                <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                    <?php
                                }
                                
                            ?>
                            
                            
                            </select>
  <br/>
      <input type="file" name="ppic"/>
   <br/><br/>
      <input type="submit" name="submit" value="upload" />
            </div></form>
  

<?php
 if(isset($_POST['submit']))
  { 
    $imgname=$_FILES["ppic"]["name"];
    $aid=$_POST['usr'];
     $mmyy=date("my");
     
    $qry="select ifnull(max(substr(imid,6)),10000) from images where substr(imid,1,1)='T' and substr(imid,2,4)=$mmyy";
	$result=mysql_query($qry);
	$rec=mysql_fetch_row($result);
	$mslno=$rec[0];
	$mslno++;
	$imagefetch='T'.$mmyy.$mslno;
     
     $splitName = explode(".", $imgname); //split the file name by the dot
	$fileExt = end($splitName); //get the file extension
	//echo $fileExt;
	$newFileName  = strtolower($imagefetch.'.'.$fileExt);
	// echo $newFileName;
	move_uploaded_file($_FILES["ppic"]["tmp_name"],"./images/".$newFileName);
	$path="images/".$newFileName;
	//copy($HTTP_POST_FILES['ppic']['tmp_name'],$path);
     
     
     $in="insert into images (imid,aid,imagename,imagepath) values ('$imagefetch',$aid,'$newFileName','$path')";
     $qry=mysql_query($in);
     header("Location:image.php");
     echo "<h2 style='color:green;' align='center'>Profile Picture is Uploaded of<php? echo $row[1]; ?> </h2>";
  }
   

      ?>
</body>
</html> 