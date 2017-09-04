<?php 
error_reporting(0);



  
             if(isset($_POST['submit']))
                        {
                      
                        $ctime=$_POST['time'];   
                      
                        $sql2=mysql_query("select * from c_order  ");
                           while($row2=mysql_fetch_array($sql2)){
                                         mysql_query("insert into time values('$ctime','$row2[8]')");
                        echo "time submitted in time table";
                                    }}
                    ?>