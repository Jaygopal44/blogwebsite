<div class="main-wrapper">
     <section class="cta-section theme-bg-light py-5">
          <div class="container text-center">
               <h2 class="heading">Jaygopal's Blog</h2>
               <div class="intro">Welcome to my blog.</div>
               <form class="signup-form form-inline justify-content-center pt-3" method="post" action="subscribe-insert.php">
                    <div class="form-group" style="padding-bottom: 10px;">
                         <label class="sr-only" for="semail">Your name</label>
                         <input type="name" id="semail" name="name" class="form-control mr-md-1 semail" placeholder="Enter name">
                    </div>
                    <div class="form-group"  style="padding-bottom: 10px;">
                         <label class="sr-only" for="semail">Your email</label>
                         <input type="email" id="semail" name="email" class="form-control mr-md-1 semail" placeholder="Enter email">
                    </div>
                   
                    <button type="submit" class="btn btn-primary ">Subscribe</button>
               </form>
          </div>
          <!--//container-->
     </section>
     <section class="blog-list px-3 py-5 p-md-5">
          <div class="container">
               <!-- blog start  -->
               <?php
               include "Admin/dbcon.php";
               $data = "select * from blog_list";
               $result = mysqli_query($con, $data);

               while ($result2 = mysqli_fetch_array($result)) {

               ?>
                    <div class="item mb-5">
                         <div class="media">
                              <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="Admin/<?php echo $result2['image'] ?>" alt="image">
                              <div class="media-body">
                                   <h3 class="title mb-1"><a href="blog-post.html"> <?php echo $result2['title'] ?></a></h3>
                                   <div class="meta mb-1"><span class="date"><?php echo $result2['date_time'] ?></span><span class="time"></span><span class="comment"><a href="#"></a></span></div>
                                   <div class="intro"><?php echo substr($result2['discription'], 0, 100) ?></div>
                                   <a class="more-link" href="blogdetail.php?id=<?php echo $result2['id'] ?>">Read more &rarr;</a>
                              </div>
                              <!--//media-body-->
                         </div>
                         <!--//media-->
                    </div>
               <?php
               }

               ?>
               <!-- blog end  -->
               <!--//item-->

               <!--//item-->

               <nav class="blog-nav nav nav-justified my-5">
                    <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                    <a class="nav-link-next nav-item nav-link rounded" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
               </nav>

          </div>
     </section>