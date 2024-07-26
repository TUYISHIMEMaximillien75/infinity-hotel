<?php
include "../php/connect.php";

$u_id=$_SESSION['u_id'];

if (empty($u_id)) {
  # code...
  echo "Loading";
  header("location: ../login.html");
}

$sql3 = "SELECT * FROM `admin` WHERE user_id = '$u_id'";
$res3 = mysqli_query($con, $sql3);
$row3 = mysqli_fetch_assoc($res3);

$uname = $row3['username'];
$email = $row3['email'];
$pic = $row3['picture'];
$post = $row3['post'];


$sql1 = "SELECT * FROM `resevertion` WHERE confrimation='no'";
$res1 = mysqli_query($con, $sql1);
$rec1 = mysqli_num_rows($res1);

$sql4 = "SELECT * FROM `resevertion` WHERE confrimation='accepted'";
$res4 = mysqli_query($con, $sql4);
$rec4 = mysqli_num_rows($res4);

$sql5 = "SELECT SUM(guests) FROM `resevertion` WHERE confrimation='received'";
$res5 = mysqli_query($con, $sql5);
$rec5 = mysqli_fetch_assoc($res5);

$out5 = $rec5['SUM(guests)'];


// ********receive messages*************

$sql6 = "SELECT * FROM `contact` ORDER BY id DESC";
$res6 = mysqli_query($con, $sql6);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Infinity Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/vertical-light-layout/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <style>
      
    :root {
      --main: #ffe6a7;
      --primary: #ffffff;
      --secondary: #522500;
    }
    #form1 h1{
      font-size: 24px;
      color :var(--secondary);
    }
    #form1 .input {
      background-color: var(--primary) ;
      padding: 20px;
      color: var(--secondary);
    }
    #form1 .input input[type="submit"]{
      margin: auto;
    }
    .block{
      background-color :var(--primary);
      padding : 20px;
      color: var(--secondary);
      height: 50%;
      margin-top:10px; 
     
      /* border-bottom: 2px solid var(--secondary); */
      /* border-top: 2px solid var(--secondary); */
    }
    .blocks{
      display: flex;
      flex-direction: row;
      gap: 30px;
      
    }
    
    .blocks .value{
      width: 50%;
    }

    .page-body-wrapper{
      overflow-y: scroll;
    }
    .blocks a{
      color: var(--main);
      background-color: var(--secondary);
      padding: 10px;
      width: 40vw;
      text-decoration: none;
      text-align: center;
      margin: auto;
    }
    .blocks a:hover{
      color: var(--secondary);
      background-color:var(--main);
    }

    #form2{
      background-color: var(--primary);
      padding:10px;
      display: flex;
      flex-direction: column;
      gap: 5px;
      color: var(--secondary);
    }

    #form2 .input{
      /* background-color: var(--main); */
      padding: 5px;
      display: flex;
      justify-content: center;
      flex-direction: column;
    }
    #form2 .input select{
      width: 100%;
      height: 40px;
      margin: auto;
      border: 2px solid var(--main);
    }

    #form2 .input select option{
      height: 40px;
    }
    #form2 .input label{
      font-size: 18px;
    }
    #form2 .input textarea{
      border: 2px solid var(--main);
    }
    .input input{
      width: 100%;
      height: 40px;
    }
    .input input[type="number"]{
      border: 2px solid var(--main);
    }
    .input input[type="submit"]{
      background-color: var(--secondary);
      color: var(--primary);
      border: none;
      width: 50%;
      margin: auto;
    }
    .input input[type="submit"]:hover{
      color: var(--secondary);
      background-color: var(--main);
      transition: 0.7s;
    }
    #form1 .input input[type="submit"]{
      margin: auto;
    }
    .edit{
      display: flex;
      flex-direction: row;
      gap:20px;
    }
    .edit .left{
        width: 50%;
        
    }
    .edit .left .contact-center-left{
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    
    .edit .right{
        width: 50%;
    }
    .edit .right .contact-center-right{
      display: flex;
      flex-direction: column;
      gap: 20px;
    }
    .edit .right form{
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    .edit img{
      width: 100%;
    }

    .edit input{
      border: none;
      
    }
    .edit input[type='text']{
      border-bottom: 2px solid grey;
    }
    .edit textarea{
      width: 100%;
      border: none;
      border-bottom: 2px solid black;
    }

    .blog{
      display: flex;
      flex-direction: column;
      gap:20px;
      width: 70%;
      margin:auto;
    } 
    .blog .input{
      display: flex;
      flex-direction: column;
      gap:5px;
    }
    .blog .input input[type="text"]{
      border: none;
      border-bottom: 2px solid black;
    }

    
    
    .blog textarea{
      border:none;
      border-bottom: 2px solid black;
    }

    @media (max-width:1020px) {
      .edit{
        display: flex;
        flex-direction: column;
        font-size: 14px;
      }
      .edit .left{
        width: 100%;
      } 
      .edit .right{
        width: 100%;
      }
    }
    @media (max-width: 390px) {
      .a{
        font-size: 12px;
      }
    }
    #sidebar,#useless{
      background-color: var(--secondary);
    }
    @media (min-width:999px){
      #sidebar .nav{
        position: relative;
        left: -90px;
        top: 20px;
        width: 250px;
        margin: auto;
      }
      #sidebar .nav .nav-link{
        width: 100%;
        /* border:none; */
        
      }
    }
    </style>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  </head>
  <body>
    <div class="container-scroller">
     <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div id="useless" class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" style="color:white; " href="index.html">
            Dashboard
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome Hotel Admin Dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            
           
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ms-2" src="../admin_profiles/<?php echo $pic; ?>" alt="Profile image"> <span class="font-weight-normal"> <?php echo $uname; ?> </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <!-- <img class="img-md rounded-circle" src="../admin_profiles/<?php echo $pic; ?>" alt="Profile image"> -->
                  <p class="mb-1 mt-3"><?php echo $uname; ?></p>
                  <p class="font-weight-light text-muted mb-0"><?php echo $email; ?></p>
                </div>
                
                <a href="../php/signout.php" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
    
