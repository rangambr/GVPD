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

    function getReviewByRating($rating) {
        $db = new Dbconnect();
        $sql = "select review.id,review.rw_description,review.rating,property.name from review,property where review.property_id = property.id and rating='$rating'";
        $result = $db->query($sql);
        return $result;
    }
    
    function get_properties_with_ratings(){
        $db = new Dbconnect();
        $sql = "select review.rw_description,review.rating,property.name, COUNT(review.id) from review,property where review.property_id = property.id group by review.property_id order by review.rating desc";
        $result = $db->query($sql);
        return $result;
    }
}
?>