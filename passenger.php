
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
.flex-container {
  display: flex;
  margin:50px;
 
}

.flex-container > div {

  margin: 10px;
  padding: 20px;
  font-size: 30px;
  width:100%;
  align-items:center;
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
<body onload = "update()"; >


 <?php include 'nav.php';


 ?>



 <header  class="hero">
        <div class="container">
	 Hello ..<span id = "taxi" >No car name found</span> <br>
	  Welcome...<span id = "names" >Hello</span>
		      
    </header>


   <h> <?php echo $id ?></h>
<div class="flex-container">
  <div> <img id ="image" src="assets/img/quantum.png" style="width: 500px  ;"> </div>
  <div  class = "boxedLayout">              
  <h1 style="font-size: 50px; padding:30px; align-content:center">Do you want to begin ?</h1>
     <button class="btn btn-light btn-sm center-block" type="submit" name ="submit" style="background: #21de21; align-content:center">
     <a href = "map.php?driverid = <?php echo $id; ?>" style= "text-decoration:none ; color:white; font-weight:bold">Yes<a/></button>
</div>
 
</div>



<script>

let names = localStorage.getItem("textvalue");

document.getElementById('names').innerHTML = names;

//imagesavealpha
 var images = ["assets/img/impendulo.jpg" , "assets/img/quantum.png"];

function update(){
if( names == "Impendulo"){
	 document.getElementById('taxi').innerHTML = names;
	 document.getElementById('image').src = images[0];
  }
}

</script>

  </body>
  </html>