<?php
include 'php/connect.php';

$sqln = "SELECT * FROM `contents` WHERE id = '1'";
$resn = mysqli_query($con, $sqln);

$rown = mysqli_fetch_assoc($resn);
$header_text = $rown['header_text'];

$header_img = $rown['header_img'];
$header_p = $rown['header_p'];


$hero_img = $rown['image_hero'];
$hero_vid = $rown['video_hero'];

$about_p = $rown['about_p'];
$about_h = $rown['about_h'];

$about_img = $rown['about_img'];
$contact_p = $rown['contact_p'];

$contact_img = $rown['contact_img'];
$contact_h = $rown['contact_h'];


// ==========blogs==========
// 
$sqlx = "SELECT * FROM `blogs` ORDER BY id DESC LIMIT 5";
$resx = mysqli_query($con, $sqlx);





?>