<?php
include "connect.php";
if (isset($_POST['contact'])) {
    # code...
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $date = DATE("D d/m/Y");

    $m_id = RAND(100000,999999);
    $sql ="INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `message_id`, `date`) VALUES (NULL, '$name', '$phone', '$email', '$message', '$m_id', '$date')";
    $res = mysqli_query($con, $sql);

    if ($res) {
        # code...
        echo "
        <script>
        alert('Message sent successfull');
        </script>
        ";
        header("location: ../contact.html");
    }
}
?>