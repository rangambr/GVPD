<?php

require '../../property/model/property.php';
$prop = new Property();
$all_properties = $prop->getAllProperties();

echo '<tr><td>Property Name</td><td>Property Status</td><td>Property Type</td><td>Action</td></tr>';
while ($prp = mysql_fetch_array($all_properties)) {
    
    echo "<tr class='user_info'><td>" . $prp['id'] .".   ". $prp['name'] . "</td>";
    echo "<td class='user_info'>" . $prp['Status'] . "</td>";
	echo "<td class='user_info'>" . $prp['type'] . "</td>";
    echo "<td class='ac_link'><a  href='../../property/view/update_property.php?propId=" . $prp['id'] . "'><span class='edit_link' title='Update Property'></span></a>";
    if ($prp['is_hot_property'] == 0) {
        echo "  <a  href='../controller/add_hot_properties.php?propId=" . $prp['id'] . "'><span class='add_hot' title='Add to hot properties'>Add to hot properties</span></a>";
    } else {
        echo "  <a  href='../controller/remove_hot_properties.php?propId=" . $prp['id'] . "'><span class='remove_hot' title='Remove hot property'>Remove from hot properties</span></a>";
    }
    if ($prp['visible_home_page'] == 0) {
        echo "  <a  href='../controller/add_home_page.php?propId=" . $prp['id'] . "'><span class='add_home' title='Display photo in home page'>Add to home page</span></a>";
    } else {
        echo "  <a  href='../controller/remove_home_page.php?propId=" . $prp['id'] . "'><span class='remove_home' title='Remove photo from home page'>Remove from home page</span></a>";
    }
    echo "  <a onClick=\"return confirm('Are you sure?')\" href='../controller/delete_properties.php?propId=" . $prp['id'] . "'><span class='delete_link' title='Delete property'></a></span></td><tr>";
}


