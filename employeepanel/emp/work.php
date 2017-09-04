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
?>
			  <h3 align="center">Free Employee</h3>
			  <center>
              <?php
								error_reporting(0);
								
							$sql="select * from emp where id  not in (select eid from work)";
             			//	$sql="select * from emp where flag=0";
								$res=mysql_query($sql);
							?>
								
								<table border="1">
								<tr>
								
								<td>Employee Name</td>
								<td>Assign Order</td>
								<td>Available</td>
								</tr>
							<?php
							
								while($row=mysql_fetch_array($res))
								{
								?><tr>
									
									<td><?php echo $row[1]?></td>
									<td><a href="assign.php?wid=<?php echo $row[0]?>">Assign</a></td>
									<td align="center"><img src="up.png" height="20px" width="25px"/></td>
									
								  </tr> 
							<?php 
								}
								
							?>
							</table>
            </center>
			
			 <h3 align="center">Order Already Assign</h3>
			  <center>
            <?php
								error_reporting(0);
								
								//SELECT DeptId, GROUP_CONCAT(EmpId SEPARATOR ',') EmpIDS
//FROM Details GROUP BY DeptId
								$sql="select * from work";
                  
								if($_GET["uid"]!="")
								{
									$sql1="delete from work where wid='".$_GET["uid"]."'";
									$res=mysql_query($sql1);
                                    
                                    $a="select * from work where eid='".$_GET["eid"]."'";
                                    $d=mysql_query($a);
                                    $r=mysql_num_rows($d);
                                    if($r==0)
                                    {
                                        mysql_query("update emp set flag='0' where id='".$_GET["eid"]."'");    
                                    }
									 mysql_query("update c_order set flag='0' where id='".$_GET["oid"]."'");   
                                    header("Location:work.php");
									
								}
                  
								$res=mysql_query($sql);
							?>
								
								<table border="1">
								<tr>
								
								<td>Employee Name</td>
								<td>Customer Name</td>
								<td>Un-assign</td>
								</tr>
							<?php
							
								while($row=mysql_fetch_array($res))
								{
								?><tr>
									
									<td>
									<?php 
										    $sql2="select * from emp where id='$row[2]'";
											$res2=mysql_query($sql2);
											while($row2=mysql_fetch_array($res2))
											{
												echo $row2[1];
											}
									?>
									</td>
									
									<td>
										<?php 
										$sql4="select * from c_order where id='$row[1]'";
										$res4=mysql_query($sql4);
										while($row4=mysql_fetch_array($res4))
										{
											 echo $row4[1];
										}
								
										?>
									</td>
									
									
									
									
									<td><a href="work.php?uid=<?php echo $row[0]?>&eid=<?php echo $row[2]?>&oid=<?php echo $row[1]?>" onClick="return confirm('Are you sure to Un-assign as <?php 											echo $row[1]?> ?')" style="color:red">Delete</a></td></tr> 
									
									
									
								
							<?php 
								}
								
							?>
							</table>
            </center>
			
</body>
</html>