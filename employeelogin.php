<?php
error_reporting(0);
session_start();
if($_SESSION['emplogin']=="true")
{
    header("location:employeepanel/index.php");
}

if($_SESSION['citilogin']=="true")
{
    header("location:customerpanel/index.php");
}

if($_SESSION['adminlogin']=="true")
{
    header("location:adminpanel/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bangalore Food Organization</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Bangalore food Organization</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Put some text or
							</span> 
							<a href="#"><strong>links</strong></a> 
							<span class="li-text">
								here, or some icons: 
							</span> 
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-envelope"></i></a> 
								<a href="#"><i class="fa fa-skype"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1><strong>Bangalore</strong>Food Organization</h1>
                            <i class="fa fa-child"></i>
                            <div class="description">
                            	<p>
	                            	Do not waste your food ,give it to us we will give it to needed people 
                            	</p>
                            </div>
                            <div class="top-big-link">
                            	<a class="btn btn-link-1" href="contact.html">Contact us</a>
                            	<a class="btn btn-link-2" href="about.html">About us</a>
                            </div>
                        </div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left"><div class="upper" >
                                    
                        			<h3>Employee Login Panel</h3>
                            		<p>Login panel for food provider people</p>
                                    </div><div>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-group"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="checkemployee.php" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="usr">User name</label>
			                        	<input type="text" name="user" placeholder="Username" class="form-control" id="form-first-name" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="pwd">Password</label>
			                        	<input type="password" name="pass" placeholder="password" class="form-control" id="form-last-name" required>
			                        </div>

			                        <button type="submit" class="btn" name="login">Login</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
 <footer background>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright & Patent &copy; SATYAM RAMAWAT</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="http://www.satyamramawat.com"><i class="fa fa-instagram"></i></a>
                        </li>
<!--
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
-->
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
        
        
     
        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

       

    
    </body>

</html>