<?php

require '../common/conn.php';
$db = new Dbconnect();

// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO forum_question (topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=$db->query($sql);

if($result){
//echo "Successful<BR>";
//echo "<a href=main_forum.php>View your topic</a>";
header("Location:main_forum.php?msg=3");
}
else {
echo "ERROR";
}
?>