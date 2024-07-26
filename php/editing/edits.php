<?php
// include 'C:\xampp\htdocs\Bus_services_V4/edits.php';
include '../connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpm/src/Exception.php';
require 'phpm/src/PHPMailer.php';
require 'phpm/src/SMTP.php';
// require '../connection.php';
if (isset($_POST['changeheader'])) {
    # code...
    $header = $_POST['headertext'];

    $query = "UPDATE `contents` SET header_text='$header' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        header("location: ../../dashboard/index.php?link=2&&edit=0  ");
    }else{
        die(mysqli_error($con));
    }
}

if (isset($_POST['changeimg'])) {
    # code...
    // $header = $_POST['headertext'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    $folder = '../../images';
    $new_image = 'MATY-Codes'.rand(10000,99999).$image;

    $sql1 = "SELECT * FROM `contents` WHERE id='1'";
    $res1 = mysqli_query($con, $sql1);

    $row1 = mysqli_fetch_assoc($res1);
    $current_img = $row1['header_img'];

    $query = "UPDATE `contents` SET header_img='$new_image' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        $move = move_uploaded_file($tmp_name, $folder.'/'.$new_image);
        if ($move) {
            # code...
            $file = $folder.'/'.$current_img;
            if (file_exists($file)) {
                # code...
                unlink($file);
                echo "deleted";
            }else{
                echo "not done";
            }
        }



        header("location: ../../dashboard/index.php?link=2&&edit=0");

    }else{
        die(mysqli_error($con));
    }
}

if (isset($_POST['changep'])) {
    # code...
    $paragraph = $_POST['paragraph'];

    $query = "UPDATE `contents` SET header_p='$paragraph' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        header("location: ../../dashboard/index.php?link=2&&edit=0");
    }else{
        die(mysqli_error($con));
    }
}

if (isset($_POST['hero_img'])) {
    # code...
    // $header = $_POST['headertext'];
    $image = $_FILES['image_hero']['name'];
    $tmp_name = $_FILES['image_hero']['tmp_name'];

    $folder = '../../images';
    $new_image = 'MATY-Codes'.rand(10000,99999).$image;

    $sql1 = "SELECT * FROM `contents` WHERE id='1'";
    $res1 = mysqli_query($con, $sql1);

    $row1 = mysqli_fetch_assoc($res1);
    $current_img = $row1['image_hero'];

    $query = "UPDATE `contents` SET image_hero='$new_image' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        $move = move_uploaded_file($tmp_name, $folder.'/'.$new_image);
        if ($move) {
            # code...
            $file = $folder.'/'.$current_img;
            if (file_exists($file)) {
                # code...
                unlink($file);
                echo "old image deleted";
            }else{
                echo "not done";
            }
        }



        header("location: ../../dashboard/index.php?link=2&&edit=3");

    }else{
        die(mysqli_error($con));
    }
}


if (isset($_POST['hero_vid'])) {
    # code...
    // $header = $_POST['headertext'];
    $image = $_FILES['video_hero']['name'];
    $tmp_name = $_FILES['video_hero']['tmp_name'];

    $folder = '../../videos';
    $new_image = 'MATY-Codes'.rand(1000,9999).$image;

    $sql1 = "SELECT * FROM `contents` WHERE id='1'";
    $res1 = mysqli_query($con, $sql1);

    $row1 = mysqli_fetch_assoc($res1);
    $current_img = $row1['video_hero'];

    $query = "UPDATE `contents` SET video_hero='$new_image' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        $move = move_uploaded_file($tmp_name, $folder.'/'.$new_image);
        if ($move) {
            # code...
            $file = $folder.'/'.$current_img;
            if (file_exists($file)) {
                # code...
                unlink($file);
                echo "old video was deleted";
            }else{
                echo "not done";
            }
        }



        header("location: ../../dashboard/index.php?link=2&&edit=3");

    }else{
        die(mysqli_error($con));
    }
}


// ===============About====================

if (isset($_POST['h_about'])) {
    # code...
    $header = $_POST['about_h'];

    $query = "UPDATE `contents` SET about_h='$header' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        header("location: ../../dashboard/index.php?link=2&&edit=0  ");
    }else{
        die(mysqli_error($con));
    }
}


