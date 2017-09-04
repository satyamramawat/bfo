<?php session_start();
error_reporting(0);
if($_SESSION['adminlogin']!="true")
{
	header("location:../admin.php"); 
}

include("connection.php");
?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>BLOCKS - Bootstrap Dashboard Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    
    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-style.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
<!--
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
-->
	</head>
  <body>

  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="images/logo30.png" alt=""> BLOCKS Dashboard</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li><a href="tables.html"><i class="icon-th icon-white"></i> Tables</a></li>
              <li><a href="login.html"><i class="icon-lock icon-white"></i> Login</a></li>
              <li class="active"><a href="user.html"><i class="icon-user icon-white"></i> User</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
<center>
    <div class="container">
        <div class="row">

        	<div class="col-lg-6">
        		
        		<div class="register-info-wraper">
        			<div id="register-info">
        				<div class="cont2">
        					<div class="thumbnail">
								<img src="images/face.jpg" alt="Marcel Newman" class="img-circle">
							</div><!-- /thumbnail -->
							<h2>Marcel Newman</h2>
        				</div>
        				<div class="row">
        					<div class="col-lg-3">
        						<div class="cont3">
                                    
                                    <?php
                                    $usr=$_SESSION['id'];
                                    $sql=mysql_query("select * from admindetail where faid='$usr'");
                                    $row=mysql_fetch_array($sql);
                                    
                                    $sql2=mysql_query("select * from admin where UserNameID='$usr'");
                                    $row2=mysql_fetch_array($sql2);
                                    
                                    ?>
                                    
                                    
        							<p><ok>Username:</ok> <?php echo $row2[1]; ?></p>
                                    <p><ok>Name :</ok> <?php echo $row[2]." ".$row[3] ; ?></p>
        							<p><ok>Mail:</ok> <?php echo $row[4] ;?></p>
        							<p><ok>City:</ok> <?php echo $row[7] ;?></p>
        							<p><ok>Address:</ok> <?php echo $row[6] ;?></p>
        						</div>
        					</div>
        					<div class="col-lg-3">
        						<div class="cont3">
        						
        						<p><ok>Phone:</ok> <?php echo $row[5] ;?></p>
        						<p><ok>Pincode:</ok> <?php echo $row[8] ;?></p>
        						</div>
        					</div>
        				</div><!-- /inner row -->
						<hr>
						<div class="cont2">
							<h2>Choose Your Option</h2>
						</div>
						<br>
							<div class="info-user2">
								<span aria-hidden="true" class="li_user fs1"></span>
								<a href="../index.php"><span aria-hidden="true" class="li_settings fs1"></span></a>
								<span aria-hidden="true" class="li_mail fs1"></span>
								<span aria-hidden="true" class="li_key fs1"></span>
								<span aria-hidden="true" class="li_lock fs1"></span>
								<span aria-hidden="true" class="li_pen fs1"></span>
							</div>

        				
        			</div>
        		</div>

        	</div>

        	

        </div>
    </div>
</center>
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="images/logo.png" alt=""></p>
      			<p>Blocks Dashboard Theme - Crafted With Love - Copyright 2013</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->  
</body></html>