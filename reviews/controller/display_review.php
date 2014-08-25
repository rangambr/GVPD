<?php

require '../model/review.php';

$review = new Review();
$get_review = $review->getAllGroupedReviews();

function getPhotoURLs($property_id) {
    $db = new Dbconnect();
    $sql = "select * from property_photo where property_id = '$property_id' order by id limit 1";
    //kint::dump($status);
    $pic = '';

    $result = $db->query($sql);
    while ($row = mysql_fetch_array($result)) {
        $pic = $row['pic'];
    }
    echo '' . $pic;
}

function getRating($value) {
    $value = round($value);
    if ($value == 1) {
        return 'Excellent';
    } elseif ($value == 2) {
        return 'Good';
        
    } elseif ($value == 3) {
        return 'Fair';
        
    } elseif ($value == 4) {
        return 'Poor';
        
    } elseif ($value == 5) {
        return 'Very Poor';
    }
}

?>