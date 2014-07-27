<?php

require '../../property/model/property.php';
$prop = new Property();
$all_properties = $prop->getAllProperties();

echo '<tr><td>Property Name</td><td>Property Status</td><td>Action</td></tr>';
while ($prp = mysql_fetch_array($all_properties)) {
    
    echo "<tr class='user_info'><td>" . $prp['name'] . "</td>";
    echo "<td class='user_info'>" . $prp['Status'] . "</td>";
    echo "<td class='ac_link'><a  href='update_property.php?propId=" . $prp['id'] . "'>Edit</a>";
    if ($prp['visible_home_page'] == 0) {
        echo " | <a  href='../controller/add_hot_properties.php?propId=" . $prp['id'] . "'>Add to hot properties</a>";
    } else {
        echo " | <a  href='../controller/remove_hot_properties.php?propId=" . $prp['id'] . "'>Remove from hot properties</a>";
    }
    echo " | <a  href='../controller/delete_properties.php?propId=" . $prp['id'] . "'>delete</a></td><tr>";
}


