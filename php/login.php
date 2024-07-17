<?php
include 'connect.php';
if (isset($_POST['login'])) {
    # code...
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM `admin` WHERE username='$uname' AND passwords='$pass'";
    $res = mysqli_query($con, $sql);
    $rec = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);


    if ($rec == 1) {
        # code...
        $u_id = $row['user_id'];
        $_SESSION['u_id'] = $u_id;
        header("location: ../dashboard/index.php?link=0");
    }
    else{
        echo"Username not found";
    }
}
?>