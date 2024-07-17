<?php
include 'php/logics.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>InfinityHotel a Hotel Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700"
        rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <div class="show-chatbot">
                    <button class="chatbot-toggler">
                        <span class="material-symbols-outlined">chat_bubble</span>
                        <span class="material-symbols-outlined">close</span>
                    </button>
                    <div class="chatbot">
                        <header>
                            <h2>Chatbot</h2>
                            <span class="material-symbols-outlined">close</span>
                        </header>
                        <ul class="chatbox">
                            <li class="chat incoming">
                                <span class="material-symbols-outlined">smart_toy</span>
                                <p>Hi there! How can I help you today?</p>
                            </li>
                        </ul>
                        <div class="chat-input">
                            <textarea id="chat-input" placeholder="Type here" required></textarea>
                            <span id="send-button" class="material-symbols-outlined">send</span>
                        </div>
                    </div>
                </div>
                <a class="navbar-brand" href="index.php">InfinityHotel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="rooms.php" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Rooms</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="rooms.php">Room Videos</a>
                                <a class="dropdown-item" href="rooms.php">Presidential Room</a>
                                <a class="dropdown-item" href="rooms.php">Infinity Room</a>
                                <a class="dropdown-item" href="rooms.php">Deluxe Room</a>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>

                        <li class="nav-item cta">
                            <a class="nav-link" href="booknow.php"><span>Book Now</span></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/<?php echo $hero_img;?>);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate">
                        <h1>News &amp; Events</h1>
                        <p>Read our daily news and events of our Infinity hotel.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
    <?php
    if (isset($_GET['blog_id'])) {
      # code...
      $blog_id = $_GET['blog_id'];
      $sql = "SELECT * FROM `blogs` WHERE blog_id='$blog_id'";
      $res = mysqli_query($con, $sql);
      $rowy = mysqli_fetch_assoc($res);

      $title = $rowy['title'];
      $categolies = $rowy['categolies'];
      $dater = $rowy['dater'];
      $intro = $rowy['introduction'];
      $image = $rowy['image'];
      $image1 = $rowy['image1'];
      $image2 = $rowy['image2'];
      $desc = $rowy['description'];
  }
    ?>
    <section class="site-section py-lg">
        <div class="container">
            <span id="blog"></span>

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <h1 class="mb-4"><?php echo $title; ?></h1>
                    <div class="post-meta">
                        <span class="category"><?php echo $categolies; ?></span>
                        <span class="mr-2"><?php echo $dater; ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <div class="post-content-body">
                        <p><?php echo $intro; ?></p>
                        <div class="row mb-5">
                            <?php 
              if ($image != "default") {
                # code...
              ?>
                            <div class="col-md-12 mb-4 element-animate">
                                <img src="images/<?php echo $image; ?>" alt="Image placeholder" class="img-fluid">
                            </div>
                            <?php } ?>
                            <?php 
              if ($image1 != "default") {
                # code...
              ?>
                            <div class="col-md-6 mb-4 element-animate">
                                <img src="images/<?php echo $image1; ?>" alt="Image placeholder" class="img-fluid">
                            </div>
                            <?php 
              }  
              if ($image2 != "default") {
                # code...
                ?>
                            <div class="col-md-6 mb-4 element-animate">
                                <img src="images/<?php echo $image2; ?>" alt="Image placeholder" class="img-fluid">
                            </div>
                            <?php } ?>
                        </div>
                        <p><?php echo $desc; ?></p>
                    </div>


                    <!-- <div class="pt-5">
              <p>Categories:  <a href="#">Food</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
            </div> -->
                    <?php
                            $blog_id = $_GET['blog_id'];
                            $sqlz = "SELECT * FROM `comments` WHERE blog_id='690712' ORDER BY id DESC LIMIT 10";
                            $resz = mysqli_query($con, $sqlz);
                            
                            $count = mysqli_num_rows($resz);
 
                    ?>


                    <div class="pt-5">
                        <h3 class="mb-5"><?php echo $count; ?> Comment(s) <span id="up"
                                style="float: right; font-size: 3rem;display: block; cursor: pointer;">&#x2304;</span><span
                                id="down"
                                style="float: right; font-size: 3rem;display: none; cursor: pointer;">&#x2303;</span>
                        </h3>
                        <ul class="comment-list" id="comment_list" style="display: none;">

                            <?php


                            if ($resz) {
                              # code...
                            while ($rowz = mysqli_fetch_assoc($resz)) {
                              # code...
                              $name = $rowz['name'];
                              $comment = $rowz['comment'];
                              $email = $rowz['email'];
                              $dater = $rowz['dater'];
                              $timer = $rowz['timer'];
                              $comment_id = $rowz['comment_id'];
                              $color = $rowz['color'];

                            ?>
                            <li class="comment">
                                <div class="vcard">
                                  <p style="background: <?php echo $color;?>; color: #fff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);width: 3rem; height: 3rem; padding-bottom: 0.3rem; text-align: center; font-size: 2rem; font-wieght: bold; border-radius: 50%; box-shadow: 2px 2px 4px black;">
                                    <?php echo substr($name, 0,2);?></p>
                                </div>
                                <div class="comment-body">
                                    <h3><?php echo $name; ?></h3>
                                    <div class="meta"><?php echo $dater; ?> at <?php echo $timer; ?></div>
                                    <p><?php echo $comment; ?></p>
                                    <!-- <p><a href="#" class="reply">Reply</a></p> -->
                                </div>
                                <!-- <ul class="children">
                                    <li class="comment">
                                        <div class="vcard">
                                            <img src="images/person_1.jpg" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>Jean Doe</h3>
                                            <div class="meta">January 9, 2018 at 2:21pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                                laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat
                                                saepe enim sapiente iste iure! Quam voluptas earum impedit
                                                necessitatibus, nihil?</p>
                                            <p><a href="#" class="reply">Reply</a></p>
                                        </div>
                                    </li>
                                </ul> -->
                            </li>
                              <?php
                            }
                          }else{
                            echo "<h5><i>no comments</i></h5>";
                          }
                              ?>
 
                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">Leave a comment</h3>
                            <span id="comments"></span>
                            <form action="php/editing/edits.php" method="post" class="p-5 bg-light">
                                <div class="form-group">
                                    <input type="hidden" name="blog_id" value="<?php  echo $_GET['blog_id']; ?>">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Post Comment" name="comment" class="btn btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <div class="sidebar-box search-form-wrap">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" id="s" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                <?php
                    while ($rowx = mysqli_fetch_assoc($resx)) {
                      # code...
                    $title = $rowx['title'];
                    $image = $rowx['image'];
                    $intro = $rowx['introduction'];
                    $description = $rowx['description'];
                    $timer = $rowx['timer'];
                    $dater = $rowx['dater'];
                    $categolies = $rowx['categolies'];                    
                    $blog_id = $rowx['blog_id'];                    
                  ?>
                                <li>
                                    <a href="?blog_id=<?php echo $blog_id;?>#blog">
                                        <img src="images/<?php echo $image; ?>" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4><?php echo $title; ?></h4>
                                            <div class="post-meta">
                                                <span class="mr-2"><?php echo $dater; ?></span> &bullet;
                                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php
                    }
                  ?>
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            <?php 
                $sql1 = "SELECT DISTINCT categolies FROM `blogs`";
                $res1 = mysqli_query($con,$sql1);

                while ($row1 = mysqli_fetch_assoc($res1)) {
                  # code...
                  $categolies = $row1['categolies'];
                  
                ?>
                            <li><a href="#"><?php echo $categolies;?> <span>
                                        <?php 
                  $sql2 = "SELECT categolies FROM `blogs` WHERE categolies='$categolies'";
                  $res2 = mysqli_query($con, $sql2);
                  $count = mysqli_num_rows($res2);
                  echo "(".$count.")";
                  
                  ?></span></a></li>
                            <?php
                }?>
                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Tags</h3>
                        <ul class="tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Freelancing</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>Phone Support</h3>
                    <p>24/7 Call us now.</p>
                    <p class="lead"><a href="tel://">+ 1 332 3093 323</a></p>
                </div>
                <div class="col-md-4">
                    <h3>Connect With Us</h3>
                    <p>We are socialized. Follow us</p>
                    <p>
                        <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Connect With Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
                    <form action="#" class="subscribe">
                        <div class="form-group">
                            <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>

                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    &copy; <Copyright &copy;<script>document.write(new Date().getFullYear());</script>Infinity Hotel All
                        rights reserved
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" />
        </svg></div>
    <script src="./script.js" defer></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>
</body>

</html>