<?php
session_start();
$mysqli = new MySQLi("mysql_db","root","root","vulnapp");
if($mysqli -> connect_errno){
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}?>

