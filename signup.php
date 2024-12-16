<?php
require_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['phoneno'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    if ($password !== $confirm_password) {
        echo 'Passwords do not match.';
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, phoneno, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sss', $username, $email, $hashed_password);

    if ($stmt->execute()) {
        header('Location: signin.html');
        exit;
    } else {
        echo 'Error: ' . $conn->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo 'Invalid request method.';
}
?>