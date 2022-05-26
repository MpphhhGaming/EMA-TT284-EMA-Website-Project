<?php
include "connect.php";

$ev_name = $_POST['walk-name'];
$ev_date = $_POST['walk-date'];
$ev_start = $_POST['start-time'];
$ev_end = $_POST['end-time'];
$ev_meet = $_POST['meet-point'];
$ev_distance = $_POST['distance'];
$ev_leader = $_POST['leader'];
$ev_comments = $_POST['comments'];
$ev_status = $_POST['status'];

$sql = "INSERT INTO events (name, date, start, end, meet, distance, leader, comments, status) 
        VALUES ('$ev_name', '$ev_date', '$ev_start', '$ev_end', '$ev_meet', '$ev_distance', '$ev_leader', '$ev_comments', '$ev_status')";
if ($conn->query($sql) === TRUE) { echo "New record created successfully"; }
else {echo "Error: " .$sql . "<br>" . $conn->error; }
$conn->close();
header("Location: q2a.php");
?>