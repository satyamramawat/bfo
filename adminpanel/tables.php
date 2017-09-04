<?php session_start();
error_reporting(0);
if($_SESSION['adminlogin']!="true")
{
	header("location:../admin.php"); 
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

    <title>BFO tables</title>

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
                <a class="navbar-brand" href="index.php">BFO Admin Panel</a>
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
                            <a href="profile/profile1.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
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
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li class="active">
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
<!--                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i>User settings</a>-->
                         <a href="forms.html:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i>User settings<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="forms.php">Admin</a>
                            </li>
                            <li>
                                <a href="employeedetail.php">Employee</a>
                            </li>
                            <li>
                                <a href="#">Customer</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="manualmapping.php"><i class="fa fa-fw fa-desktop"></i>Manual Mapping</a>
                    </li>
                    <li>
                        <a href="map.php"><i class="fa fa-fw fa-map-signs"></i>Maps</a>
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
                
                
                <!-- row(table1) -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Administrator Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>AdminID</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="SELECT * FROM admin";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                        {
                                            echo'
                                            <tr>
                                                <td>'. $row['UserNameID'] .'</td>
                                                <td>'. $row['username'] .'</td>
                                                <td>'. $row['pass'] .'</td>
                                            </tr>';
                                        }
                                    ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                 <!-- /.row(table1) -->

                <!-- row(table2) -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Citizen Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>NAME</th>
                                        <th>Address</th>
                                        <th>Email ID</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="SELECT * FROM citizen";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                        {
                                            echo'
                                            <tr>
                                                <td>'. $row['UserID'] .'</td>
                                                <td>'. $row['firstname'] .' '. $row['lastname'] .'</td>
                                                <td>'. $row['address'] .'</td>
                                                <td>'. $row['email'] .'</td>
                                                <td>'. $row['username'] .'</td>
                                                <td>'. $row['password'] .'</td>
                                            </tr>';
                                        }
                                    ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row(table2) -->

                
                
                
                
                 <!-- row(table3) -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Employee Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee name</th>
                                        <th>E-mail</th>
                                        <th>Aadhar card no.</th>
                                        <th>Designation</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="SELECT * FROM employee";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                        {
                                          ?>
                                            <tr>
                                                <td><?php echo $row['empid']; ?></td>
                                                <td><?php echo $row['e_firstname']." ".$row['e_lastname']; ?></td>
                                                <td><?php echo  $row['e_email']; ?></td>
                                                <td><?php echo  $row['e_aadhar']; ?></td>
                                                <td><?php echo  $row['desig']; ?></td>
                                               
                                                
                                                <?php
                                                if($row['attendance']==0)
                                                { ?> 
                                                    <td align="center"><img src="images/absent.png" height="32px" width="100px"/></td>
                                                
                                                <?php    
                                                }
                                                else
                                                { ?>
                                                    <td align="center"><img src="images/present.png" height="32px" width="100px"/></td>
                                                <?php }
                                                ?>
                                                                                        
                                                
                                            
                                               
                                            </tr>
                                    <?php
                                        }
                                    ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                 <!-- /.row(table3) -->
                
                
                
                
                  <!-- row(table4) -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Available Employee Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Available Employee ID</th>
                                        <th>Employee name</th>
                                        <th>Designation</th>
                                        <th>Working Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="SELECT * FROM emp";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                        {
                                          ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo  $row['type']; ?></td>
                                                
                                                <?php
                                                if($row['flag']==0)
                                                { ?> 
                                                    <td align="center"><img src="images/free.png" height="32px" width="100px"/></td>
                                                
                                                <?php    
                                                }
                                                else
                                                { ?>
                                                    <td align="center"><img src="images/notfree.png" height="32px" width="100px"/></td>
                                                <?php }
                                                ?>
                                                                                        
                                                
                                            
                                               
                                            </tr>
                                    <?php
                                        }
                                    ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                 <!-- /.row(table4) -->
                
                
                <!-- row(table5) -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Order Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer name</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                        <th>Flag</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="SELECT * FROM c_order";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                        {
                                      ?>     
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['cust']; ?></td>
                                                <td><?php echo $row['time']; ?></td>
                                                 <?php
                                                if($row['flag']==0)
                                                { ?> 
                                                    <td align="center"><img src="images/up.png" height="20px" width="20px"/>
                                                    
                                                </td>
                                                    <td>0</td>
                                                <?php    
                                                }
                                                else
                                                { ?>
                                                    <td align="center"><img src="images/down.png" height="20px" width="20px"/></td>
                                                    <td>1</td>
                                                <?php }
                                                ?>
                                            </tr> 
                            <?php
                                        }
                                    ?>     
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                 <!-- /.row(table5) -->
                
                
                <!-- row(table6) -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Work Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Work ID</th>
                                        <th>Order ID</th>
                                        <th>Employee ID</th>
                                        <th>Status</th>
                                        <th>Flag</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="SELECT * FROM work";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                        {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['wid']; ?></td>
                                                <td><?php echo $row['oid']; ?></td>
                                                <td><?php echo $row['eid']; ?></td>
                                                <?php
                                                if($row['status']==0)
                                                { ?> 
                                                    <td align="center"><img src="images/up.png" height="20px" width="20px"/>
                                                    
                                                </td>
                                                    <td>0</td>
                                                <?php    
                                                }
                                                else
                                                { ?>
                                                    <td align="center"><img src="images/down.png" height="20px" width="20px"/></td>
                                                    <td>1</td>
                                                <?php }
                                                ?>
                                            </tr> <?php
                                        }
                                    ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                 <!-- /.row(table6) -->
                
                 <!-- row(table7) -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>LOG(workdone) Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Workdone ID</th>
                                        <th>Work ID</th>
                                        <th>Order ID</th>
                                        <th>Employee ID</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="SELECT * FROM workdone";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                        {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['wdid']; ?></td>
                                                <td><?php echo $row['wid']; ?></td>
                                                <td><?php echo $row['oid']; ?></td>
                                                <td><?php echo $row['empid']; ?></td>
                                                <?php
                                                if($row['status']==0)
                                                { ?> 
                                                    <td align="center"><img src="images/up.png" height="20px" width="20px"/>
                                                    
                                                </td>
                                                    <td>0</td>
                                                <?php    
                                                }
                                                else
                                                { ?>
                                                    <td align="center"><img src="images/down.png" height="20px" width="20px"/></td>
                                                    <td>1</td>
                                                <?php }
                                                ?>
                                            </tr> <?php
                                        }
                                    ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                 <!-- /.row(table7) -->
                
                <!-- row(table8) -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Image Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Admin Name</th>
                                        <th>Image Name</th>
                                        <th>Image Path</th>                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql="Select admindetail.fname,images.imagename,images.imagepath from images INNER JOIN admindetail ON images.aid = admindetail.faid";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                        {
                                            echo'
                                            <tr>
                                                <td>'. $row['fname'] .'</td>
                                                <td>'. $row['imagename'] .' '. $row['lastname'] .'</td>
                                                <td>'. $row['imagepath'] .'</td>                                                
                                            </tr>';
                                        }
                                    ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row(table7) -->
                
                
               <!-- row(table8) -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Attendance Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>Attendace</th>
                                        <th>Working Status</th>                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     $sql="Select employee.e_firstname,employee.e_lastname,employee.attendance,emp.name,emp.flag FROM employee JOIN emp ON employee.empid != emp.empid && employee.attendance != emp.flag  ";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                       {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['e_firstname'].' '.$row['e_lastname']; ?></td>
                                               
                                                 <?php
                                                if($row['attendance']==0)
                                                { ?> 
                                                    <td align="center"><img src="images/absent.png" height="32px" width="100px"/></td>
                                                
                                                <?php    
                                                }
                                                else
                                                { ?>
                                                    <td align="center"><img src="images/present.png" height="32px" width="100px"/></td>
                                                <?php }
                                                ?>
                                                
                                                 <?php
                                                if($row['attendance']==1 )
                                                { 
                                                    if($row['flag']==0)
                                                    { ?> 
                                                    <td align="center"><img src="images/notfree.png" height="32px" width="100px"/></td>
                                                <?php  
                                                    }
                                                    else
                                                      { 
                                                ?> 
                                                    <td align="center"><img src="images/free.png" height="32px" width="100px"/></td>
                                                <?php
                                                    }
                                                ?> 
                                                
                                                <?php
                                                }
                                                 else
                                                      { 
                                                ?>
                                                    <td align="center"><img src="images/notavailable.png" height="32px" width="100px"/></td>
                                                <?php                                                   
                                                      }
                                                ?>
                                                 
                                            </tr> 
                                     <?php                                                   
                                                      }
                                                ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row(table8) -->
                
            </div>
            <!-- /.container-fluid -->

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
