<?php
include "connect.php";

$del_id = filter_input(INPUT_POST, 'event-id', FILTER_VALIDATE_INT);

$sql = "DELETE FROM events WHERE ID = '$del_id'";

if ($conn->query($sql) === TRUE) { echo "Record Successfully Deleted"; }
else {echo "Error: " .$sql . "<br>" . $conn->error; }
$conn->close();
header("Location: q2a.php");
?>