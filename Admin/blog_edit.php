<?php

include "dbcon.php";
$id = $_GET['id'];
$data = "select * from blog_list where id = $id";
$result = mysqli_query($con, $data);

$result2 = mysqli_fetch_array($result);




?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <div class="modal-body">

          <form method="post" action="blog_update.php" enctype="multipart/form-data">

               <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $result2['id'] ?>"><br>
                    <label>Title:</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $result2['title'] ?>">
               </div>
               <div class="form-group">
                    <label>Discription:</label>
                    <textarea type="text" name="discription" class="form-control" ><?php echo $result2['discription'] ?></textarea>
               </div>
               


               <button class="btn btn-info" value="submit">Update Blog</button>

          </form>
     </div>
</body>

</html>