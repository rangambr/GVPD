<?php

require '../../property/model/property.php';
$prop = new Property();
$all_properties = $prop->getAllProperties();

echo '<tr><td>Property Name</td><td>Property Status</td><td>Action</td></tr>';
while ($prp = mysql_fetch_array($all_properties)) {
    
    echo "<tr class='user_info'><td>" . $prp['name'] . "</td>";
    echo "<td class='user_info'>" . $prp['Status'] . "</td>";
    echo "<td class='ac_link'><a  href='../../property/view/update_property.php?propId=" . $prp['id'] . "'><span class='edit_link'></span></a>";
    if ($prp['is_hot_property'] == 0) {
        echo "  <a  href='../controller/add_hot_properties.php?propId=" . $prp['id'] . "'><span class='add_hot'>Add to hot properties</span></a>";
    } else {
        echo "  <a  href='../controller/remove_hot_properties.php?propId=" . $prp['id'] . "'><span class='remove_hot'>Remove from hot properties</span></a>";
    }
    echo "  <a onClick=\"return confirm('Are you sure?')\" href='../controller/delete_properties.php?propId=" . $prp['id'] . "'><span class='delete_link'></a></span></td><tr>";
}


