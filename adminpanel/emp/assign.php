<html>
<?php
include("config.php");
error_reporting(0);
?>
<head>
<title>Work Assign</title>
</head>
<body>
<?php
	include("menu.php");
	
				   $eid=$_GET['wid'];
				   $sql2="select * from emp where id='$eid'";
				   $res2=mysql_query($sql2);
				   $row2=mysql_fetch_array($res2);
				   $emp=$row2[1];
			
?>
			  <h3 align="center">Assign Work to <?php echo $emp; ?></h3>
			  <center>
              <h3 align="center">Un-Assign Orders</h3>
			  <form method="post">
              <?php
								error_reporting(0);
								
								$chbx=$_POST['ch1'];
								if(isset($_POST['submit']))
								{
									for($i=0;$i<sizeof(chbx);$i++)
									{
					mysql_query("insert into work values('','$chbx[$i]','$eid','1')");
					mysql_query("update c_order set flag='1' where id='$chbx[$i]'");
									}
					mysql_query("update emp set flag='1' where id='$eid'");
					
									?><h2 align="center"><font color="#009900" size="+3">Order Assign successfully.</font></h2>
								<?php
								}
								?>
								
								<?php
								$sql="select * from c_order where id  not in (select oid from work)";
								
								$res=mysql_query($sql);
							?>
								
								<table border="1">
								<tr>
								
								<td>Customer Name</td>
								<td>Check To Assign <?php echo $emp; ?></td>
								<td>Submit</td>
								</tr>
							<?php
							
								while($row=mysql_fetch_array($res))
								{
								?><tr>
									
									<td><?php echo $row[1]?></td>
									<td>
											<input type="checkbox" name="ch1[]" value="<?php echo $row[0]; ?>">	
									</td>
									<td colspan="2" align="center"><input type="submit" name="submit" value="Assign"/></td>
								  </tr>
								  
							<?php 
								}
								
							?>
							<tr>
                                <td colspan="3" align="center"><div> 
						<a href="work1.php"><input type="button" value="Back" name="back"/></a>
                                    </div></td>
                                    </tr>
							</table>
							
							</form>
            </center>
			
			
			
			
			
			
			
			
			
			
			
			
           
</body>
</html>