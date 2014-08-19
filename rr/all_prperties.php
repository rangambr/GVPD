<?php
require_once("../common/conn.php");

function getAllProperties(){
	$db = new Dbconnect();
    $sql = "select * from property; ";
    $result = $db->query($sql);
	
	$output = "<table align='center' border='1'>";
	$output .="<tr><th>Product ID</th>";
	$output .="<th>Category</th>";
	$output .="<th>Name</th>";
	$output .="<th>Description</th></tr>";
	
	$sql = "SELECT * FROM property;";
	
	$result = mysqli_query($con,$sql);
	$nor = $result->num_rows;
	
	if($nor>0){
		while($rec = mysqli_fetch_assoc($result)){
			$output .= "<tr>";
			$output .= "<td>".$rec["name"]."</td>";
			$output .= "<td>".$rec["address1"]."</td>";
			$output .= "<td>".$rec["address2"]."</td>";
			$output .= "<td>".$rec["city"]."</td>";
			$output .= "</tr>";
		}
	}
	else{
	
	}
	$output .="</table>";
	return $output;
	mysqli_close($con);
}
?>