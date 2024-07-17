<?php
if (isset($_GET['link'])) {
    # code...
    
$link = $_GET['link'];

        if ($link == 0) {
          require("./pages/home.php");
      }elseif ($link == 1) {
          include("./pages/booked.php");
      }elseif ($link == 2) {
          include("./pages/editContent.php");
      }elseif ($link == 3) {
          require "./pages/editRooms.php";
      }elseif ($link == 4) {
          require "./pages/pending.php";
      }elseif ($link == 5) {
        require "./pages/feedback.php";
    }elseif ($link == 7) {
        require "./pages/blog.php";
    }
}
?>