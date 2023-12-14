<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

/* php& mysqldb connection file */
$user = "root"; //mysqlusername
$pass = ""; //mysqlpassword
$host = "localhost"; //server name or ipaddress
$dbname = "fyp"; //your db name
$dbconn = mysqli_connect($host, $user, $pass, $dbname) or die(mysqli_error($dbconn));
?>
