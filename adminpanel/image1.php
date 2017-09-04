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
    
  <body>
      
      
        <form method="post" action="imageaction.php" id="register-form" enctype="multipart/form-data" class="form">
                        
        		        <div class="body">
        		        	<!-- first name -->
    		        		
                            <label for="name">Select User:</label>
                            <select name="usr">
                            <?php
                                $sql=mysql_query("select * from admin");
                                while($row=mysql_fetch_array($sql))
                                {
                                    ?>
                                <option value="<?php echo $row[1]; ?>"><?php echo $row[1]; ?></option>
                                    <?php
                                }
                                
                            ?>
                            
                            
                            </select>
                            <label for="FileUpload2" id="Label13" >Profile Picture:</label>
                            <input type="file" id="FileUpload2"  name="Profile_Pic" required >

  <br/>
      

   <br/><br/>
      <input type="submit" name="submit" value="submit" />
            </div></form>
      
      
     
  

</body>
</html> 