<html>
<?php
error_reporting(0);
include("config.php");
?>
<head>
<title>emp add</title>
</head>
<body>
<?php
	include("menu.php");
?>
<h3 align="center">Employee Master</h3>
	            <div>
				  <?php
					error_reporting(0);
					
					$ename=$_POST['ename'];
					$etype=$_POST['type'];
					if(isset($_POST['submit']))
					{
						
						if($ename!=NULL)
						{
							
							mysql_query("insert into emp values('','$ename','$etype','0')");
							?>
                    <h2 align="center"><font color="#009900" size="+3">Employee added successfully.</font></h2>
                    <?php
														
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
            <form method="POST" >
              <table border="1" class="curvedEdges" align="center">
                <tr>
                  <td colspan="2" align="center"><h3>Add Employee Name</h3></td>
                </tr>
                <tr>
                  <td><span>Employee Name
                    <label>*</label>
                    </span></td>
                  <td><input type="text" name="ename" required/></td>
				  </tr>
				  <tr>
				  <td><span>Employee Type
                    <label>*</label>
                    </span></td>
				  <td><input type="text" name="type" required/></td>
				               
                <tr>
                                     
					<td colspan="3" align="center"><div>               	
                      <input type="submit" value="Submit" name="submit"  class="mybutton">
                    
                      
                    </div>
					</td>
                     
                </tr>
              </table>             
            </form>
                 </center>
			
				
			   </div>
		 
			  <h3 align="center">Employee Delete & Edit</h3>
			  <center>
            <?php
								error_reporting(0);
								
								$sql="select * from emp";
								if($_GET["eid"]!="")
								{
									$sql1="delete from emp where id='".$_GET["eid"]."'";
									$res=mysql_query($sql1);
									
								}
								$res=mysql_query($sql);
							?>
								
								<table border="1">
								<tr>
								
								<td>Emp Name</td>
								<td>Emp Type</td>
								<td>Edit</td>
								<td>Delete</td>
								</tr>
							<?php
							
								while($row=mysql_fetch_array($res))
								{
								?><tr>
									
									<td><?php echo $row[1]?></td>
									<td><?php echo $row[2]?></td>
                                    <td><a href="emp_edit.php?e_id=<?php echo $row[0]?>" onClick="return confirm('Are you sure to Edit Employee as <?php echo $row[1]?> ?')" style="color:red">Edit</a></td>
									
									<td><a href="add_emp.php?eid=<?php echo $row[0]?>" onClick="return confirm('Are you sure to delete Employee as <?php 											echo $row[1]?> ?')" style="color:red">Delete</a></td></tr> 
							<?php 
								}
								
							?>
							</table>
            </center>
			  
			  
</body>
</html>