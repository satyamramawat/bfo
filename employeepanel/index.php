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
                            Welcome to Employee Panel 
                        </h1>
                    </div>
                </div>

                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="order.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                   



                <!-- /.row -->
                    
                    <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Attendance
                            <small>Please give attendance</small>
                        </h1>
                        
                        
                        <a class="btn btn-link-1" href="attd.php?attd=1">PRESENT</a>
                        <a class="btn btn-link-1" href="attd.php?attd=0">ABSENT</a>
                      
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
                        
                        
                        
                    <!--/.cuurentorder-->
                        <div class="row">
                    <div class="col-lg-12">
                        <h2>Current available orders</h2>
                        <form method="POST" action=new.php >
                        <div class="table-responsive">
                            <table  class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>Customer Name</th>
                                        <th>Food-expire TIME</th>
                                        <th>Address</th>
                                        <th>Current-time by customer</th>
                                        <th>Deliver -time</th>
                                        <th>Submit</th>                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                                               					
                                
                                    $usr=$_SESSION['id'];
                                    
                                    $sql=mysql_query("select * from work where eid='$usr'");
                                    while($row=mysql_fetch_array($sql)){
                                    $o=$row['oid'];
                                    $sql2=mysql_query("select * from c_order where id='$o' ");
                                    while($row2=mysql_fetch_array($sql2)){
                                        date_default_timezone_set("Asia/calcutta");
                                         $x=$row2['ctime'];
                                    ?>
                                            
                                                <tr><td><?php echo $row[1]; ?></td>
                                                <td><?php echo $row2['cust']; ?></td>
                                                <td><?php echo $row2['time']; ?></td>
                                                <td><?php echo $row2['Address']; ?></td>
                                                <td><?php echo $row2['ctime']; ?></td> 
                                                <td><input class="form-control"  placeholder="Enter the time" name="time" type="text" required></td> 
                                                <?php 
                                                    $h=date_default_timezone_set("Asia/calcutta");date("h");
                                                    $m=date_default_timezone_set("Asia/calcutta");date(":i:");
                                                    $s=date_default_timezone_set("Asia/calcutta");date("s");
                                                    $sql=mysql_query("INSERT INTO time (ctime,etime) VALUES('$x','$h:$m:$s')");
                                                
                                             
                                    }
                                    }?>
                                       <button type="submit">submit</button>             
                                    <td colspan="2" align="center"><a href="index.php?wid=<?php echo $row[0]; ?>">DONE</a></td></tr>
                                 <?php  
                                $wid=$_GET['wid']; 
                                    
                                if($wid!='')
								{
								
                                    
					                $s="select * from work where wid='$wid'";
                                    $r=mysql_query($s);
                                    while($f=mysql_fetch_array($r)){
                                        mysql_query("insert into workdone values('','$f[0]','$f[1]','$f[2]')");    
                                        mysql_query("delete from c_order where id ='$f[1]'");          
                                        mysql_query("delete from work where wid ='$wid'");
                                    }
                                 
                                    
                                     
                                        
                                       
                                   $t="select * from work where eid='$usr'";
                                   $data=mysql_query($t);
                                   $total_rows=mysql_num_rows($data);
	                               if($total_rows!=0)
	                               {
                                       mysql_query("update emp set flag=1 where empid='$usr'");
                                   }
                                    else
                                    {
                                        mysql_query("update emp set flag=0 where empid='$usr'");
                                    }
					
                                    header("Location:index.php");
					
									?>
                                    
                                    <h2 align="center"><font color="#009900" size="+3">Order complete successfully.</font></h2>
								<?php
								}       
                                    
                                    ?>
                                    
                                     
                                                
                                              
                                </tbody>
                            </table>
                        </div>
                        </form>
                    </div>
                </div> 
            <!--/.cuurentorder-->            

        </div>
        
                  <div class="row">
                    <div class="col-lg-12">
                        <h2>Profile</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        
                                        
                                        
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $usr=$_SESSION['id'];
                                    $sql=mysql_query("select * from employee where empid='$usr'");
                                    $row=mysql_fetch_array($sql);
                                    ?>
                                            
                                                <tr><th>Name</th><td><?php echo $row[1]." ".$row[2]; ?></td></tr>
                                                <tr><th>Email</th><td><?php echo $row['e_email']; ?></td></tr>  
                                                <tr><th>Aadhar Card ID</th><td><?php echo $row['e_aadhar']; ?></td></tr>
                                                <tr><th>Designation</th><td><?php echo $row['desig']; ?></td></tr> 
                                                <tr><th>USERNAME</th><td><?php echo $row['username']; ?></td></tr> 
                                                
                                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
                    
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
