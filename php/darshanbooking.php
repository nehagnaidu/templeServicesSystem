<?php
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="darshan.css">
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
                        <a href="darshan.php">Darshan Booking</a>
                        <a href="seva.php">Seva Booking</a>
                        <a href="accommodation.php">Accommodation Booking</a>
                    </div>
                </li>
                <li><a href="write.php">Write to Us</a></li>
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
    <div class="container">
        <div class="title"><u>Instructions for Darshan Booking:</u></div>
        <div class="content">
            1. At the time of entry, pilgrims should produce original copy of photoId used at the time of booking.<br>
            Age proof should be produced for children below 12 years to get free entry.<br>
            2. All pilgrims should wear Traditional Clothes Only.<br>
            Male: Dhoti, Shirt/Kurti, Pyjama.<br>
            Female: Saree, Half-Saree, Chudidhar with dupatta.<br>
            3. Pilgrims should carry printed copy of booking receipt with them while coming for darshan.<br>
            Pilgrims without valid darshan tickets will not be allowed to enter.<br>
            4. Pilgrims should not carry luggage, cell phones, and gadgets while reporting.<br>
            5. Temple reserves rights for cancellation of booking on special conditions.
        </div>
        <button class="Btn" type="submit"><a href="dbook.html">I agree</a></button> 
    </div>
    <footer>
        <p>&copy; Sri Kapileshwara Swamy Vari Temple. All rights reserved.</p>
    </footer>
</body>
</html>