<?php

include "dbcon.php";
$name=$_POST['name']; 
$password=$_POST['password']; 
$discription=$_POST['discription'];
$email=$_POST['email']; 
$filename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
$file="upload/".$filename;
// $date_time=$_POST['date_time']; 
move_uploaded_file($tempname,$file);
$data="insert into admin(name,password,discription,email,image) value('$name','$password','$discription','$email','$file')";
    mysqli_query($con,$data);
    header('location:admin.php')
?>