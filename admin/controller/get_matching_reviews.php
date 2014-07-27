<?php

require '../../reviews/model/review.php';
//require '../../common/kint/Kint.class.php';
$inc = new Review();
$result;
$q = ($_GET['q']);

if($q == ""){
    $result = $inc->getAllReviews();
}
else{
    $result = $inc->getReviewByRating($q);
}


echo '<tr><td>Property name</td><td>Review Description</td><td>Review Rating</td><td>Action</td></tr>';
while ($inqu = mysql_fetch_array($result)) {
    
    echo "<tr class='user_info'><td>" . $inqu['name'] . "</td>";
    echo "<td class='user_info'>" . $inqu['rw_description'] . "</td>";
    echo "<td class='user_info'>" . $inqu['rating'] . "</td>";
    echo "<td class='ac_link'><a  href='move_review.php?rId=" . $inqu['id'] . "'>Add to top reviews</a>";
    echo " | <a  href='../controller/delete_review.php?propId=" . $inqu['id'] . "'>delte</a></td><tr>";
}
