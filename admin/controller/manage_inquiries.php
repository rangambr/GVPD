<?php

require '../../inquiry/model/inquiry.php';
$inc = new Inquiry();
$all_inc = $inc->getAllInquiries();

echo '<tr><td>First Name</td><td>Last Name</td><td>Desription</td><td>Status</td><td>Action</td></tr>';
while ($inqu = mysql_fetch_array($all_inc)) {
    
    echo "<tr class='user_info'><td>" . $inqu['fname'] . "</td>";
    echo "<td class='user_info'>" . $inqu['lname'] . "</td>";
    echo "<td class='user_info'>" . $inqu['description'] . "</td>";
    echo "<td class='user_info'>" . $inqu['status'] . "</td>";
    echo "<td class='ac_link'><a  href='respond_inquiry.php?propId=" . $inqu['id'] . "'>Respond</a>";
    echo " | <a  href='../controller/close_inquiry.php?propId=" . $inqu['id'] . "'>Close</a></td><tr>";
}


