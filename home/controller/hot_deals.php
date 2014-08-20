<?php
require '../../property/model/property.php';

$property = new Property();
$hot_props = $property->getHotProperties();

function getPhotoURLs($property_id){
    $db=new Dbconnect();
    $sql="select * from property_photo where property_id = '$property_id' order by id limit 1";  
    //kint::dump($status);
    $pic = '';
    
    $result=$db->query($sql);
    while ($row = mysql_fetch_array($result)) {
        $pic = $row['pic'];
    }
    echo ''.$pic;
}
	
?>