if (isset($_POST['img_about'])) {
    # code...
    // $header = $_POST['headertext'];
    $image = $_FILES['about_img']['name'];
    $tmp_name = $_FILES['about_img']['tmp_name'];

    $folder = '../../images';
    $new_image = 'MATY-Codes-about'.rand(100,999).$image;

    $sql1 = "SELECT * FROM `contents` WHERE id='1'";
    $res1 = mysqli_query($con, $sql1);

    $row1 = mysqli_fetch_assoc($res1);
    $current_img = $row1['about_img'];

    $query = "UPDATE `contents` SET about_img='$new_image' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        $move = move_uploaded_file($tmp_name, $folder.'/'.$new_image);
        if ($move) {
            # code...
            $file = $folder.'/'.$current_img;
            if (file_exists($file)) {
                # code...
                unlink($file);
                echo "old image deleted";
            }else{
        die(mysqli_error($con));
        // echo "not done";
            }
        }



        header("location: ../../dashboard/index.php?link=2&&edit=1");

    }else{
        die(mysqli_error($con));
    }
}


if (isset($_POST['p_about'])) {
    # code...
    $paragraph = $_POST['about_p'];

    $query = "UPDATE `contents` SET about_p='$paragraph' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        header("location: ../../dashboard/index.php?link=2&&edit=1");
    }else{
        die(mysqli_error($con));
    }
}


// ===============Contacts====================

if (isset($_POST['h_contact'])) {
    # code...
    $header = $_POST['contact_h'];

    $query = "UPDATE `contents` SET contact_h='$header' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        header("location: ../../dashboard/index.php?link=2&&edit=2");
    }else{
        die(mysqli_error($con));
    }
}


if (isset($_POST['img_contact'])) {
    # code...
    // $header = $_POST['headertext'];
    $image = $_FILES['contact_img']['name'];
    $tmp_name = $_FILES['contact_img']['tmp_name'];

    $folder = '../../images';
    $new_image = 'MATY-Codes-contacts'.rand(100,999).$image;

    $sql1 = "SELECT * FROM `contents` WHERE id='1'";
    $res1 = mysqli_query($con, $sql1);

    $row1 = mysqli_fetch_assoc($res1);
    $current_img = $row1['contact_img'];

    $query = "UPDATE `contents` SET contact_img='$new_image' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        $move = move_uploaded_file($tmp_name, $folder.'/'.$new_image);
        if ($move) {
            # code...
            $file = $folder.'/'.$current_img;
            if (file_exists($file)) {
                # code...
                unlink($file);
                echo "old image deleted";
            }else{
        die(mysqli_error($con));
        // echo "not done";
            }
        }



        header("location: ../../dashboard/index.php?link=2&&edit=2");

    }else{
        die(mysqli_error($con));
    }
}


if (isset($_POST['p_contact'])) {
    # code...
    $paragraph = $_POST['contact_p'];

    $query = "UPDATE `contents` SET contact_p='$paragraph' WHERE id='1'";
    $out = mysqli_query($con, $query);
    if ($out) {
        # code...
        header("location: ../../dashboard/index.php?link=2&&edit=2");
    }else{
        die(mysqli_error($con));
    }
}


// ================Adding blog==================
if (isset($_POST['add_blog'])) {

    # code...
    $blog_id = rand(100000,999999);

    $categoly = $_POST['categoly'];
    $likes = 0;

    $title = $_POST['title'];
    $intro = $_POST['intro'];

    $image = $_FILES['image']['name'];
    $desc = $_POST['desc'];

    $dater = date("M d, Y");
    $timer = date("H:i-s");

    $folder = "../../images";
 
    if (!empty($image)) {
        # code...
        $image_tmp = $_FILES['image']['tmp_name'];

        $new_image = "blog-MATY-Codes-".rand(1000,9999).$image;
        $move = move_uploaded_file($image_tmp, $folder.'/'.$new_image);
    
    }else{
        $new_image = "default";
    }

    $image1 = $_FILES['image1']['name'];
    if (!empty($image1)) {
        # code...

    $image_tmp1 = $_FILES['image1']['tmp_name'];
    $new_image1 = "blog-MATY-Codes-".rand(1000,9999).$image1;

    $move1 = move_uploaded_file($image_tmp1, $folder.'/'.$new_image1);
    }else{
        $new_image1 = "default";
    }
    $image2 = $_FILES['image2']['name'];

    if (!empty($image2)) {

        # code...
    
        $image_tmp2 = $_FILES['image2']['tmp_name'];
    
        $new_image2 = "blog-MATY-Codes-".rand(1000,9999).$image2;
        $move2 = move_uploaded_file($image_tmp2, $folder.'/'.$new_image2);
    }else{
        $new_image2 = "default";
    }





    $sql = "INSERT INTO `blogs` (`id`, `title`, `image`,`image1`,`image2`,`introduction`, `description`, `timer`, `dater`, `categolies`, `likes`,`blog_id`) VALUES (NULL, '$title', '$new_image','$new_image1','$new_image2', '$intro','$desc', '$timer', '$dater', '$categoly', '$likes','$blog_id')";
    $res = mysqli_query($con, $sql);

    if ($res && $move) {
        # code...
        // header("location: ")
        echo "
        <script>alert('blog added well')</script>
        ";
        header("location: ../../dashboard/?link=7");
    }
}

