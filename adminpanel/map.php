<?php session_start();
error_reporting(0);
if($_SESSION['adminlogin']!="true")
{
	header("location:../admin.php"); 
}

include("connection.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Directions service</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>      
  </head>
  <body>
    <div id="floating-panel">
    <b>Start: </b>
    <select id="start">
      <option value= "Bengaluru, IN">Bangalore</option>
      <option value="Jodhpur, IN">Jodhpur</option>
      <option value="12.9357242,77.605948">Christ University</option>
      <option value="12.9773348,77.5667917">Majestic</option>
    </select>
    <b>End: </b>
    <select id="end">
      <option value="delhi, IN">delhi</option>
      <option value="12.9357242,77.605948">Christ University</option>
      <option value="12.9773348,77.5667917">Majestic</option>
    </select>
    </div>
    <div id="map"></div>
      
    <script>
      function initMap() 
        {
        var map = new google.maps.Map(document.getElementById('map'), 
                 {
                 center: {lat: 12.9287527, lng: 77.6032096},
                zoom: 7
                  });
          
        var infoWindow = new google.maps.InfoWindow({map: map});

           if (navigator.geolocation) 
           {
             navigator.geolocation.getCurrentPosition(function(position) 
              {
                var pos = {lat: position.coords.latitude,lng: position.coords.longitude};
                infoWindow.setPosition(pos);
                infoWindow.setContent('Location found.');
                map.setCenter(pos);
               }, function() { handleLocationError(true, infoWindow, map.getCenter());});
        } 
            else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Google Maps service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }  
          
          
          ///
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        
      
        directionsDisplay.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
          if (status === google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6VK1PdOxbiCEnoHQx87bFy9sBt0PSp5s&callback=initMap&region=IN">
    </script>
      
  </body>
</html>