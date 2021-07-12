<?php

include "dbcon.php";

$id=$_POST['id'];
$name=$_POST['title'];
$discription=$_POST['discription'];
$image=$_POST['image'];


// echo $a,$b,$b;

$data = "update blog_list set title ='$name', discription ='$discription', image ='$image' where id = $id";

$result=mysqli_query($con,$data);


if($result){
     header('location:AddBlog.php');

}
else{
     alert('not updated');
}

?>