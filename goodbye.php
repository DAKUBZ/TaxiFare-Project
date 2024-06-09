
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
 


<div class="boxedLayout"  style = "text-align:center">
    <h1>Thank you for using TaxiFare calculator</h1>
    <p>We hope you enjoyed</p>
    <hr>
    <p>Travel safe </p>

    <button type = "submit" ><a style ="text-decoration:none ; color:white ;font-weight:bold" href = "home.php">OK</a></button>

</div>










</body>
</html>
