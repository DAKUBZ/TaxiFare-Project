<?php require 'dbconnection.php' ;
 require 'checklogin.php';
 check_login();
 
 $id = $_SESSION['id'];
 

 
 
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <title>Map Directions using Mapbox</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- Mapbox -->
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
	
	<!-------------Geolocation------------------->


    <!-- GeoCoder -->
    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />

    <!-- Direction API -->
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css">
    <!-- Mapbox -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</head>
 

<style>
 .modal-content{
    border-radius: 25px;
    border: 2px solid black;
    padding: 20px; 
    margin-left: 5%;
    margin-right: 5%;
    align-self: center;
    align-content: center;
    align-items: center;
    margin-top: 100px;
    
}

</style>

</head>
			
<body  >

 <?php
	  
 if(isset($_POST['submit'])){

	
	$cash = $_POST['cash'];
	
	
	   $sqls = "Select * from driverdetails where DriverID = $id";
	    $result = $conn->query($sqls);
	   
         if($result->num_rows > 0){ 
                 
			while($rows = $result->fetch_assoc()){	 
	          
			   
			   	$sql = "insert into location (driver_id,price) 
				values ('".$id."','".$cash."')";
	            
				$sql1 = "insert into passenger (cash) 
				values ('".$cash."')";
					
					$result2 = mysqli_query($conn, $sql1);
					$result = mysqli_query($conn, $sql);
					
					if($result &&  $result2)
					{
						    header( "Location: pay.php?id={$id}" );
						 
					}
					else
					{
						echo "Unable to save post";
					}
			   
			   print_r($id);
			   
			   
			}
			
	   }
							   
}




?>  


    <div class="position-relative h-100 w-100">
        <div id='map'></div>
        <div class="position-absolute top-0 end-0 ">
            <button class="btn btn-lg btn-light bg-gradient bg-light border me-2 mt-3" id="get-direction"><i class="fa fa-directions"></i> Direction</button>
            <button class="btn btn-lg btn-light bg-gradient bg-light border me-2 mt-3 d-none" id="end-direction"><i class="fa fa-times"></i> End Direction</button>	
        </div>
	
	<div class ="boxedLayout">
	<div class="modal fade"  id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-body">
			<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
			  <div class="dropdowns" style="text-align:center ;font-weight:bold">
  
                   <?php
						
								if(!empty($id))
								{	
						            echo '<p id="driverName" class="dropbtn">'; echo  $_SESSION['name']." ".$_SESSION['SName'];echo '</button>';
								
								}else{
							       
							     echo ( ' <a href = "index,php">Logout</a> '); 	   		
								}
							
						?>
						
    <div class="dropdown-content" >
	   <p id="price" name ="totprice" style="margin-bottom:1%"></p>
	    <p id = "distance"></p>
		<p>Do you want to proceed</p>
			 
    </div>
	<form name ="form" method= "post" >
		<input type="text" id="cash" placeholder="Cash" name="cash" required> <br><br>
	        <button type= "submit" name="submit" class = "btn btn-primary"><a style="color:white ;text-decoration:none">Yes</a></button>
	        <button class = "btn btn-danger"><a style="color:white ;text-decoration:none" href="map.php?driverid = <?php echo  $id; ?>">No</a></button>
        </form>

  </div> 
		  </div>
    </div>
  </div>
</div>
    </div>
	
	</div>
</body>
<script type='text/javascript' src="map.js"></script>
</html>