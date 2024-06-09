
<?php
include 'dbconnection.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid']; //accessing the delete from the delete button

  $sql = "DELETE FROM `payments` where id ='$id'";
  $result = mysqli_query($conn, $sql);

  if($result){

    header('location : payment.php');

  }else{
      echo "Failed to delete";
  }
}
