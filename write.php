<?php
// Include your database connection file
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $conn->real_escape_string($_POST['name']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert the data into the database
    $sql = "INSERT INTO feedback_form (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Your message has been submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
