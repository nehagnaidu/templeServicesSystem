<?php
session_start();

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all required fields are set
    if (!isset($_POST['name']) || !isset($_POST['phone']) || !isset($_POST['email']) || 
        !isset($_POST['photoId']) || !isset($_POST['photoIdNo']) || 
        !isset($_POST['sevaName']) || !isset($_POST['sevaTime']) || !isset($_POST['selectedDate'])) {
        echo "Missing form data. Please check if all required fields are filled.";
        exit;
    }

    // Store form data in variables
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $photo_id_type = $_POST['photoId'];
    $photo_id_no = $_POST['photoIdNo'];
    $sevaName = $_POST['sevaName'];
    $sevaTime = $_POST['sevaTime'];
    $selectedDate = $_POST['selectedDate'];

    // Connect to the database
    include 'connection.php';  // Assume you have this file for DB connection

    // Insert booking details into the seva_bookings table
    $query = "INSERT INTO seva_bookings (name, phone, email, photo_id, photo_id_no, seva_name, seva_time, seva_date) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    
    $stmt->bind_param("ssssssss", $name, $phone, $email, $photo_id_type, $photo_id_no, $sevaName, $sevaTime, $selectedDate);

    if ($stmt->execute()) {
        echo "<script>alert('Booking successful!'); window.location.href='profile.php';</script>";
    } else {
        echo "<script>alert('Booking failed. Please try again later.'); window.location.href='seva.php';</script>";
    }

    $stmt->close();
    $conn->close();
    exit;
} else {
    echo "Invalid request method.";
    exit;
}
?>
