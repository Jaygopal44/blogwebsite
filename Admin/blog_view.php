<?php
include "dbcon.php";
$id = $_GET['id'];
$data = "select * from blog_list where id = $id";
$result = mysqli_query($con, $data);
$result2 = mysqli_fetch_array($result);


?>




<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
          <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-sm-6">
                         <h1 class="m-0">Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Add Blog</li>
                         </ol>
                    </div><!-- /.col -->
               </div><!-- /.row -->
          </div><!-- /.container-fluid -->
     </div>
     <!--- header end -->
     <!-- table start  -->
     <div class="card">
          <div class="card-header">
               <h3 class="card-title">Display Blog</h3>

          </div>
          <!-- /.card-header  -->
          <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                    <thead>
                         <tr>
                              <th>Id</th>
                              <th>Title</th>
                              <th>Discription</th>
                              <th>Image</th>


                         </tr>
                    </thead>
                    <tbody>


                         <tr>
                              <td><?php echo $result2['id'] ?></td>
                              <td><?php echo $result2['title'] ?></td>
                              <td><?php echo $result2['discription'] ?></td>
                              <td><img src="<?php echo $result2['image'] ?>" alt="" style="width: 100px; height: 70px; "></td>




                         </tr>



                    </tbody>
                    <tfoot>
                         <tr>
                              <th>Id</th>
                              <th>Title</th>
                              <th>Discription</th>
                              <th>Image</th>

                         </tr>
                    </tfoot>
               </table>
          </div>
          <!-- /.card-body -->
     </div>
     <!-- /.card -->
     <!-- table end -->
</div> <!-- container-wrapper end -->
<!-- login modal-->

<!-- login modal end-->

<?php include "footer.php" ?>