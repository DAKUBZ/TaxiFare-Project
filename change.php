

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


 <?php include 'nav.php'; 
  ?>
 
 

<div class="boxedLayout">

        

	
	 <?php 
	 
	 
	     if(isset($_GET['payid'])){
            $ids = $_GET['payid'];
	      
 		  $sql = "Select * from payments where locationId = '$ids'  ";
		   $result = mysqli_query($conn,$sql);
		       
		   if( mysqli_num_rows($result) >0 ) {

               while( $row=mysqli_fetch_assoc($result)) {
                 
			    
				  $prize = $row['changeAmt'];
              		 
			
      					
	
	 ?>
	
      <p style = "text-align:center">Their change is R <?php echo $prize ;?> </p> 
      <hr>
	  
		 <?php }} }?>


        
      <button type="submit" style = "background-color: green" > <a style ="text-decoration:none ; color:white ;font-weight: bold" href ="pay.php" >Count Again </a></button>
	    <button type="submit" style = "background-color: red"><a style ="text-decoration:none ; color:white ;font-weight:bold" href ="goodbye.php" >Finish </a></button>
      
    









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
