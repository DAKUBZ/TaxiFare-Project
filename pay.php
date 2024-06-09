
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

  Welcome...<span id = "names" >Hello</span>

    <h1>Procces Payments</h1>
      <p>Enter cash received and how many passengers are paying to process the payment, and calculate the change</p>
      <hr>
    <form  name="form" method="POST" action="savetransaction.php">



      <label for="uname"><b>Cash Received</b></label>
      <input type="text" id="cash" placeholder="Cash" name="cash" required>

      <label for="psw"><b>Passengers</b></label>
      <input type="text" id="passengers" placeholder="Numer of Passengers paying" name="passengers" required>

            <button type="submit" name="payment" ><a style ="text-decoration:none">Process Payment</a></button>


  </form>
  
  <script>
    
	     let name = localStorage.getItem("textvalue");

         document.getElementById('prize').value = name;
		  document.getElementById("names").innerHTML = name;
  </script>
</body>
</html>
