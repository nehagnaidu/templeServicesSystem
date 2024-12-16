
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
    <link rel="stylesheet" href="accommodation.css?v=1.0">
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
                        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
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
    <div class="img-container">
    <img src="images/dbg2.jpg" alt="image">
</div>
<div class="accom-container">
    <form id="bookingForm" action="page2.php" method="post">
        <label for="room">Type of Room:</label>
        <select id="room" name="room" required>
            <option value="AC room">AC room</option>
            <option value="Non-AC room">Non-AC room</option>
        </select><br>

        <label for="persons">No. of Persons:</label>
        <input type="number" id="persons" name="persons" min="1" max="5" required><br>

        <label for="date">Select preferred date and time: </label>
        <input type="hidden" id="selectedDate" name="selectedDate" required>
        <input type="hidden" id="selectedTimeSlot" name="selectedTimeSlot" required> 

        <div class="calendar-container">
            <div class="month-nav">
                <span class="arrow" id="prevMonth">&#9664;</span>
                <h2 id="monthYear"></h2>
                <span class="arrow" id="nextMonth">&#9654;</span>
            </div>
            <div class="calendar-container" id="calendar">
                <!-- Calendar will be populated by JavaScript -->
            </div>

            <div class="time-slots" id="timeSlots">
                <h3>Available Time Slots</h3>
                <div class="time-slot">12:00 AM to 11:59 AM</div>
                <div class="time-slot">12:00 PM to 11:59 PM</div>
            </div>
        </div>

        <button class="Btn" type="submit">Next</button>
    </form>
</div>
    <script src="cal.js"> </script>
</div>
<footer>
    <p>&copy; Sri Kapileshwara Swamy Vari Temple. All rights reserved.</p>
</footer>
</body>
</html>