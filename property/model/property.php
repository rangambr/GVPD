<?php

//connect to db
require_once '../../common/conn.php';

class Property {

    function registerProperty($username, $name, $address1, $address2, $city, $province, $extent, $unit_price, $description) {
        $db = new Dbconnect();
        //KINT::dump($username,$name,$address1,$address2,$city,$province);
        $sql = "insert into property (username,name,address1,address2,city,province,extent,unit_price,description) values ('$username','$name','$address1','$address2','$city','$province','$extent','$unit_price','$description')";
        $result = $db->query_last_id($sql);
        //KINT::dump($result);
        return $result;
    }

    function getPropertyByCustomer($username) {
        $db = new Dbconnect();
        $sql = "select * from property where username='$username'";
        $result = $db->query($sql);
        return $result;
    }

    function getPropertyById($id) {
        $db = new Dbconnect();
        $sql = "select * from property where id='$id'";
        $result = $db->query($sql);
        return $result;
    }

    function getAllProperties() {
        $db = new Dbconnect();
        $sql = "select * from property limit 1000";
        $result = $db->query($sql);
        return $result;
    }

    function getPropertySubset($limit) {
        $db = new Dbconnect();
        $result = $db->query("select * from property " . $limit);
        return $result;
    }

    function getPropertiesByStatus($status) {
        $db = new Dbconnect();
        $sql = "select * from property where status = '$status'";
        //kint::dump($status);
        $result = $db->query($sql);
        return $result;
    }

    function getPropertiesByUsername($username) {
        $db = new Dbconnect();
        $sql = "select * from property where username = '$username'";
        //kint::dump($status);
        $result = $db->query($sql);
        return $result;
    }

    function getPropertiesBySearchCategory($location, $type, $min_val, $max_val, $no_min, $no_max, $no_type, $no_location) {
        $db = new Dbconnect();
        $min_max_filter = "";
        $type_filter = "";
        $location_filter = "";

        if ($no_min && $no_max) {
            $min_max_filter = "";
        } elseif ($no_min) {
            $min_max_filter = " unit_price <= '$max_val' and ";
        } elseif ($no_max) {
            $min_max_filter = " unit_price >= '$min_val' and ";
        } else {
            $min_max_filter = " ( unit_price >= '$min_val' and unit_price <= '$max_val' ) and ";
        }

        if (!$no_type) {
            $type_filter = "type = '$type' and ";
        }

        if (!$no_location) {
            $location_filter = "( address1 = '$location' or address2 = '$location' or city = '$location' or province = '$location') and ";
        }

        $query_str = "select * from property where " . $type_filter . " " . $min_max_filter . " " . $location_filter . " status = 'Active' ";
        //KINT::dump($query_str);
        $result = $db->query($query_str);
        return $result;
    }

    function getHotProperties() {
        $db = new Dbconnect();
        //KINT::dump($username,$name,$address1,$address2,$city,$province);
        $sql = "select * from property where is_hot_property = 1";
        $result = $db->query($sql);
        //KINT::dump($result);
        return $result;
    }

    function updateProperty($status,$prop_id, $name, $address1, $address2, $city, $province, $extent, $unit_price, $description) {
        $db = new Dbconnect();
        //KINT::dump($username,$name,$address1,$address2,$city,$province);
        $sql = "update property set Status='$status', name = '$name',address1 = '$address1',address2 = '$address2',city = '$city',province = '$province',extent='$extent',unit_price='$unit_price',description='$description' where  id='$prop_id' ";
        $result = $db->query($sql);
        //KINT::dump($result);
        return $result;
    }

    // image upload
    function insertPhotoImage($property_id, $pic) {
        $db = new Dbconnect();
        //KINT::dump($username,$name,$address1,$address2,$city,$province);
        $sql = "insert into property_photo (property_id,pic) values ('$property_id','$pic')";
        $result = $db->query($sql);
        //KINT::dump($result);
        return true;
    }
    
    // image upload
    function updatePhotoImage($property_id, $pic, $oldpic) {
        $db = new Dbconnect();
        //KINT::dump($username,$name,$address1,$address2,$city,$province);
        $sqldel = "delete from property_photo where property_id='$property_id' and pic = '$oldpic'";
        $db->query($sqldel);
        
        $sql = "insert into property_photo (property_id,pic) values ('$property_id','$pic')";
        $result = $db->query($sql);
        return true;
    }

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

    function getAllPhotoURLs($property_id) {
        $db = new Dbconnect();
        $sql = "select * from property_photo where property_id = '$property_id' order by id";

        $result = $db->query($sql);
        return $result;
    }
}

?>