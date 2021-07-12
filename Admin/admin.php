<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
          <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-sm-6">
                         <h1 class="m-0">Admin</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Admin</li>
                         </ol>
                    </div><!-- /.col -->
               </div><!-- /.row -->
          </div><!-- /.container-fluid -->
     </div>
     <!--- header end -->
     <!-- table start  -->
     <div class="card">
          <div class="card-header">
               <h3 class="card-title">Admin Blog</h3>
               <a href="" class="btn btn-info " data-toggle="modal" data-target="#aa" style="float: right;">Admin</a>
          </div>
          <!-- /.card-header  -->
          <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                    <thead>
                         <tr>
                              <th>Sr No.</th>
                              <th>Name</th>
                              <th>Password</th>
                              <th>Discription</th>
                              <th>E-mail</th>
                              <th>Image</th>
                              <th>Login</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $i = 1;
                         include "dbcon.php";
                         $data = "select * from admin";
                         $result = mysqli_query($con, $data);
                         //    print_r($result);
                         $result1 = mysqli_fetch_array($result);
                         //    echo "<pre>";
                         //    print_r($result1);
                         // while ($result1 = mysqli_fetch_array($result)) {
                         // echo "<pre>";
                         // print_r($result1);


                         ?>

                         <tr>
                              <td><?php echo $i++; ?></td>
                              <td><?php echo $result1['name'] ?></td>
                              <td><?php echo $result1['password'] ?></td>
                              <td><?php echo $result1['discription'] ?></td>
                              <td><?php echo $result1['email'] ?></td>
                              <td><img src="<?php echo $result1['image'] ?>" alt="" style="width: 100px; height: 70px; "></td>



                              <td>
                                   <a class="btn btn-info" href="?id=<?php echo $result1['id'] ?>">View</a>
                                   <a class="btn btn-success" href="?id=<?php echo $result1['id'] ?>">Edit</a>
                                   <a class="btn btn-danger" href="?id=<?php echo $result1['id'] ?>">Delete</a>
                              </td>


                         </tr>


                    </tbody>
                    <tfoot>
                         <tr>
                              <th>Sr No.</th>
                              <th>Name</th>
                              <th>Password</th>
                              <th>Discription</th>
                              <th>E-mail</th>
                              <th>Image</th>
                              <th>Login</th>
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
<section>
     <div class="modal fade" id="aa">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title" id="">Admin</h5>
                         <button type="button" class="close" data-dismiss="modal">
                              <span>&times;</span>
                         </button>

                    </div>
                    <div class="modal-body">

                         <form method="post" action="admin-insert.php" enctype="multipart/form-data">

                              <div class="form-group">
                                   <label>Name:</label>
                                   <input type="text" name="name" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label>Password:</label>
                                   <input type="password" name="password" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label>Description:</label>
                                   <textarea type="text" name="discription" class="form-control"></textarea>
                              </div>
                              <div class="form-group">
                                   <label>E-mail:</label>
                                   <input type="email" name="email" class="form-control">
                              </div>
                              <div class="form-group">
                                   <label>Image:</label>
                                   <input type="file" name="image" class="form-control">
                              </div>

                              <center>
                                   <button class="btn btn-info" value="submit">Login</button>
                              </center>
                         </form>
                    </div> <!-- modal body div end-->

               </div><!-- modal content div end-->
          </div>
          <!--modal dialog div end-->
     </div>
     <!--modal fade div end-->

</section>
<!-- login modal end-->

<?php include "footer.php" ?>