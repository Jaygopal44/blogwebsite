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
               <h3 class="card-title">Subscribe Blog</h3>
               <!-- <a href="" class="btn btn-info " data-toggle="modal" data-target="#aa" style="float: right;">Admin</a> -->
          </div>
          <!-- /.card-header  -->
          <div class="card-body">
               <table id="example1" class="table table-bordered table-striped">
                    <thead>
                         <tr>
                              <th>Sr No.</th>
                              <th>Name</th>

                              <th>E-mail</th>

                              <th>Action</th>
                         </tr>

                    </thead>
                    <tbody>
                         <?php
                         $i = 1;
                         include "dbcon.php";
                         $data = "select * from subscribe";
                         $result = mysqli_query($con, $data);
                         //    print_r($result);
                         // $result1 = mysqli_fetch_array($result);
                         //    echo "<pre>";
                         //    print_r($result1);
                         while ($result1 = mysqli_fetch_array($result)) {
                              // echo "<pre>";
                              // print_r($result1);


                              // 
                         ?>

                              <tr>
                                   <td><?php echo $i++; ?></td>
                                   <td><?php echo $result1['name'] ?></td>

                                   <td><?php echo $result1['email'] ?></td>
                                  

                                  

                                   <td>
                                        <a class="btn btn-info" href="?id=<?php echo $result1['id'] ?>">View</a>
                                        <a class="btn btn-success" href="?id=<?php echo $result1['id'] ?>">Edit</a>
                                        <a class="btn btn-danger" href="subscribe_delete.php?id=<?php echo $result1['id'] ?>">Delete</a>
                                   </td>
                                   

                              </tr>

                         <?php
                         }
                         ?>
                    </tbody>
                    <tfoot>
                         <tr>
                              <th>Sr No.</th>
                              <th>Name</th>

                              <th>E-mail</th>


                              <th>Action</th>
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