if (isset($_POST['comment'])) {
    # code...
    // ================generate color================
    function generateRandomColor() {
        // Generate random values for red, green, and blue components
        $red = mt_rand(0, 255);
        $green = mt_rand(0, 255);
        $blue = mt_rand(0, 255);
    
        // Convert RGB to a hexadecimal color code
        return sprintf("#%02x%02x%02x", $red, $green, $blue);
    }
    
    // Array to hold 20 random colors
    $colors = [];
    
    // Generate 20 random colors and store them in the array
    for ($i = 0; $i < 20; $i++) {
        $colors[] = generateRandomColor();
    }
    
    // Echo the 15th color (index 14)
    $new_color = $colors[rand(0,19)];
    // $index= ;


    $blog_id = $_POST['blog_id'];
    
    $name = $_POST['name'];
    $email = $_POST['email'];

    $comment = $_POST['message'];

    $comment_id = rand(10000,99999);
    $timer = date("H:i-s");

    $dater = date("M d, Y");

    $sql = "INSERT INTO `comments` (`id`, `name`, `email`, `comment`,`comment_id`, `blog_id`, `timer`, `dater`,`color`) VALUES (NULL, '$name', '$email', '$comment','$comment_id', '$blog_id', '$timer', '$dater','$new_color')";
    $res = mysqli_query($con, $sql);

    if ($res) {
        # code...
        echo " <script>
        alert('Comment added well');
        </script>";
        header("location: ../../blog-single.php?blog_id=$blog_id#comments");

    }else{
        die(mysqli_error($con));
    }

}

// ==============Reply users feedback===============
if (isset($_POST['replay'])) {
    # code...
    $feedback_message = $_POST['feedback_message'];
    $user = $_POST['user'];
    $message_id = $_POST['message_id'];
    // echo $recieverEmail = $_POST['recieverEmail'];
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tuyishimemaximillien@gmail.com';
    $mail->Password = 'fxia ytyl dcxc pjcs';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('tuyishimemaximillien@gmail.com'); //your gmail

    $mail->addAddress($_POST["recieverEmail"]);

    $mail->isHTML(true);

    $u_id=rand(10000,99999);

    $mail->Subject = "Feedback from Infinity Hotel";
    // $template = include 'emailtemplate.php';
    $mail->Body = '<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; line-height: 1.6; background-color: #f7f7f7;">
    <table role="presentation" cellspacing="0" cellpadding="0" width="100%" style="max-width: 600px; margin: 0 auto; border: 1px solid #ddd; border-radius: 5px; overflow: hidden;">
        <!-- Header -->
        <tr>
            <td bgcolor="#b99365" style="padding: 20px; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                <h2 style="color: #fff; margin: 0;">Feedback to you!</h2>
            </td>
        </tr>
        <!-- Body -->
        <tr>
            <td bgcolor="#fff" style="padding: 20px; color: #555;">
                <p>Dear '.$user.',</p>
                <p>Thank you for contact us on our website. Here\'s feedback for you:</p>
                <p>
                    '.$feedback_message.'
                </p>
                <p>We look forward to keeping you feel friendly with Infinity Hotel!</p>
                <p>Best regards,<br> Infinity Hotel staff manager</p>
            </td>
        </tr>
        <!-- Footer -->
        <tr>
            <td bgcolor="#b99365" style="padding: 10px; text-align: center; font-size: 0.8em; color: #fff; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;">
                <p style="margin: 0;">This email was sent to '.$_POST["recieverEmail"].'. You received this email because you contacted us on our website.</p>
                <p style="margin: 0;">&copy; 2024 Infinity Hotel & CODS & MATY-Codes. All rights reserved.</p>
            </td>
        </tr>
    </table>';

    $mail->send();

    header("location: ../../dashboard/?link=5#$message_id");

}