<div class="container-fluid page-body-wrapper" style="overflow-y: hidden;">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item navbar-brand-mini-wrapper">
              <!-- <a class="nav-link navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a> -->
            </li>
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../admin_profiles/<?php echo $pic; ?>" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $uname; ?></p>
                  <p class="designation"><?php echo $post; ?></p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?link=0">
                <span class="menu-title">Dashboard</span>
                <!-- <i class="icon-screen-desktop menu-icon"></i> -->
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="?link=1">
                <span class="menu-title">Accepted Visitors</span>
                <!-- <i class="icon-screen-desktop menu-icon"></i> -->
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="?link=4">
                <span class="menu-title">Pending Requests</span>
                <!-- <i class="icon-screen-desktop menu-icon"></i> -->
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="?link=2&&edit=0">
                <span class="menu-title">Edit Content</span>
                <!-- <i class="icon-screen-desktop menu-icon"></i> -->
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="?link=3">
                <span class="menu-title">Edit Rooms</span>
                <!-- <i class="icon-screen-desktop menu-icon"></i> -->
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?link=5">
                <span class="menu-title">Feedback</span>
                <!-- <i class="icon-screen-desktop menu-icon"></i> -->
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="?link=7">
                <span class="menu-title">Add a blog</span>
                <!-- <i class="icon-screen-desktop menu-icon"></i> -->
              </a>
            </li>
            
           
            
          </ul>
        </nav>
    
      <?php
      
      include "./pages/page_director.php";
      ?>
                <!-- partial -->
        
    </div>
    </div>  
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/moment/moment.min.js"></script>
    <script src="assets/vendors/daterangepicker/daterangepicker.js"></script>
    <script src="assets/vendors/chartist/chartist.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>