<?php

require_once '../../common/conn.php';

class Review {

    function insertRatings($description, $rate) {
        $db = new Dbconnect();

        $sql = "insert into reviews (description,rating) values ('$description','$rate')";
        $result = $db->query($sql);
        return true;
    }

  function getAllReviews() {
        $db = new Dbconnect();
        $sql = "select review.id,review.rw_description,review.rating,property.name from review,property where review.property_id = property.id";
        $result = $db->query($sql);
        return $result;
    }

    function getInquiryByRating($rating) {
        $db = new Dbconnect();
        $sql = "select review.id,review.rw_description,review.rating,property.name from review,property where review.property_id = property.id and rating='$rating'";
        $result = $db->query($sql);
        return $result;
    }
}
?>