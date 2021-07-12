<?php
include "dbcon.php";
echo $id=$_POST['id'];
$filename=$_FILES['image']['name'];
$tmpname=$_FILES['image']['tmp_name'];

echo $file = "upload/".$filename;
move_uploaded_file($tmpname,$file);
$data="update blog_list set image='$file' where id =$id";
$result=mysqli_query($con,$data);


header('location:AddBlog.php');



?>