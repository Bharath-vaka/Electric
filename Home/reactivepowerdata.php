<?php

// Connect to the MySQL database
include("db.php");

// Get the latest data from the database
$result = $conn->query("SELECT reactivepower, time FROM three ORDER BY time DESC LIMIT 10");

// Convert the data to a JSON array
$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = [strtotime($row['time']) * 1000, (int) $row['reactivepower']];
}
$data = array_reverse($data);

// Output the JSON data
header('Content-Type: application/json');
echo json_encode($data);

?>
