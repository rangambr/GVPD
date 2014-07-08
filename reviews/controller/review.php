<?php
require '../model/review.php';

$description=$_POST['txt_desc'];
$rate=$_POST['cmb_rate'];

$rating=new Review();
$newRating=$rating->insertRatings($description,$rate);
header("Location:../view/review.php");
?>