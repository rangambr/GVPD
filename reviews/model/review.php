<?php

require_once '../../common/conn.php';
require '../../common/kint/Kint.class.php';
class Review {

    function insertRatings($property_id,$description, $rate) {
        $db = new Dbconnect();
		//KINT::dump($description, $rate);
        $sql = "insert into review (property_id,rw_description,rating) values ('$property_id','$description','$rate') ";
       $result = $db->query($sql);
        return true;
    }

  function getAllReviews() {
        $db = new Dbconnect();
        $sql = "select review.id,review.property_id,property.unit_price,property.address1,property.address2,property.type,property.description,review.rw_description,review.rating,property.name from review,property where review.property_id = property.id";
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