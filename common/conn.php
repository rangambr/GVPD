<?php
class Dbconnect{
    
function query($sql){
    $db_handle=mysql_connect('localhost', 'root', '')or
                    die("could not connect to the server");

    mysql_select_db('GVPD', $db_handle) or 
                    die ("could not select database");
    $result=mysql_query($sql) or die("could not execute the query");
    mysql_close($db_handle);
    return $result;
    } 
}
?>

