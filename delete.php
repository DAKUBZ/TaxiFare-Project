<?php
 require 'dbconnection.php' ;
      require 'checklogin.php';
      check_login();
     $id =$_SESSION['id'];


    Delete($id);




function Delete($id){
    //write to mysql
   include 'dbconnection.php';
 
    $email =$_SESSION['email'];
	$id = $_SESSION['id'];
 
    $sql = "DELETE FROM driverdetails WHERE DriverID='".$id."'";

    if ($conn->query($sql) === TRUE) {
        
        echo "<html><body><script>alert('Account Deleted!!');</script></body></html>";
        echo "<html><body><script>window.location = 'index.php';</script></body></html>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
