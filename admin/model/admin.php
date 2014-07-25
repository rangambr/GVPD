<?php

require_once '../../common/conn.php';

class Admin {

    function addAdmin($usrname, $pass) {
        $db = new Dbconnect();

        $query = "INSERT INTO user(username,password,type) VALUES ('$usrname','$pass','Admin') ";
        $result = $db->query($query);
        return $result;
    }

    function getAllAdmins() {
        $db = new Dbconnect();

        $query = "SELECT username,type FROM user WHERE type='Admin' ";
        $result1 = $db->query($query);
        return $result1;
    }

    function updateAdmin($usrid, $usrname, $pass) {
        $db = new Dbconnect();

        $query = "UPDATE admin SET user_name='" . $usrname . "',password='" . $pass . "' WHERE user_id=" . $usrid . " ";
        $result = $db->query($query);
        return true;
    }

    function deleteAdmin() {
        $db = new Dbconnect();

        $sql = "DELETE FROM user WHERE id=$del_id";
        $result = $db->query($sql);
    }

    function getAllInquiries() {
        $db = new Dbconnect();
        $sql = "select * from inquiry limit 1000";
        $result = $db->query($sql);
        return $result;
    }
    
    function getAllUsers(){
        $db = new Dbconnect();
        $sql = "select * from user order by type, username";
        $result = $db->query($sql);
        return $result;
    }

}

?>