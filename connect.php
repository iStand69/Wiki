<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "wiki";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$conn->set_charset("utf8mb4");

?>