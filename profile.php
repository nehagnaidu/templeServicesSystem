<?php
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;

$name = isset($_GET['name']) ? urldecode($_GET['name']) : 'Name not specified';
$date = isset($_GET['date']) ? urldecode($_GET['date']) : 'Date not specified';
$time = isset($_GET['time']) ? urldecode($_GET['time']) : 'Time not specified';
$service = isset($_GET['service']) ? urldecode($_GET['service']) : 'Service not specified';

/*echo "Name: " . htmlspecialchars($name) . "<br>";
echo "Date: " . htmlspecialchars($date) . "<br>";
echo "Time: " . htmlspecialchars($time) . "<br>";
echo "Service: " . htmlspecialchars($service) . "<br>";*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Kapileswara Swamy Temple</title>
</head>
<body>
    <div class="topnav">
        <div class="Logo">
            <div class="l1">
                <i class="fa-solid fa-gopuram fa-2x"></i>
            </div>
            <div class="name"><a href="home.php">Sri Kapileswara Swamy Vari Temple</a></div>
        </div>
        <div class="Logo2">
            <div class="l2">
                <i class="fa-solid fa-drum fa-2x"></i>
            </div>
            <div class="mantra">Om Namo Shivaya</div>
        </div>
    </div>
    <div class="header">
        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="dropdown">
                    <a href="#">Services <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="darshanbooking.php">Darshan Booking</a>
                        <a href="sevabooking.php">Seva Booking</a>
                        <a href="accomodation.php">Accommodation Booking</a>
                    </div>
                </li>
                <li><a href="writetous.php">Write to Us</a></li>
                <li class="user-profile">
        <i class="fas fa-user user-icon"></i>
        <div class="user-profile-content">
            <?php if ($isLoggedIn): ?>
                <a href="profile.php" id="profile">Profile</a>
                <a href="logout.php" id="logout">Log Out</a>
            <?php else: ?>
                <a href="signin.html" id="signin">Sign In</a>
                <a href="signup.html" id="signup">Sign Up</a>
            <?php endif; ?>
        </div>
    </li>
            </ul>
        </nav>
    </div>
<body>

<div class="card">
    <h2>Booking Details</h2><br>
    <p><b>Name:</b> <?php echo htmlspecialchars($name); ?></p><br>
    <p><b>Booking Date:</b> <?php echo htmlspecialchars($date); ?></p><br>
    <p><b>Booking Time:</b> <?php echo htmlspecialchars($time); ?></p><br>
    <p><b>Service Booked: </b> <?php echo htmlspecialchars($service); ?></p><br>
</div>

</body>
</html>
