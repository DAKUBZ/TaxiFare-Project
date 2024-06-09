<?php require 'dbconnection.php' ;
      require 'checklogin.php';
      check_login();
 
     $id = $_SESSION['id'];
	 
 

 
 
?>

<div class="navbar">
  <a href="home.php" style="background-color: #04AA6D;">Home</a>
  <a href="payment.php">Payment History</a>
  
  <?php
                             
						
								if(!empty($id))
								{	
						            echo '<a>'; echo  $_SESSION['name']." ".$_SESSION['SName']; echo '</a>';
								
								}
							
						?>
  <div class="dropdown">
  
 <button href="" id ="driverName" class="dropbtn" >Menu</button>
						
    <div class="dropdown-content">
      <a onclick="document.getElementById('id02').style.display='block'">My Account</a>
       <?php
                             
						
								if(!empty($id))
								{	
						           echo ' <a href="logout.php">Logout</a>';
								
								}
							
						?>
	 
    </div>

  </div> 
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="update.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!--img src="img_avatar2.png" alt="Avatar" class="avatar"-->
    </div>

<!-------update drivers details----->
     <?php 
	       $sql = "Select * from driverdetails where DriverID = $id";
		   $result = mysqli_query($conn,$sql);
		   
		   if( mysqli_num_rows($result) >0 ) {
               while( $row=mysqli_fetch_assoc($result))   
	     
	 {?>

    <div class="container">
    <h1>Driver Details</h1>
      <p>Showing Driver details, you can update the cellphone number</p>
      <hr>
          
				  <label for="uname"><b>Name</b></label>
				  <input type="text" id="name" placeholder="Name" name="name" required value = "<?php echo $row["FName"]; ?>" disabled>>

				  <label for="psw"><b>Cellphone</b></label>
				  <input type="text" id="cellphone" placeholder="Cellphone" name="cellphone" minlenght="10" maxlength="10"  value = "<?php echo $row["Cellphone"]; ?>" required>
					
				  <label for="psw"><b>Email</b></label>
				  <input type="text" id="email" placeholder="Email" name="email"  value = "<?php echo $row["Email"]; ?>"required >>
				 
		 
      <button type="submit">Update</button>
	  
      
    </div>
	
		   <?php } } ?>  <!-----close while loop----->
 
 <!---Delete button-->
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="deleteAccount();" class="cancelbtn">Delete Account</button>
    </div>
  </form>
</div>


<script>



function deleteAccount(){

  createCookie("delete", "YES", "10");
  window.location = 'delete.php';
  //window.open("delete.php");
   // Function to create the cookie
   function createCookie(name, value, days) {
        var expires;
          
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
        }
        else {
            expires = "";
        }
          
        document.cookie = escape(name) + "=" + 
            escape(value) + expires + "; path=/";
            //alert('Cookie time')
    }
}

</script>