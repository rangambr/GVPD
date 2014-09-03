<?php session_start();
require '../model/feedback.php';

$visited=$_POST['rbtn_visit'];
$often_visited = $_POST['rbtn_often'];
$access = $_POST['rbtn_access'];
$available = $_POST['rbtn_avail'];
$look_and_feel = $_POST['rbtn_visual'];
$impression = $_POST['rbtn_impress'];
$topic = $_POST['cmb_topic'];
$feedback = $_POST['txtfdback'];
$name = $_POST['txtname'];
$email = $_POST['txtemail'];

$feedback = new Feedback();
$feedback->insertInfo($visited,$often_visited ,$access,$available,$look_and_feel,$impression,$topic,$feedback,$name,$email);

header("location:../view/feedback.php");  
?>