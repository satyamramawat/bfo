<html>
<?php
include("config.php");
error_reporting(0);
?>
<head>
<title>emp add</title>
</head>
<body>
<?php
	include("menu.php");
?>
<h3 align="center"><b>Order Master</b></h3>
	            <div>
				  <?php
					error_reporting(0);
					
					$cname=$_POST['cname'];
					$time=$_POST['time'];
					
					if(isset($_POST['submit']))
					{
						
						if($cname!=NULL)
						{
							
							mysql_query("insert into c_order values('','$cname','$time','0')");
							?><h2 align="center"><font color="#009900" size="+3">Order added successfully.</font></h2><?php
														
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
                  <td colspan="2" align="center"><h3>Add Order</h3></td>
                </tr>
                <tr>
                  <td><span>Customer Name
                    <label>*</label>
                    </span></td>
                  <td><input type="text" name="cname" required/></td>
				  </tr>
				  <tr>
				  <td><span>When u want order ? 
                    <label>*</label>
                    </span></td>
				    <td>
						<input type="radio" name="time" value="Now" selected>Now
						<input type="radio" name="time" value="After 1 Hour">After 1 Hour
						<input type="radio" name="time" value="After 2 Hour">After 2 Hour
					</td>
				               
                <tr>
                                     
					<td colspan="3" align="center"><div>               	
                      <input type="submit" value="Submit" name="submit"  class="mybutton">
                    
                      
                    </div>
					</td>
                     
                </tr>
                   
              </table></form>
              </center>
           
			
				
			   </div>
		      </div>
			  <h3 align="center">Order Delete</h3>
			  <center>
            <?php
								error_reporting(0);
								
								$sql="select * from c_order";
								if($_GET["oid"]!="")
								{
									$sql1="delete from c_order where id='".$_GET["oid"]."'";
									$res=mysql_query($sql1);
									
								}
								$res=mysql_query($sql);
							?>
								
								<table border="1">
								<tr>
								
								<td>Customer Name</td>
								<td>Available At</td>
								<td>Delete</td>
								</tr>
							<?php
							
								while($row=mysql_fetch_array($res))
								{
								?><tr>
									
									<td><?php echo $row[1]?></td>
									<td><?php echo $row[2]?></td>
									<td><a href="order.php?oid=<?php echo $row[0]?>" onClick="return confirm('Are you sure to delete order as <?php 											echo $row[1]?> ?')" style="color:red">Delete</a></td></tr> 
							<?php 
								}
								
							?>
							</table>
            </center>
</body>
</html>