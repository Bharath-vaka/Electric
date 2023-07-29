<?php

// Connect to your database
include("db.php");

// Retrieve the latest value from your SQL table
$sql = "SELECT apparentenergy FROM three ORDER BY time DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$value = $row["apparentenergy"];

// Format the value as a JSON object and output it
$data = array("value" => $value);
echo json_encode($data);

// Close the database connection
mysqli_close($conn);

?>
