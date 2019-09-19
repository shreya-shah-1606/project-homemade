<?php

$connection = @mysql_connect('webdev.dsci.kent.edu', 'vkeerthi',"adVoq49I");
if (!$connection){
    die("Database Connection Failed" . @mysql_error($connection));
}
$select_db = @mysql_select_db('vkeerthi',$connection);
if (!$select_db){
    die("Database Selection Failed" . @mysql_error($connection));
}
?>