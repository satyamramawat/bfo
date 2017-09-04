<?php session_start();
error_reporting(0);
if($_SESSION['adminlogin']!="true")
{
	header("location:../admin.php"); 
}

include("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BFO Employee Master</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

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
                <a class="navbar-brand" href="../index.php">BFO Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['name']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['name']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['name']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../profile/profile1.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="../index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="../tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
<!--                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i>User settings</a>-->
                         <a href="forms.html:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i>User settings<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="../forms.php">Admin</a>
                            </li>
                            <li>
                                <a href="../employeedetail.php">Employee</a>
                            </li>
                            <li>
                                <a href="#">Customer</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="../manualmapping.php"><i class="fa fa-fw fa-desktop"></i> Manual Mapping</a>
                    </li>
                    <li>
                        <a href="../map.php"><i class="fa fa-fw fa-map-signs"></i>Maps</a>
                    </li>
<!--
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
-->
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
                            MANUAL MAPPING SECTION
                        </h1>
<!--
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-desktop"></i> Manual Mapping
                            </li>
                        </ol>
-->
                    </div>
                </div>
                <!-- /.row -->

                <!-- Main jumbotron for a primary marketing message or call to action -->
     

                
                <div class="navbar navbar-inverse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="../manualmapping.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="add_emp1.php">Employee&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                </li>    
                                <li><a href="order1.php">Order&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                </li>
                                <li><a href="work1.php">Assign Order&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                </li>                                
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>

              
            </div>
            <!-- /.container-fluid -->
            
<!---- --> 
            
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
              
       
  <center>
            <form method="POST" >
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                
                   <thead>
                <tr>
                  <td colspan="2" align="center"><h3>Add Employee Name</h3></td>
                </tr>
                  </thead>
                <tr>
                  <td><span><b>Employee Name</b>
                    <label>*</label>
                    </span></td>
                  <td><input type="text" name="ename" required/></td>
				  </tr>
				  <tr>
				  <td><span><b>Employee Type</b>
                    <label>*</label>
                    </span></td>
				  <td><input type="text" name="type" required/></td>
				               
                <tr>
                                     
					<td colspan="3" align="center"><div>               	
                      <input type="submit" value="Submit" name="submit"  class="mybutton">
                    
                      
                    </div>
					</td>
                     
                </tr>

                            </table></div></div></div>
            </form>
                 </center>      
            
            </div>
            
             <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">                       
                          <table class="table table-bordered table-hover">     
                   <thead>
                <tr>
                  <td colspan="8" align="center"><h3>Employee Delete & Edit</h3></td>
                </tr>
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
                      
								<tr>								
								<td>Employee Name</td>
								<td>Designation</td>
								<td>Edit</td>
								<td>Delete</td>
								</tr>
                       </thead>  
                              <tbody>
                                    <?php
							
								while($row=mysql_fetch_array($res))
								{
								?>
                                
                                  <tr>
									
									<td><?php echo $row[2]?></td>
									<td><?php echo $row[3]?></td>
                                    <td><a href="emp_edit1.php?e_id=<?php echo $row[0]?>" onClick="return confirm('Are you sure to Edit Employee as <?php echo $row[2]?> ?')" style="color:red">Edit</a></td>
									
									<td><a href="add_emp1.php?eid=<?php echo $row[0]?>" onClick="return confirm('Are you sure to delete Employee as <?php 											echo $row[1]?> ?')" style="color:red">Delete</a></td></tr>
							<?php 
								}
								
							?>
                                </tbody>
								
						
                              </table>
                        </div></div></div>
          

            
            
<!---- -->              
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