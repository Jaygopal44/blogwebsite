<?php
include "header.php";
include "sidebar.php";

include "Admin/dbcon.php";
$id = $_GET['id'];
$data = "select * from blog_list  where id = $id";
$result = mysqli_query($con, $data);

$result2 = mysqli_fetch_array($result);

?>

<!-- blog  -->
<div class="main-wrapper">

     <article class="blog-post px-3 py-5 p-md-5">
          <div class="container">
               <header class="blog-post-header">
                    <h2 class="title mb-2"><?php echo $result2['title']?></h2>
                    <div class="meta mb-3"><span class="date"><?php echo $result2['date_time']?></span><span class="time"></span><span class="comment"><a href="#"></a></span></div>
               </header>

               <div class="blog-post-body">
                    <figure class="blog-banner">
                         <a href=""><img class="img-fluid" src="Admin/<?php echo $result2['image']?>"alt="image"></a>
                         <figcaption class="mt-2 text-center image-caption">Image Credit: <a href="" target="_blank"></a></figcaption>
                    </figure>
                    <p><?php echo $result2['discription']?></p>
               </div>
          </div>
     </article>
</div>
<!-- blog end -->
<?php


include "footer.php";
?>