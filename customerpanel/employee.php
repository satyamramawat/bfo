
<?php
error_reporting(0);
$order_id = $_POST['orid'];
$food_category = $_POST['foodc'];
$source = $_POST['foods'];



$duration = $_POST['duration'];



$Capacity = $_POST['Capacity'];
echo $order_id;
echo $food_category;
echo $source;
echo $duration;
echo $Capacity;
$mysqli = new mysqli("127.0.0.1", "root", "", "project1");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "root", "", "project1", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$iquery=$mysqli->query("INSERT INTO `customer`(`order_id`, `food_category`, `source`, `duration`, `Capacity`) VALUES ('$order_id','$food_category','$source','$duration','$Capacity')");
$fquery=$mysqli->query("Select * from customer");

echo '
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Styled JavaScript Countdown Clock</title>
    
    
    
    
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

    
    
    
  </body>
</html>';


while($row = $fquery->fetch_assoc())
{
echo "<br>------------------------------------------------------<br>";
echo "order_id :{$row['order_id']}  <br> ".
         "Food Category : {$row['food_category']} <br> ".
         "Source : {$row['source']} <br> ".
"Duration : {$row['duration']} <br> ".
"Capacity : {$row['Capacity']} <br> ".
     "<br>-------------------------------------------------------<br>";
}

sql_close($conn);
?>
