<?php
$servername = "localhost";
$username = "zv316631";
$password = "WG%i4c29?%xBDH%9";
$dbname = "zv316631_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) { die("Connection failed: " .$conn->connect_error); } // Checks connection
?>