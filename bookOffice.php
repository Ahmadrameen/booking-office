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
    // Office is free
    $occupant_name = "Ahmad";
    $occupant_email = "ahmadrameen.alizai@gmail.com";
    $occupant_phone = "931-300-473";
    $start_time = "14:00";
    $end_time = "15:00";

    // Book the office
    $query = "INSERT INTO offices (office_number, occupant_name, occupant_email, occupant_phone, start_time, end_time)
                  VALUES ($office_number, '$occupant_name', '$occupant_email', '$occupant_phone', '$start_time', '$end_time')";
    $conn->query($query);

    // Send a notification to the person who occupies it
    $to = $occupant_email;
    $subject = "Office Booking Confirmation";
    $message = "You have successfully booked office $office_number from $start_time to $end_time. Thank you.";
    $headers = "From: booking@company.com" . "\r\n" .
        "CC: $occupant_phone";
    mail($to, $subject, $message, $headers);

    echo "Office $office_number has been successfully booked by $occupant_name.";
}

$conn->close();
