<?php

require_once '../../common/conn.php';

class Inquiry {

    function addInquiry( $title, $name, $address1, $address2, $email, $contact_no, $subject, $message, $status) {
        $db = new Dbconnect();
        //KINT::dump($username,$fname,$lastname,$address1,$address2,$city,$province,$email,$contact_no1,$contact_no2,$gender,$birthday);
        $sql = "insert into property (title,name,address1,address2,email,contact_no,subject,message,status) values ('$title','$name','$address1','$address2','$email','$contact_no','$subject','$message','$status')";
        $result = $db->query($sql);
        //KINT::dump($result);
        return true;
    }

    function getInquiryByCustomer($name) {
        $db = new Dbconnect();
        $sql = "select * from inquiry where name='$name'";
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
