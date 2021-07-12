<?php

include "dbcon.php";
$name=$_POST['title']; 
$discription=$_POST['discription'];
$filename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
$file="upload/".$filename;
// $date_time=$_POST['date_time']; 
move_uploaded_file($tempname,$file);
$data="insert into blog_list(title,discription,image) value('$name','$discription','$file')";
    mysqli_query($con,$data);
    header('location:Addblog.php')
?>