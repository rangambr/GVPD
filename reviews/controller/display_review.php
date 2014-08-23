<?php
require '../model/review.php';

$review=new Review();
$get_review=$review->getAllReviews();

?>