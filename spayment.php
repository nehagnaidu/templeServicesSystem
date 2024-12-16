<?php
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;

// Retrieve the form data from the booking page
$name = isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$photo_id_type = isset($_POST['photoId']) ? $_POST['photoId'] : '';
$photo_id_no = isset($_POST['photoIdNo']) ? $_POST['photoIdNo'] : '';
$sevaName = isset($_POST['sevaName']) ? $_POST['sevaName'] : '';
$sevaTime = isset($_POST['sevaTime']) ? $_POST['sevaTime'] : '';
$price = 500; // Example price in INR
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="spayment.css?v=1.0">
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
    <div class="payment-summary">
        <h4>Booking Summary</h4>
        <p>Service: Seva</p>
       <p>Price: ₹<?php echo $price; ?></p>
        <p>Seva Name: <?php echo $sevaName; ?></p>
        <p>Timing:<?php echo $sevaTime; ?></p>
                        
    </div>
        <!-- Payment Form -->
        <form action="seva.php" method="post">
            <!-- Pass the booking details to the payment processing page -->
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
            <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
            <input type="hidden" name="photoId" value="<?php echo htmlspecialchars($photo_id_type); ?>">
            <input type="hidden" name="photoIdNo" value="<?php echo htmlspecialchars($photo_id_no); ?>">
            <input type="hidden" name="sevaName" value="<?php echo htmlspecialchars($sevaName); ?>">
            <input type="hidden" name="sevaTime" value="<?php echo htmlspecialchars($sevaTime); ?>">
            <input type="hidden" id="price-input" name="price" value="<?php echo $price; ?>">

            <div class="payment-container">
            <h4>Choose a Payment Method:</h4>
            <form action="process_payment.php" method="post" id="payment-form">
        <!-- Initial Payment Method Selection -->
        <div class="payment-methods">
            <br><label>
                <input type="radio" name="payment-type" value="debit" onclick="showOptions('card-options')">
                Debit Card
            </label><br>
            <br><label>
                <input type="radio" name="payment-type" value="credit" onclick="showOptions('card-options')">
                Credit Card
            </label>
        </div>

        <!-- Card Options -->
        <div id="card-options" class="options" style="display:none;">
            <br><label>
                <input type="radio" name="payment-method" value="visa" onclick="showForm('card-form')">
                <img src="visa.jpg" alt="Visa" class="logo">
            </label><br>
            <br><label>
                <input type="radio" name="payment-method" value="mastercard" onclick="showForm('card-form')">
                <img src="mastercard.jpg" alt="MasterCard" class="logo">
            </label><br>
        </div>

        <!-- Card Details Form -->
        <div id="card-form" class="card-details" style="display:none;">
            <div class="input-group">
                <input type="text" name="first-name" placeholder="First Name" required>
                <input type="text" name="last-name" placeholder="Last Name" required>
            </div>
            <div class="input-group">
                <input type="text" name="card-number" placeholder="Credit Card Number" maxlength="16" required>
                <input type="text" name="cvc" placeholder="CVC" maxlength="3" required>
            </div>
            <div class="input-group">
                <input type="text" name="expiry" placeholder="MM / YY" required>
            </div>
        </div>

        <!-- Pay Now Button -->
        <button type="submit" class="submit-button" id="submit-button" style="display:none;">Pay Now</button>
    </form>
</div>
<script src="ascript.js"></script>
</body>
</html>
