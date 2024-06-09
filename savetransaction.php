<?php

if(isset($_POST['payment'])){


  include 'dbconnection.php';


  require 'checklogin.php';
  check_login();

  $cash = $_POST["cash"];
  $passengers = $_POST["passengers"];
  $date = date("Y/m/d");
  $time = date("h:i:sa");
  $id = $_SESSION['id'];

  $sqls = "Select * from location where driver_id = $id ";
  $result = $conn->query($sqls);

  if($result->num_rows > 0){

    while($rows = $result->fetch_assoc()){

      $price = $rows['price'];
      $locid = $rows['id'];
      $change = $cash - ($price*$passengers);

      // Use prepared statements to prevent SQL injection
      // $stmt = $conn->prepare("..."); (explained above)

      $sql = "INSERT INTO payments(locationId ,Date, Time,Cash,Passengers, Fare ,changeAmt)
               VALUES ('".$locid ."','".$date ."','" .$time ."','" .$cash ."','".$passengers ."','".$price ."','".$change ."')";

      if ($conn->query($sql) === TRUE) {
          echo "<html><body><script> alert('Transaction was saved successfully view all transactions in Payment History');</script></body></html>";
          header("location:change.php?payid= $locid ");
      } else {
          echo "Error: An error occurred while processing the payment. Please try again."; // Generic error message
          // Consider logging the specific error for debugging
      }

    }
  }

  $conn->close();

}
