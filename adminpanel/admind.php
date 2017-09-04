<?php
   error_reporting(0);
  include("connection.php");

  
             if(isset($_POST['submit']))
                        {
                        
                        $usr=$_POST['usr'];
                        $fnm=$_POST['firstname'];
                        $lnm=$_POST['lastname'];
                        $em=$_POST['email'];
                        $phn=$_POST['phn'];
                        $add=$_POST['add'];
                        $city=$_POST['city'];
                        $pin=$_POST['pin'];
                        
                            if($usr!=NULL && $fnm!=NULL && $lnm!=NULL && $phn!=NULL)
                            {
                                $sq="insert into admindetail values('','$usr','$fnm','$lnm','$em','$phn','$add','$city','$pin')";                  mysql_query($sq);
                                header("Location:admindetail.php");
                                echo "<h2 style='color:green;' align='center'>Admin Detail Added Successfully</h2>";           
                                
                                
                            }
                        }
                         
     
                    
                    
                    ?>