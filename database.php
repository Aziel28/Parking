<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "capstone";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>