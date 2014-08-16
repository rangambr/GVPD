<?php

require '../../reviews/model/review.php';
$rw = new Review();

$all_rw = $rw->getAllReviews();

echo '<tr><td>Property name</td><td>Review Description</td><td>Review Rating</td><td>Action</td></tr>';
while ($inqu = mysql_fetch_array($all_rw)) {
    
    echo "<tr class='user_info'><td>" . $inqu['name'] . "</td>";
    echo "<td class='user_info'>" . $inqu['rw_description'] . "</td>";
    echo "<td class='user_info'>" . $inqu['rating'] . "</td>";
    echo "<td class='ac_link'><a  href='move_review.php?rId=" . $inqu['id'] . "'><span class='add_top'></span></a>";
    echo " | <a  href='../controller/delete_review.php?propId=" . $inqu['id'] . "'><span class='delete_link'></span></a></td><tr>";
}


