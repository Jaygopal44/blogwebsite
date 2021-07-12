<?php

include "dbcon.php";
$id=$_GET['id'];
echo$id;

$data ="delete from blog_list where id ='$id'";

mysqli_query($con,$data);
header('location:AddBlog.php');


?>