<?php
   error_reporting(0);
  include("connection.php");

  
             if(isset($_POST['submit']))
                        {
                        $fnm=$_POST['firstname'];
                        $lnm=$_POST['lastname'];
                        $em=$_POST['email'];
                        $aadh=$_POST['aadhar'];
                        $desig=$_POST['desig'];
                        $usr=$_POST['user'];
                        $pass=$_POST['pass'];
                        
                            if($usr!=NULL && $fnm!=NULL && $lnm!=NULL && $pass!=NULL)
                            {
                               
                                $sq="insert into employee values('','$fnm','$lnm','$em','$aadh','$desig','$usr','$pass',0)";                  mysql_query($sq);
                                header("Location:employeedetail.php");
                                echo "<h2 style='color:green;' align='center'>Employee Added Successfully</h2>";           
                             }
                        }
                         
     
                    
                    
                    ?>