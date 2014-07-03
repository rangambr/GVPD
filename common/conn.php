<?php
class Dbconnect{
    
function query($sql){
	// Create a database connection
    $db_handle=mysql_connect('localhost', 'root', '')or
                    die("could not connect to the server");
	//Select a database to use
    mysql_select_db('GVPD', $db_handle) or 
                    die ("could not select database");
	//Perform database query 
    $result=mysql_query($sql) or die("could not execute the query");
	//close connection
    mysql_close($db_handle);
    return $result;
    } 
}
?>

