<?php session_start();

require '../model/reminder.php';
require '../../common/kint/Kint.class.php';

$date=$_POST['txt_date'];
$note=$_POST['txt_note'];

$username = $_SESSION['username'];
//$property_id=$_SESSION[''];

$reminder=new Reminder();

$reminder->addReminder($username,$date,$note);

header("location:../view/reminder.php");
?>