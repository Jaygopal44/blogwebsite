
<?php include "header.php" ?>
<?php include "sidebar.php" ?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
          <div class="container-fluid ">
               <div class="row mb-2">
                    <div class="col-sm-6">
                         <div class="alert alert-success">
                              <?php
                              echo $_SESSION['message'];
                              ?>
                         </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Starter Page</li>
                         </ol>
                    </div><!-- /.col -->
               </div><!-- /.row -->
          </div><!-- /.container-fluid -->
     </div>
     <!--- header end -->
</div> <!-- container-wrapper end -->
<h1>DASHBOARD</h1>
<?php include "footer.php" ?>