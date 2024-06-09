
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylesheet.css">

  <link rel="stylesheet" href = "https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src ="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

 .text{
	 text-align:center;
 }
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.boxedLayout{
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

/*taqble css*/
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}


</style>
</head>
<body>

  <?php include 'nav.php' ; ?>


<div id="viewLayout" class="boxedLayout" style = "margin-bottom :10px">
    <h1 class = "text">Payments History</h1>
    <p class = "text">Showing All your transaction History</p>
    <hr>
    <label  for="email" class = "text" ><b>Total : R</b><b id="total">Total : R500</b></label>
    
   <div class = "container" style = "padding:3%">
   <div class="unit w-2-3"   >
  <div class="hero-callout">
    <table id="myTable" class="display" style="width:100%">
      <thead>
        <tr>
         <th>PaymentID</th>
        <th>Date</th>
        <th>Time</th>
        <th>Cash Given</th>
        <th>Passengers</th>
        <th>CurrentFare</th>
		<th>Change</th>
		<th>Operation</th>
		
        </tr>
      </thead>
      <tbody>
	     <tr>
		<?php 
		   $sql = "SELECT * FROM payments";
           $result = $conn->query($sql);

			if ($result->num_rows > 0) {
				$tot = 0;
			// output data of each row
			while($row = $result->fetch_assoc()) {
				
				
				$date =  $row["Date"];
				$time =  $row["Time"];
				$payID =  $row["PaymentID"];
				$cash =  $row["Cash"];
				$pass =  $row["Passengers"];
				$fare =  $row["Fare"];
				$change =  $row["changeAmt"];

				$tot = $tot + $cash;
				

                   
				echo "
					<script>
					document.getElementById('total').textContent = '$tot';
					</script>
					";
          ?>
         <td> <?php echo $payID ;?></td >
		 <td> <?php echo $date ;?></td >
		 <td> <?php echo $time ;?></td >
		 <td> <?php echo $cash ;?></td >
		 <td> <?php echo $pass ;?></td >
		 <td> <?php echo $fare ;?></td >
		  <td> <?php echo $change ;?></td >
		  <td> <button class ="btn btn-primary" style ="height:30px ; padding:20px">
		  <a href = "deletepay.php?deleteid = <?php echo $payID ;?>">Delete</a></button></td >
		 
		 </tr>
								  
    <?php }
	} ?>
	</tbody>
    </table>

</div>



</body>
</html>
