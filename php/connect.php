<?php
session_start();
$con = mysqli_connect("localhost", "root", "","infinity");
if (!$con) {
    # code...
    echo "erro code 400 Conmecting to database has been failed";
}
?>