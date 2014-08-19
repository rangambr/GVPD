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


echo '<tr><td>Property Name</td><td>Property Status</td><td>Action</td></tr>';
while ($prp = mysql_fetch_array($result)) {
    
    echo "<tr class='user_info'><td>" . $prp['name'] . "</td>";
    echo "<td class='user_info'>" . $prp['Status'] . "</td>";
   echo "<td class='ac_link'><a  href='../../property/view/update_property.php?propId=" . $prp['id'] . "'><span class='edit_link'></span></a>";
    if ($prp['is_hot_property'] == 0) {
        echo "  <a  href='../controller/add_hot_properties.php?propId=" . $prp['id'] . "'><span class='add_hot'>Add to hot properties</span></a>";
    } else {
        echo "  <a  href='../controller/remove_hot_properties.php?propId=" . $prp['id'] . "'><span class='remove_hot'>Remove from hot properties</span></a>";
    }
    echo "  <a  href='../controller/delete_properties.php?propId=" . $prp['id'] . "'><span class='delete_link'></a></span></td><tr>";
}