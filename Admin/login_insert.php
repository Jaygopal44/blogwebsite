<?php 
  session_start();
  include "dbcon.php";

  $email = $_POST['email'];
  $password = $_POST['password'];

  $data = "select * from admin where email = '$email' && password = '$password'";
  $result = mysqli_query($con,$data);
  $total = mysqli_num_rows($result);
  $user = mysqli_fetch_array($result);

   if($total == 1){
     $_SESSION['message']="login successfull";
     $_SESSION['data']=$user['name'];
     header('location:dashboard.php');
  }
  else{
     $_SESSION['message']="login failed";
     header('location:index.php');
  }
?>