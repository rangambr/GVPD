<?php

require '../../contact_us/model/contact.php';
$inc = new Inquiry();
$all_inc = $inc->getAllInquiries();

echo '<tr><td>Name</td><td>Subject</td><td>Message</td><td>Status</td><td>Action</td></tr>';
while ($inqu = mysql_fetch_array($all_inc)) {
    
    echo "<tr class='user_info'><td>" .$inqu['title'].'. '. $inqu['name'] . "</td>";
    echo "<td class='user_info'>" . $inqu['subject'] . "</td>";
    echo "<td class='user_info'>" . $inqu['message'] . "</td>";
    echo "<td class='user_info'>" . $inqu['status'] . "</td>";
    echo "<td class='ac_link'><a  href='respond_inquiry.php?inqId=" . $inqu['inquiry_id'] . "'><span class='resp_link' title='Respond inquiry'>&nbsp;</span></a>";
	echo " | <a  href='../view/view_inquiry.php?inqId=" . $inqu['inquiry_id'] . "'><span class='view_link'></span></a>";
    if($inqu['status'] != 'Closed'){
        echo " | <a  href='../controller/close_inquiry.php?propId=" . $inqu['inquiry_id'] . "'><span class='close_link' title='Close inquiry'></span></a>";
		
    }
    echo '</td><tr>';
}


