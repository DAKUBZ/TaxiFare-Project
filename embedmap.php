<?php
   
require 'dbconnection.php';

if(isset($_POST['submit'])){
       
       $longitude = $_POST['longitude'];
       $latitude = $_POST['latitude'];
     
          
$sql = "INSERT INTO location ( longitude, latitude)
      VALUES ('" .$longitude ."','".$latitude ."')";
       
$result = mysqli_query($conn, $sql);

if($result == True)
{
    echo "<html><body><script> alert('Record saved');</script></body></html>";
 
}
else
{
echo " record not saved ";
}

   };
   
   
   
 
?>


<!DOCTYPE html>
<html  lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
   <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.12.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.12.0/mapbox-gl.css' rel='stylesheet' />
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v1.0.0/mapbox-gl-directions.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v1.0.0/mapbox-gl-directions.css' rel='stylesheet' />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    

    </head>

<body >


    
    

<form action="" id="form" method ="post" >
   <label >Address</label>
   <input type="text" name="location" id="location" value="" placeholder="Enter your address">
   <input type="text" name="location" id="location" value="" placeholder="Enter your address">
   <input type="text" name="location" id="location" value="" placeholder="Enter your address">
   <button type="submit" class="btn btn-primary" >submit</button>  
</form>
<div id="formAddress" style="margin: 20px;"></div>

<div id="formAddresss"></div>


 <div id='map' style='width: 400px; height: 300px;'></div>





<script>
    
mapboxgl.accessToken = 'pk.eyJ1IjoibmhsYW11bG8iLCJhIjoiY2w0NDYycXUxMDBiMjNjbzJkYThjcGI1ZiJ9.TauQtVd-W7neoAz_1kbLeA';

var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v8'
});

	map.addControl(new mapboxgl.Directions());
	var directions = new mapboxgl.Directions({
	unit: 'metric', // Use the metric system to display distances.
	profile: 'Driving', // Set the initial profile to walking.
	container: 'directions', // Specify an element thats not the map container.
	proximity: [-79.45, 43.65] // Give search results closer to these coordinates higher priority.
	});

map.on('load', function() {
directions.setOrigin('Toronto, Ontario'); // On load, set the origin to "Toronto, Ontario".
directions.setDestination('Montreal, Quebec'); // On load, set the destination to "Montreal, Quebec".
});

directions.on('route', function(e) {
console.log(e.route); // Logs the current route shown in the interface.
});
	  
	  
	  //save result to database using AJAX
	 
</script>


</body>
</html>