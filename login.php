<?php

 require 'dbconnection.php';
 
 

	
	$email = $_POST["username"];
	$password = $_POST["psw"];
	
    $sql = "SELECT * FROM driverdetails WHERE Email='".$email ."' AND Password='".$password."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		if( $password == $row['Password']){
			//assign session variables according to the rows extracted from db
			$_SESSION['login']= $_POST["username"];
			$_SESSION['id']= $row['DriverID'];
			$_SESSION['email']=$row['Email'];
			$_SESSION['name']=$row['FName'];
			$_SESSION['SName']=$row['LName'];
		    $_SESSION['cell']=$row['Cellphone'];
			
          
			
        echo "<html><body><script>window.location = 'home.php';</script></body></html>";
		
    }else {
        echo "Incorrrect password or username";
    } 
    }
    $conn->close();
	
 }
 






?>