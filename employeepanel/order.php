<?php session_start();
error_reporting(0);
if($_SESSION['emplogin']!="true")
{
	header("location:../employeelogin.php"); 
}

include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BFO EMPLOYEE</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">EMPLOYEE PANEL</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Attendance</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php" active><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Available ORDERS
                        </h1>
                    </div>
                </div>
               <!-- Page Heading -->
                    
                 <!-- /.row -->  
            <div>
              
                <div>
				 <center>
             <?php
	
	
				   $eid=$_SESSION['id'];
				   $sql2="select * from emp where id='$eid'";
				   $res2=mysql_query($sql2);
				   $row2=mysql_fetch_array($res2);
				   $emp=$row2[1];
			
?> 
                     <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
             <thead>
                  <tr>
                  <td colspan="2" align="center"><h3>Employee <?php echo $_SESSION['name']; ?> available orders list</h3></td>
                </tr>
             </thead> 
                            </table>
                            <table class="table table-bordered table-hover">
             <thead>
                  <tr>
                 <td colspan="12" align="center"><h3>Un-Assign Orders</h3></td>
                 </tr>
             </thead> 
                             
			  <center>
            
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
					mysql_query("update emp set flag='1' where empid='$eid'");
                               
					
									?><h2 align="center"><font color="#009900" size="+3">Order Assign successfully.</font></h2>
								<?php
								}
								?>
								
								<?php
								$sql="select * from c_order where id  not in (select oid from work)";
								
								$res=mysql_query($sql);
							?>
								
							
								<tr>
								
								<td>Customer Name</td>
                                <td>Food-Expire TIME</td>   
                                <td>Address</td>  
                                <td>Given:time</td>         
								<td>Check To Assign <?php echo $emp; ?></td>
								<td>Submit</td>
								</tr>
							<?php
							
								while($row=mysql_fetch_array($res))
								{
								?><tr>
									
									<td><?php echo $row[1]?></td>
                                    <td><?php echo $row[2]?></td>
                                    <td><?php echo $row[7]?></td>
                                    <td><?php echo $row[9]?></td>
									<td>
											<input type="checkbox" name="ch1[]" value="<?php echo $row[0]; ?>">	
									</td>
									<td colspan="2" align="center"><input type="submit" name="submit" value="Take Order"/></td>
								  </tr>
								  
							<?php 
								}
								
							?>
							<tr>
                                <td colspan="5" align="center"><div> 
						<a href="index.php"><input type="button" value="Back" name="back"/></a>
                                    </div></td>
                                    </tr>
							
                  
                  </form></center></table></div></div></div>
            
            </center>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
