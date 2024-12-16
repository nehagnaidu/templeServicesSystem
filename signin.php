<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'connection.php';

    // Start the session
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user exists in the users table
    $query = "SELECT password FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    
    if (!$stmt) {
        die('Prepare failed: ' . $conn->error);
    }

    $stmt->bind_param('s', $username);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Store sign-in data in log_tab
                $logQuery = "INSERT INTO log_tab (username, password) VALUES (?, ?)";
                $logStmt = $conn->prepare($logQuery);
                $hashedPassword = $row['password']; // Use the stored hashed password

                if (!$logStmt) {
                    die('Log Prepare failed: ' . $conn->error);
                }

                $logStmt->bind_param('ss', $username, $hashedPassword);

                if ($logStmt->execute()) {
                    // Set session to mark the user as logged in
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;

                    // Redirect to home.php on successful sign-in
                    header('Location: home.php');
                    exit; // Always exit after a header redirect
                } else {
                    echo 'Log Insert failed: ' . $logStmt->error;
                }

                $logStmt->close();
            } else {
                // Incorrect password
                echo 'Invalid username or password.';
            }
        } else {
            // Username does not exist in the database
            echo 'No user found with this username.';
        }
    } else {
        echo 'Execute failed: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    
} else {
    echo 'Invalid request method.';
}
?>
