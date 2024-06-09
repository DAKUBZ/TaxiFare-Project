
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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


</style>
<link rel="stylesheet" href="stylesheet.css">.
</head>
<body>


 <?php include 'nav.php'; ?>

 

<?php
	  
 if(isset($_POST['submit'])){

	$registration = $_POST['num_plate'];
	$car = $_POST['car'];
	$model = $_POST['model'];
	
	   $sqls = "Select * from driverdetails where DriverID = $id";
	    $result = $conn->query($sqls);
	   

         if($result->num_rows > 0){

			while($rows = $result->fetch_assoc()){	 
	          
			   
			   	$sql = "insert into taxi (taxiRegistration,driver_id, car_name, model ) 
				values ('".$registration."','".$id."' ,'".$car."', '".$model."')";
	
					$result = mysqli_query($conn, $sql);
					
					if($result == True)
					{
						    header( "Location: passenger.php?id={$id}" );
						 
					}
					else
					{
						echo "Unable to save post";
					}
			   
			   
			}
			
	   }
							   
}


?>        



<div class="boxedLayout">
    <h1>Welcome To TaxiFare Calculator</h1>
    <p>Please set the fare price below And press start to Begin collecting fare</p>
    <hr>
    <form method = "post"    >
    <label for="email"><b>Number Plate</b></label>
    <input type="text" id="num_plate" placeholder="Enter number plate of the car" name="num_plate" required>
	
	   <label for="email"><b>Vehicle Name(Toyota , Nissan)</b></label>
		<select class= "cars" name="car" id="car" required style="width:100% ;padding:10px;  margin-top:1%" >
		  <option value="">Select your car name</option>
		  <option value="Toyota">Toyota</option>
		  <option value="Nissan">Nissan</option>
		</select>  
		
		<label for="email"><b>Model(Quantum ,Impendulo)</b></label>
		
		<select class= "cars" name="model" id="model" required style="width:100% ;padding:10px;  margin-top:1%" onclick = "update()";>
		  <option value="">Select your car model</option>
		  <option value="Quantum">Quantum</option>
		  <option value="Impendulo">Impendulo</option>
		</select>  
		<input type="hidden" id="value">
	
		
    <button type="submit" name ="submit" onclick = "update()" href> Save</button>
	
	 <button type="cancel" class="cancel"  style ="background-color:red">Cancel</button>
     
   </form>

</div>


<script>

function update(){
                var select = document.getElementById('model');
				var option = select.options[select.selectedIndex];
				 var names = document.getElementById('value').value = option.value;
				  localStorage.setItem("textvalue", names);
                
				
           return false;
            
}
</script>



<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
       modal.style.display = "none";
        modal2.style.display = "none";
    }
}
</script>



<script>

  function calculate(){
    var prize = document.getElementById('prize').value;
    var cash = document.getElementById('cash').value;
    var passengers = document.getElementById('passengers').value;

    var change = cash - (prize*passengers);
    var tot = prize * passengers;

    //alert('Your Change is R'+change);
    let text = "Your Change is R"+change;
    if (confirm(text) == true) {
      //window.location = 'savetransaction.php';
      //alert('Transaction is being saved');
      //save to database
      createCookie("cash", tot, "10");
      createCookie("passengers", passengers, "10");
      createCookie("curentFare", prize, "10");

      document.getElementById('prize').value = "";
       document.getElementById('cash').value = "";
     document.getElementById('passengers').value = "";

      window.open("savetransaction.php");
    } else {
      //save to database
      //alert('Transaction was not saved');
      
    }

  </script>

<script>
    function functionName() {
        //window.open("home.php");
        //window.location = 'index.php';
        var prize = document.getElementById('prize').value;
        if(prize != "" && prize != null && prize != "0"){
          var modal = document.getElementById('id01');
          modal.style.display='block';
        }else{
          alert('Enter a correct prize to Start calculator Zero is not allowed');
        }

        //document.getElementById("driverName").textContent = "Mzakes money";
    }
</script>

<?php


		


function calculator(){

  echo "

  <script>

  var cash = document.getElementById('cash').value;
  var passengers = document.getElementById('passengers').value;

  var change = cash - (prize*passengers);

  alert('Your Change is R'+change);

  </script>
  
  ";

  //save to database

}



?>

</body>
</html>
