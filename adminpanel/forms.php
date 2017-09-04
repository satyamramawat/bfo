<?php 
session_start();
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

    <title>SB Admin - Bootstrap Admin Template</title>

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
                                        <h5 class="media-heading"><strong> <?php echo $_SESSION['name']; ?></strong>
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
                                        <h5 class="media-heading"><strong> <?php echo $_SESSION['name']; ?></strong>
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
                                        <h5 class="media-heading"><strong> <?php echo $_SESSION['name']; ?></strong>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $_SESSION['name']; ?> <b class="caret"></b></a>
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
                    <li>
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
                        <a href="manualmapping.php"><i class="fa fa-fw fa-desktop"></i> Manual Mapping </a>
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

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ADD / UPDATE / DELETE - ADMIN
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Admin-settings
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="addadmin.php" method="post" >
                          <div class="breadcrumb">
                            <label><b>Add new admin</b></label>
                              </div>
                            
                                <nav class="navbar navbar-inverse">
                                    <div class="form-group">
			                    		<label class="sr-only" for="usr">User name</label>
			                        	<input type="text" name="user" placeholder="Username" class="form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="pwd">Password</label>
			                        	<input type="password" name="pass" placeholder="password" class="form-control" id="form-last-name">
			                        </div>
                            </nav>

                           
                            <button type="submit" class="btn btn-default btn-primary">Submit Button</button>
                            <button type="reset" class="btn btn-default  btn-danger ">Reset Button</button>

                        </form>

                    </div>
             </div>
                
                
                
                
                
                
            
     <div class="row">
                    <div class="col-lg-6">

                        
                        
                        
                        

                        <form role="form" action="deladmin.php" method="post" >
                          <div class="breadcrumb">
                            <label><b>Delete admin</b></label>
                              </div>
                            
                                <nav class="navbar navbar-inverse">
                                    <div class="form-group">
			                    		<label class="sr-only" for="usr">User name</label>
			                        	<select name="user">
                                    <?php
                                        $sql2=mysql_query("select * from admin");
                                        while($row2=mysql_fetch_array($sql2))
                                        {
                                        ?>
                                            <option value="<?php echo $row2[0]; ?>"><?php echo $row2[1]; ?></option>
                                        <?php
                                        }
                                
                                        ?>

                                        
                                        </select>
			                        </div>
                            </nav>

                           
                            <button type="submit" class="btn btn-default btn-primary">Submit Button</button>
                            <button type="reset" class="btn btn-default  btn-danger ">Reset Button</button>

                        </form>


                    </div>
             </div>
                
             
                
                
                
                <hr><hr>
                <div class="row">
                    <div class="col-lg-6">

                        <form role="form" action="update.php" method="post" >
                          <div class="breadcrumb">
                            <label><b>Update Admin</b></label>
                              </div>
                            
                                <nav class="navbar navbar-inverse">
                                    <div class="form-group">
			                    		<label class="sr-only" for="usr">Admin name</label>
			                        	<input type="text" name="user" placeholder="OLD Username" class="form-control" id="form-first-name">
                                        <label class="sr-only" for="usr">New admin name</label>
			                        	<input type="text" name="nuser" placeholder="NEW Username" class="form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="pwd">Current Password</label>
			                        	<input type="password" name="pass" placeholder="OLD password" class="form-control" id="form-last-name">
                                        <label class="sr-only" for="pwd">Current Password</label>
			                        	<input type="password" name="npass" placeholder="NEW password" class="form-control" id="form-last-name">
			                        </div>
                            </nav>

                           
                            <button type="submit" class="btn btn-default btn-primary">Submit Button</button>
                            <button type="reset" class="btn btn-default  btn-danger ">Reset Button</button>

                        </form>

                    </div>
             </div>
              
                
                
            <div class="col-sm-6 col-lg-6">
        		<div id="register-wraper">
        		    
                    <?php
                        $usr=$_POST['usr'];
                        $fnm=$_POST['firstname'];
                        $lnm=$_POST['lastname'];
                        $em=$_POST['email'];
                        $phn=$_POST['phn'];
                        $add=$_POST['add'];
                        $city=$_POST['city'];
                        $pin=$_POST['pin'];
                    
                    
                        if(isset($_POST['submit']))
                        {
                            if($usr!=NULL && $fnm!=NULL && $lnm!=NULL && $phn!=NULL)
                            {
                                $sq="insert into admindetail values('','$usr','$fnm','$lnm','$em','$phn','$add','$city','$pin')";
                                mysql_query($sq);
                                header("Location:forms.php");
                                echo "<h2 style='color:green;' align='center'>Admin Detail Added Successfully</h2>";
                            }
                        }
                    
                    ?>
                        
                    <br><hr>
                    <form action="#" method="post" id="register-form" class="form">
        		        <legend>Admin Detail</legend>
        		    
                        
        		        <div class="body">
        		        	<!-- first name -->
    		        		
                            <label for="name">Select User:</label>
                            <select name="usr">
                            <?php
                                $sql=mysql_query("select * from admin");
                                while($row=mysql_fetch_array($sql))
                                {
                                    ?>
                                <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                                    <?php
                                }
                                
                            ?>
                            
                            
                            </select>
                            
                            <label for="name">First name</label>
    		        		<input name="firstname" class="input-huge" type="text">
        		        	<!-- last name -->
    		        		<label for="surname">Last name</label>
    		        		<input name="lastname" class="input-huge" type="text">
                            <label>E-mail</label>
        		        	<input class="input-huge" name="email" type="text">
                            
                            
                            
        		        	<label>Phone no:</label>
        		        	<input name="phn" class="input-huge" type="text">
        		        	<!-- email -->
        		        	<label>Address:</label>
        		        	<input name="add" class="input-huge" type="text">
        		        	<!-- password -->
                            <label>City:</label>
        		        	<input name="city" class="input-huge" type="text">
        		        	
                            <label>Pin:</label>
                            <input class="input-huge" name="pin" type="text">

        		        </div>
        		    
        		        <div class="footer">
        		          
        		            <button type="submit" name="submit" class="btn btn-success">Register</button>
        		        </div>
        		    </form>
        		</div>
        	</div>    
                
                
                
                <!-- /.row -->

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
