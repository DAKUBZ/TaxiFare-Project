<?php
 
	

$cellphone = $_POST["cellphone"];
$email = $_POST["email"];



updateNow($cellphone ,$email);

function updateNow($cellphone ,$email){
    //write to mysql
   
  
    include 'dbconnection.php';
    $id = $_SESSION["id"];
    $sql = "UPDATE driverdetails SET Cellphone='".$cellphone."' , Email='".$email."' WHERE DriverID='".$id."'";

    if ($conn->query($sql) === TRUE) {
     
        echo "<html><body><script>alert('Data updated sucessfully');</script></body></html>";
        echo "<html><body><script>window.location = 'home.php';</script></body></html>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}



?>