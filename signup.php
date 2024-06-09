<?php



//code to enter register users


	
	$name = $_POST["name"];
	$surname = $_POST["surname"];
	$cellphone = $_POST["cellphone"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$password = $_POST["psw"];
	$password2 = $_POST["psw-repeat"];

//check if username is taken first


	if($password == $password2){
		signUp($name,$surname,$cellphone,$address,$email,$password);
	}else{
		echo "password didn't match";
  }
 


function signUp($name,$surname,$cellphone,$address,$email,$password2){

    include 'dbconnection.php';
	
    $sql = "INSERT INTO driverdetails (Email, Password,FName,LName,Cellphone,Address)
    VALUES ('".$email ."','" .$password2 ."','" .$name ."','".$surname ."','".$cellphone ."','".$address ."')";

    if ($conn->query($sql) === TRUE) {
        
		echo "<html><body><script> alert('You are registered, please login');</script></body></html>";
        echo "<html><body><script>window.location = 'index.php';</script></body></html>";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}

?>