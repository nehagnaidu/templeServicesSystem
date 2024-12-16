<?php
// Include your database connection file
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $photoId = $_POST['photoId'];
    $photoIdNo = $_POST['photoIdNo'];
    $selectedDate = $_POST['selectedDate'];
    $selectedTimeSlot = $_POST['selectedTimeSlot'];
    $serviceName = "Darshan Booking";

    // Prepare the SQL statement
    $sql = "INSERT INTO darshan_booking (name, phone, gender, photo_id, photo_id_no, booking_date, booking_time) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssss", $name, $phone, $gender, $photoId, $photoIdNo, $selectedDate, $selectedTimeSlot);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Redirect to profile.php with user details
        header("Location: profile.php?name=" . urlencode($name) . "&date=" . urlencode($selectedDate) . "&time=" . urlencode($selectedTimeSlot) . "&service=" . urlencode($serviceName));
        exit();
    } else {
        // Redirect to booking page with an error message
        header("Location: booking.php?error=1");
        exit();
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
