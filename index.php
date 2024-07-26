<?php
include 'php/logics.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Infinity Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="rooms.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rooms</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="rooms.php">Room Videos</a>
                  <a class="dropdown-item" href="rooms.php">Presidential Room</a>
                  <a class="dropdown-item" href="rooms.php">Infinity Room</a>
                  <a class="dropdown-item" href="rooms.php">Deluxe Room</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
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

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/<?php echo $hero_img; ?>);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Welcome To Our Infinity Rooms</h1>
              <p>Discover our world's #1 Infinity Room For VIP.</p>
              <p><a href="booknow.php" class="btn btn-primary">Book Now</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="heading-wrap text-center element-animate">
              <h4 class="sub-heading">Stay with our Infinity rooms</h4>
              <h2 class="heading"><?php echo $header_text;?></h2>
              <p class="mb-5"><?php echo $header_p;?></p>
              <p><a href="#" class="btn btn-primary btn-sm">More About Us</a></p>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-7">
            <img src="images/<?php echo $header_img;?>" style="max-width: 100%;" alt="Image placeholder" class="img-md-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Our Infinity Rooms</h4>
              <h2 class="heading">Featured Rooms</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-7">
            <div class="media d-block room mb-0">
              <figure>
                <img src="images/rooms/<?php echo $room_image;?>" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    Featured Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="booknow.php?room_id=<?php echo $room_id;?>#Reservation" style="text-transform: capitalize;"><?php echo $room_type;?></a></h3>
                <ul class="room-specs">
                  <li><span class="ion-ios-people-outline"></span> <?php echo $pp;?> Guests</li>
                  <li><span class="ion-ios-crop"></span> <?php echo $size;?> ft <sup>2</sup></li>
                </ul>
                <p><?php echo $desc;?></p>
                <p><a href="booknow.php?room_id=<?php echo $room_id;?>#Reservation" class="btn btn-primary btn-sm">Book Now From $<?php echo $room_price;?></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-5 room-thumbnail-absolute">
            <?php
            while ($recr = mysqli_fetch_assoc($outr)) {
              # code...
              $room_image = $recr['room_image'];
              $room_price = $recr['room_price'];
              $room_id = $recr['room_id'];
            ?>
            <a href="booknow.php?room_id=<?php echo $room_id;?>#Reservation" class="media d-block room bg first-room" style="background-image: url(images/rooms/<?php echo $room_image;?>); ">
              <!-- <figure> -->
                <div class="overlap-text">
                  <span>
                    Hotel Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                  <span class="pricing-from">
                    from $<?php echo $room_price;?>
                  </span>
                </div>
              <!-- </figure> -->
            </a>
              <?php
            }
              ?>

            
          </div>
        </div>
      </div>
    </section>

   
    
    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/img_5.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div  class="col-md-9 text-center element-animate">
            <h2>Relax and Enjoy your Holiday</h2>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!</p>
            <div  class="btn-play-wrap">
              <div class="background"></div>
              <button  class="btn-play popup-vimeo "id="popup"><span class="ion-ios-play"></span></button>
              <div id="videoPopup1" class="popup">
                <div class="popup-content">
                  <span class="close" id="close" >&times;</span>
                  <video
                    controls
                    width="560"
                    height="315"
                    src="./videos/<?php echo $hero_vid;?>"
                    frameborder="0"
                    allowfullscreen
                    id="videoClip"
                    
                  >
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Our Blog</h4>
              <h2 class="heading">Our Recent Blog</h2>
          </div>
        </div>
        <div class="row ">
          <?php 
          $sql = "SELECT LEFT(title,40) AS truncated_title, image, categolies, blog_id, LEFT(introduction, 110) AS truncated_introduction FROM `blogs` ORDER BY id DESC LIMIT 3";
      $res = mysqli_query($con, $sql);
      if($res==TRUE){
        $count = mysqli_num_rows($res);
        if($count>0){
          while($rows=mysqli_fetch_assoc($res)){
            $blog_id = $rows['blog_id'];
            $title = $rows['truncated_title'];
            $categolies =$rows['categolies'];
            $intro = $rows['truncated_introduction'];
            $image = $rows['image'];

   
      ?>
              <div class="col-md-4">
                  <div class="post-entry">
                      <a href="blog-single.php?blog_id=<?php echo $blog_id;?>#blog"><img src="images/<?php echo $image;?>" alt="Image placeholder"
                              class="img-fluid" style="height: 14rem; width: 100%;"></a>
                      <div class="body-text">
                          <div class="category"><?php echo $categolies;?></div>
                          <h3 class="mb-3"><a href="blog-single.php"><?php echo $title."...";?></a></h3>
                          <p class="mb-4"><?php echo $intro."...";?></p>
                          <!-- <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p> -->
                      </div>
                  </div>
              </div>
              <?php
          }
        }
      }else{
        die(mysqli_error($con));
      } 
              ?> 
        </div>
      </div>
    
    </section>
   
    <!-- END section -->
     
   
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
            &copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
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