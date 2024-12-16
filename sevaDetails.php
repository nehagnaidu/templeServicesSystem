<?php
session_start();
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
$sevaName = isset($_POST['sevaName']) ? $_POST['sevaName'] : '';
$sevaTime = isset($_POST['sevaTime']) ? $_POST['sevaTime'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sevaDetails.css?v=1.0">
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
                <li><a href="writetous.php">Write to Us</a></li>
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
    <div class="details-container">
        <h2>Seva Booking Details</h2>
        <form id="bookingForm" action="spayment.php" method="post" onsubmit="return validateForm()">
    <input type="hidden" name="sevaName" value="<?php echo $_POST['sevaName']; ?>">
    <input type="hidden" name="sevaTime" value="<?php echo $_POST['sevaTime']; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="photoId">Photo ID:</label>
            <select id="photoId" name="photoId" required>
                <option value="Aadhaar">Aadhaar</option>
                <option value="PAN">PAN</option>
                <option value="Passport">Passport</option>
            </select>
            
            <label for="photoIdNo">Photo ID Number:</label>
            <input type="text" id="photoIdNo" name="photoIdNo" required>
            
            <label for="selectedDate">Select Date:</label>
            <input type="date" id="selectedDate" name="selectedDate" required>
            
            <button type="submit" class="Btn">Confirm Booking</button>
        </form>
    </div>
    </div>
<script src="page2.js"></script>
</body>
</html>