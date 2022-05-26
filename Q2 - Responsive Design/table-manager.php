<?php
include "connect.php";

/* Drop Table */
$drop = "DROP TABLE events";
if ($conn->query($drop) === TRUE) { echo "Table successfully dropped"; }
else { echo "error: " . $conn->error;}

/* Create New Table */
$sql = "CREATE TABLE events (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(128) NOT NULL,
date VARCHAR(128) NOT NULL,
start VARCHAR(128) NOT NULL,
end VARCHAR(128) NOT NULL,
meet VARCHAR(128) NOT NULL,
distance VARCHAR(128) NOT NULL,
leader VARCHAR(128) NOT NULL,
comments VARCHAR(128) NOT NULL,
status VARCHAR(128) NOT NULL
)";

if ($conn->query($sql) === TRUE) { echo "<br> Table successfully created"; }
else { echo "<br> error: " . $conn->error;}

/* Fill With Test Data */
$test_data = "INSERT INTO events (name, date, start, end, meet, distance, leader, comments, status) 
VALUES ('Welcome to Sheldon', '23/02/2022', '10:30', '15:30', 'Watcombe Car Park', '9km', 'Helen Smith', 'Grade A walk with steep hills.', 'Approved')";

if ($conn->query($test_data) === TRUE) { echo "<br> New record created successfully"; }
else {echo "<br> Error: " .$test_data . "<br>" . $conn->error; }
$conn->close();
?>