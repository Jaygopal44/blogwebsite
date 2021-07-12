<?php

include "Admin/dbcon.php";
$name=$_POST['name']; 
$email=$_POST['email'];

// $date_time=$_POST['date_time']; 

$data="insert into subscribe(name,email) value('$name','$email')";
    mysqli_query($con,$data);
    header('location:index.php')
?>