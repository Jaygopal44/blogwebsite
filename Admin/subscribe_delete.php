<?php

include "dbcon.php";
$id=$_GET['id'];
echo $id;

$data ="delete from subscribe where id ='$id'";

mysqli_query($con,$data);
header('location:subscribe.php');


?>