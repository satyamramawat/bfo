<?php
include("config.php");
error_reporting(0);
?>
<html>
<head>
<title>Emp edit</title>
</head>
<body>
<?php
					error_reporting(0);
					$eid=$_GET['e_id'];
					
					 $ename=$_POST['ename'];
					 $etype=$_POST['type'];					
					if(isset($_POST['submit']))
					{
						if($ename!=NULL)
						{
							mysql_query("update emp set name='$ename',type='$etype' where id='$eid'");
							?><h2 align="center"><font color="#009900" size="+3">Category Edited successfully.</font></h2><?php
							header("Location:add_emp1.php");							
						}
						else
						{
							
							?>
            					
            <h3 align="center">Try again !! Somthing Wrong !!</h3>
           				 <?php
						}
						
					}
			?>
            <br/>
            <center>
            <?php $sql2="select * from emp where id='$eid'";
				   $res2=mysql_query($sql2);
				   $row2=mysql_fetch_array($res2);
				   
			
			 ?>
            <form  method="POST" >
              <table border="1" class="curvedEdges" align="center">
                <tr>
                  <td colspan="2" align="center"><h3>Edit Emplyee </h3></td>
                </tr>
                <tr>
                  <td><span>Edit Name
                    <label>*</label>
                    </span></td>
                  <td><input type="text" name="ename" value="<?php echo $row2[1];?>"/>
				  </td>
                </tr>
                 <tr>
                  <td><span>Edit Type
                    <label>*</label>
                    </span></td>
                  <td><input type="text" name="type" value="<?php echo $row2[2];?>"/>
				  </td>
                </tr>             
                <tr>
                  <td  align="center"><div>
                  	
                      
                      <a href="add_emp1.php.php"><input type="button" value="Back"  class="mybutton"/> </a>
                      
                    </div></td>
                    <td colspan="3"><div>               	
                    <input type="submit" value="Submit" name="submit"   class="mybutton"> 
                    
                      
                    </div></td>
                     
                </tr>
              </table>
             
            </form> </center>
</body>
</html>