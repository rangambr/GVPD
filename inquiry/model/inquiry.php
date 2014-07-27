<?php

require_once '../../common/conn.php';

class Inquiry {

    function addInquiry($username, $fname, $lname, $address1, $address2, $email, $contact_no, $description, $status) {
        $db = new Dbconnect();
        //KINT::dump($username,$fname,$lastname,$address1,$address2,$city,$province,$email,$contact_no1,$contact_no2,$gender,$birthday);
        $sql = "insert into property (username,fname,lname,address1,address2,email,contact_no,description,status) values ('$username','$fname','$lname','$address1','$address2','$email','$contact_no','$description','$status')";
        $result = $db->query($sql);
        //KINT::dump($result);
        return true;
    }

    function getInquiryByCustomer($username) {
        $db = new Dbconnect();
        $sql = "select * from inquiry where username='$username'";
        $result = $db->query($sql);
        return $result;
    }

    function getAllInquiries() {
        $db = new Dbconnect();
        $sql = "select * from inquiry limit 1000";
        $result = $db->query($sql);
        return $result;
    }

    function getInquiryByStatus($status) {
        $db = new Dbconnect();
        $sql = "select * from inquiry where status='$status'";
        $result = $db->query($sql);
        return $result;
    }

}
