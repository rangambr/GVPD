<?php
require '../../reports/model/search_preference.php';
$search_pref = new Search_Preference();

$result = $search_pref->getPreferencesGroupByCity();
// Print out result
while($row = mysql_fetch_array($result)){
	echo    "".$row['city']. $row['COUNT(id)'];
	echo "<br />";
}
