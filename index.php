<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylesheet.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Welcome</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">TaxiFare Calculator</h1>
  <p class="w3-xlarge">By Martin Kubayi(ALX)</p>
  <button  onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started!!</button>
  <button  onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Login</button>
</header>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>About This  App</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!--img src="img_avatar2.png" alt="Avatar" class="avatar"-->
    </div>

    <div class="container">
    <h1>Login</h1>
      <p>Enter email and password to Login</p>
      <hr>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="submit" onclick="functionName();">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!----------signup----->
<div id="id02" class="modal">  
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  
	  <form class="modal-content" action="signup.php" name= "form" method="post" onsubmit="return validateForm();">
			<div class="container">
			  <h1>Sign Up</h1>
			  <p>Please fill in this form to create an account.</p>
			  <hr>

				
			  <label for="name"><b>Name</b></label>
			  <input type="text" placeholder="Enter Driver Name" name="name" required>

			  <label for="surname"><b>Surname</b></label>
			  <input type="text" placeholder="Enter Driver Surname" name="surname" required>

			  <label for="cellphone"><b>Cellphone</b></label>
			  <div> <input type="text" placeholder="Enter Driver Cellphone" id = "number" name="cellphone" minlenght="10" maxlength="10"
			  required><span id="cerror"></span></div>

			  <label for="address"><b>Address</b></label>
			  <input type="text" placeholder="Enter Address" id="address" name="address" required>

			  <label for="email"><b>Email</b></label>
			  <input type="text" placeholder="Enter Email" name="email" required>

			  <label for="psw"><b>Password</b></label>
			  <input type="password" value="" id="password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"   title="Must contain at least 1 number and 1 uppercase and lowercase letter, and at least 8 or more characters"required>

			  <label for="psw-repeat"><b>Repeat Password</b></label>
			  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
			  
			  <label>
				<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			  </label>

			  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
			 
			  <div class="clearfix">
				<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
				<button type="submit" class="signupbtn" onclick="validateform()">Sign Up</button>
			  </div>
			</div>
	  </form>
	  
	                        <div id="message">
							  <h3>Password must contain the following:</h3>
							  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
							  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
							  <p id="number" class="invalid">A <b>number</b></p>
							  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
							</div>
</div>

<script>

var myInput =document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}


function validateForm() {
		//validate  form
		
	
    var cellrror=document.getElementById("cerror");
	var cellno=document.forms["form"]["cellphone"].value;
	if(cellno=="")
	{

	   cerror.innerHTML="<span style='color:red;''>"+" field should not be empty *</span>";
	  return false;

	}
	if(cellno.substring(0,3)!='071'&& cellno.substring(0,3)!='072'&&
	   cellno.substring(0,3)!='073'&& cellno.substring(0,3)!='074'&&
	   cellno.substring(0,3)!='076'&& cellno.substring(0,3)!='060'&&
	   cellno.substring(0,3)!='078'&&
	   cellno.substring(0,3)!='061'&& cellno.substring(0,3)!='062'&&
	   cellno.substring(0,3)!='063'&& cellno.substring(0,3)!='064'&&
	   cellno.substring(0,3)!='065'&& cellno.substring(0,3)!='066'&&
	   cellno.substring(0,3)!='067'&& cellno.substring(0,3)!='068'&&
	   cellno.substring(0,3)!='081'&& cellno.substring(0,3)!='082'&&
	   cellno.substring(0,3)!='083'&& cellno.substring(0,3)!='084')
	   {

	 cerror.innerHTML="<span style='color:red;''>"+" Surfix of phone number invalid. *</span>"
		return false;
	   
	}
	else if(cellno.substring(0,1)!="0")
	{


	cerror.innerHTML="<span style='color:red;''>"+" cellno number must start with 0.*</span>";
	return false;
	}
	else
	if(!cellno.match(/^[0-9]+$/))
	{

	cerror.innerHTML="<span style='color:red;''>"+"field should be filled with number only.*</span>";
	return false;   
	}
	else
	if(cellno.toString().length!=10)  //length validation
	{
	cerror.innerHTML="<span style='color:red;''>"+"field should be 10 characters.*</span>";    

	return false;   
	}
	else
	{
	cerror.innerHTML="";

	}
        
      
    }*/
</script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
	  //display = "none" hides the popup modal
    modal.style.display = "none";
  }
  
  var name = 
  
}
</script>



</body>
</html>