// =============Adding new room++++++++++
if (isset($_POST["add_room"])) {

    $room_no = $_POST["room_no"];
    $room_type = $_POST["room_type"];

    $room_price = $_POST["room_price"];
    $n_beds = $_POST["n_beds"];

    $size = $_POST["size"];
    $n_pp = $_POST["n_pp"];

    $desc = $_POST["desc"];

    $dater= date("d/m/Y");
    $timer = date("h:i -s");

    $room_id = rand(10000,99999);
    $room_image = $_FILES["room_image"]["name"];
    
    $new_image_room = "rooms-MATY-Codes".rand(100,999).$room_image;
    $room_image_tmp = $_FILES["room_image"]["tmp_name"];

    $folder = "../../images/rooms";
    $move = move_uploaded_file($room_image_tmp, $folder . "/" .$new_image_room);

    if ($move) {
        # code...
        $sql = "INSERT INTO `rooms` (`id`, `room_no`, `room_type`, `room_price`, `room_image`, `room_id`,`size`,`beds`,`pp`, `dater`, `timer`,`des`) VALUES (NULL, '$room_no', '$room_type', '$room_price', '$new_image_room', '$room_id','$size','$n_beds','$n_pp', '$dater', '$timer','$desc')";
        $res = mysqli_query($con, $sql);
        if ($res) {
            header("location: ../../dashboard/?link=3");
        }else{
            echo "data not inserted";
    
        }
    }



}
if (isset($_POST['update_room'])) {
    # code...
    
    $room_no = $_POST["room_no"];
    $room_type = $_POST["room_type"];

    $room_price = $_POST["room_price"];
    $n_beds = $_POST["n_beds"];

    $size = $_POST["size"];
    $n_pp = $_POST["n_pp"];

    $desc = $_POST["desc"];

    $dater= date("d/m/Y");
    $timer = date("h:i -s");

    $room_id = rand(10000,99999);
    $room_image = $_FILES["room_image"]["name"];

    $real_room_id = $_POST['$real_room_id'];

    if (!empty($room_image)) {
        # code...

        $new_image_room = "rooms-MATY-Codes".rand(100,999).$room_image;
        $room_image_tmp = $_FILES["room_image"]["tmp_name"];
    
        $folder = "../../images/rooms";
        $move = move_uploaded_file($room_image_tmp, $folder . "/" .$new_image_room);

        if ($move) {
            # code...

            $sql = "UPDATE `rooms` SET `room_no` = '$room_id', `room_type` = '$room_type', `room_price` = '$room_price', `room_image` = '$new_image_room', `size` = '$size', `beds` = '$n_beds', `pp` = '$n_pp', `des` = '$desc' WHERE `room_id` = '$real_room_id'";
            $res = mysqli_query($con, $sql);
            if ($res) {
                echo "Updated well";
                // header("location: ../../dashboard/?link=3");
            }else{
                echo "data not inserted";
        
            }
        }
    }elseif (empty($room_image)) {
        # code...

            $sql = "UPDATE `rooms` SET `room_no` = '$room_id', `room_type` = '$room_type',`size` = '$size', `beds` = '$n_beds', `pp` = '$n_pp', `des` = '$desc' WHERE room_id = '$real_room_id'";
            $res = mysqli_query($con, $sql);
            if ($res) {
                echo "Updated well without image";
                // header("location: ../../dashboard/?link=3");
            }else{
                // echo "data not inserted";
                die(mysqli_error($con));
        
            }
    }


}

if (isset($_GET['delete_room'])) {
    # code...
    $room_id = $_GET['delete_room'];

    $sql = "DELETE FROM `rooms` WHERE room_id = $room_id";
    $res = mysqli_query($con, $sql);

    if ($res) {
        # code...
        header("../../dashboard?link=3#rooms");
    }
}
?>