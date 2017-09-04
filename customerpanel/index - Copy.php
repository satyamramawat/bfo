<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Changa" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Full Screen Background Video</title>
  <meta name="description" content="Full screen background video demo">
  <meta name="author" description="Call Me Nick">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<div class="content">
    
  <h1 class="content__heading"><b>Welcome To BFO</b></h1>
    
    <form name="abc" action="shrinivas2.php" method="post">
        
        <hr> <h2>For Order</h2>
        <hr><label for="foodc" align="right"><font size="5">Food Category :</font></label>
        
        <select name="foodc" placeholder="fcx" required>
<!--            <option value="select" selected="selected"><i>Select</i></option>-->
  <option value="Snacks">Snacks</option>
  <option value="CookedFood">Cooked Food</option>
  <option value="FoodItems" >Food Items</option>
  <option value="More">More</option>
</select><br><br>

        
        <label for="source"><font size="5">Food Source :</font></label>
        <select name="foods" placeholder="fs" required>
<!--            <option value="select" selected="selected">select</option>-->
  <option value="Hotel">Hotel</option>
  <option value="Functions">Functions</option>
  <option value="Home">Home</option>
  </select><br><br>
  
        
        <label for="duration"><font size="5">Food Duration:</font></label>
        <select name="duration" placeholder="fd" required>
<!--            <option value="select" selected="selected">select</option>-->
  <option value="  <?php date_default_timezone_set("Asia/calcutta");
                 echo  date("03:00:00");?>">3hours</option>
            
          
            
  <option value="<?php date_default_timezone_set("Asia/calcutta");
                 echo  date("06:00:00");?>">6hours</option>
  
</select><br><br>
        
        
        
        <label for="Capacity"><font size="5">Capacity :</font></label>
        <select name="Capacity" placeholder="fo" required>
<!--            <option value="select" selected="selected">select</option>-->
  <option value="People(5-10)">People(5-10)</option>
  <option value="People(10-15)">People(10-15)</option>
  <option value="People(15-20)">People(15-20)</option>
  <option value="More">More</option>
</select><br><br>
        
        <br><label >Time: </label>
        
            <input class="form-control"  value=" " name="time" type="text" >
        <br>
        
        
        <button type="submit" name="go"><font size="5">Go</font>
        
        </button>
        
        <br><br><hr>
        <button type="submit" name="logout"><font size="5">Logout</font>
  
        </button>
        <br><br>
        <a href="timy.php"><font size="5" >View your ORDERS</font></a><br>
        <button type="reset" class="btn btn-default">Reset Button</button>
    </form>
   
  
</div><!-- /content -->
    

<video id="my-video" class="video" muted loop>
  <source src="media/demo.mp4" type="video/mp4">
  <source src="media/demo.ogv" type="video/ogg">
  <source src="media/demo.webm" type="video/webm">
</video><!-- /video -->

<script>
(function() {
  /**
   * Video element
   * @type {HTMLElement}
   */
  var video = document.getElementById("my-video");

  /**
   * Check if video can play, and play it
   */
  video.addEventListener( "canplay", function() {
    video.play();
  });
})();
</script>

</body>
</html>