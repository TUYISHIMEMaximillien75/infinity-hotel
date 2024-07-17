<?php
include "connect.php";
if (isset($_POST['reserve'])) {
    # code...
    $a_date = $_POST['a_date'];
    $d_date = $_POST['d_date'];
    $n_room = $_POST['n_room'];
    $guests = $_POST['guests'];
    $t_room = $_POST['t_room'];
    $email = $_POST['email'];
    $b_names = $_POST['b_names'];
    $phone = $_POST['phone'];
    $note = $_POST['message'];

    $u_id = rand(10000,99999);
    $dater = date("D d/m/Y");
    $timer = date("H:i:s");

    $sql = "INSERT INTO `resevertion` (`id`, `a_date`, `d_date`, `n_room`, `guests`, `t_room`, `email`, `b_names`, `phone`, `note`, `u_id`, `dater`, `timer`,`confrimation`) VALUES ('', '$a_date', '$d_date', '$n_room', '$guests', '$t_room', '$email', '$b_names', '$phone', '$note', '$u_id', '$dater', '$timer','no')";
    $res = mysqli_query($con, $sql);

    if ($res) {
        # code...
        header("location: ../booknow.html");
    }
}elseif (isset($_GET['confrim'])) {
    # code...
    $confrim = $_GET['confrim'];
    $u_id = $_GET['u_id'];

    if ($confrim == 'accept') {
        # code...
        $sql2 = "UPDATE `resevertion` SET `confrimation` = 'accepted' WHERE u_id='$u_id'";
        $res2 = mysqli_query($con, $sql2);
        if ($res2) {
            # code...
            echo "<script>
            alert('Booking is accepted');
            </script>";
            header("location: ../dashboard/index.php?link=4");
        }

    }elseif ($confrim == 'delete') {
        # code...
        $sql3 = "UPDATE `resevertion` SET `confrimation` = 'deleted' WHERE u_id='$u_id'";
        $res3 = mysqli_query($con, $sql3);
        if ($res3) {
            # code...
            echo "<script>
            alert('Booking is Denied');
            </script>";
            header("location: ../dashboard/index.php?link=4");

        }
    }elseif ($confrim == 'received') {
        # code...
        $sql3 = "UPDATE `resevertion` SET `confrimation` = 'received' WHERE u_id='$u_id'";
        $res3 = mysqli_query($con, $sql3);
        if ($res3) {
            # code...
            echo "<script>
            alert('Booking is Denied');
            </script>";
            header("location: ../dashboard/index.php?link=1");

        }
    }
}

?>