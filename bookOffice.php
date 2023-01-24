<?php

// Connect to the database
$conn = new mysqli("host", "username", "password", "database_name");

// Check if the office is free at a certain time
$time = "14:00";
$office_number = 3;
$query = "SELECT * FROM offices WHERE office_number = $office_number AND start_time <= '$time' AND end_time >= '$time'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Office is occupied
    $row = $result->fetch_assoc();
    echo "Office $office_number is occupied by " . $row['occupant_name'] . " until " . $row['end_time'];
} else {
    echo "Office is free";
}

$conn->close();