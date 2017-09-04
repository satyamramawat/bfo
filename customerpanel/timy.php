<?php
 session_start();
error_reporting(0);
if($_SESSION['citilogin']!="true")
{
	header("location:../citizenlogin.php"); 
}

include("connection.php");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Styled JavaScript Countdown Clock</title>
    
    
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


    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <h1><b>ON THE WAY</b></h1>
<div id="clockdiv">
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>
    
        <script src="js/index.js"></script>
      
      
      <!-- row(table3) -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Customer Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>Customer name</th>
                                        <th>Address</th>
                                        <th>Expiry Food time</th>                                       
                                        <th>Food Category</th>
                                        <th>Source</th>
                                        <th>Capacity</th>
                                         <th>Order Flag </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $name=$_SESSION['fname'];
                                    $sql="SELECT * FROM c_order where cust='$name' ";
                                    $result = mysql_query($sql);
                                    while($row = mysql_fetch_array($result))
                                        {
                                          ?>
                                           <center> <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['cust']; ?></td>
                                                <td><?php echo $row['Address']; ?></td>
                                                <td><?php echo  $row['time']; ?></td>                                               
                                                <td><?php echo  $row['food_category']; ?></td>
                                               <td><?php echo  $row['source']; ?></td>
                                                <td><?php echo  $row['Capacity']; ?></td>
                                                <td><?php echo  $row['flag']; ?></td>
                                                
                                                                                 
                                                
                                            
                                               
                                            </tr>   </center>    
                                    <?php
                                        }
                                    ?>    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                 <!-- /.row(table3) -->
      
      

    <br><a href="logout.php"> <button type="submit" name="logout" ><font size="5">Logout</font></button></a>
    
      
  </body>
</html>
