<?php
require '../../property/model/property.php';
require '../../common/kint/Kint.class.php';
$prop = new Property();
$q = ($_GET['q']);
$result;

if($q == ""){
    $result = $prop->getAllProperties();
}
else{
    $result = $prop->getPropertiesByStatus($q);
}


echo '<tr><td>Property Name</td><td>Property Status</td><td>Type</td><td>Action</td></tr>';
while ($prp = mysql_fetch_array($result)) {
    
    echo "<tr class='user_info'><td>" . $prp['name'] . "</td>";
    echo "<td class='user_info'>" . $prp['Status'] . "</td>";
	echo "<td class='user_info'>" . $prp['type'] . "</td>";
   echo "<td class='ac_link'><a  href='../../property/view/update_property.php?propId=" . $prp['id'] . "'><span class='edit_link'></span></a>";
    if ($prp['is_hot_property'] == 0) {
        echo "  <a  href='../controller/add_hot_properties.php?propId=" . $prp['id'] . "'><span class='add_hot'>Add to hot properties</span></a>";
    } else {
        echo "  <a  href='../controller/remove_hot_properties.php?propId=" . $prp['id'] . "'><span class='remove_hot'>Remove from hot properties</span></a>";
    }
     if ($prp['visible_home_page'] == 0) {
        echo "  <a  href='../controller/add_home_page.php?propId=" . $prp['id'] . "'><span class='add_home'>Add to home page</span></a>";
    } else {
        echo "  <a  href='../controller/remove_home_page.php?propId=" . $prp['id'] . "'><span class='remove_home'>Remove from home page</span></a>";
    }
    echo "  <a  href='../controller/delete_properties.php?propId=" . $prp['id'] . "'><span class='delete_link'></a></span></td><tr>";
}