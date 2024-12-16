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
    <link rel="stylesheet" href="seva.css?v=1.0">
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
    <div class="sevaContainer">
        <div class="seva-container1">
            <div class="seva">
                <div class="head">Suprabhatam</div>
                <div class="content">Early Morning ritual performed to wake  <br>
                    up Lord from his celestial sleep using <br>chanting of vedic hymns.</div>
                <div class="clock"><i class="fa-solid fa-clock"></i><a class="time">5:00 AM to 5:30 AM</a></div>
                <form action="sevaDetails.php" method="POST">
                    <input type="hidden" name="sevaName" value="Suprabhatam">
                    <input type="hidden" name="sevaTime" value="5:00 AM to 5:30 AM">
                    <button class="Btn" type="submit" onclick="showAlert()">Book Now</button>
                </form>
            </div>
            <div class="seva1">
                <div class="head">Abhishekam</div>
                <div class="content">Ritual where priests perform<br> Lord's celestial bath while<br>chanting mantras and making offerings.
                    </div>
                <div class="clock"><i class="fa-solid fa-clock"></i><a class="time">5:30 AM to 6:30 AM</a></div>
                <form action="sevaDetails.php" method="POST">
                    <input type="hidden" name="sevaName" value="Abhishekam">
                    <input type="hidden" name="sevaTime" value="5:30 AM to 6:30 AM">
                    <button class="Btn" type="submit" onclick="showAlert()">Book Now</button>
                </form>
            </div>
            <div class="seva1">
                <div class="head">Sarvadarshnam</div>
                <div class="content">Pilgrims can wait in line<br> to see Lord without<br>ticket.</div>
                <div class="clock"><i class="fa-solid fa-clock"></i><a class="time">8:00 AM to 11:00 AM</a></div>
                <form action="sevaDetails.php" method="POST">
                    <input type="hidden" name="sevaName" value="Sarvadarshnam">
                    <input type="hidden" name="sevaTime" value="8:00 AM to 11:00 AM">
                    <button class="Btn" type="submit" onclick="showAlert()">Book Now</button>
                </form>
            </div>
            <div class="seva1">
                <div class="head">Sarvadarshnam</div>
                <div class="content">Pilgrims can wait in line<br> to see Lord without<br>ticket.</div>
                <div class="clock"><i class="fa-solid fa-clock"></i><a class="time">11:30 AM to 4:00 PM</a></div>
                <form action="sevaDetails.php" method="POST">
                    <input type="hidden" name="sevaName" value="Sarvadarshnam">
                    <input type="hidden" name="sevaTime" value="11:00 AM to 4:00 PM">
                    <button class="Btn" type="submit" onclick="showAlert()">Book Now</button>
                </form>
            </div>
            </div>
            
            <div class="seva-container2">
                <div class="seva">
                    <div class="head">Abhishekam</div>
                    <div class="content">Ritual where priests perform<br> Lord's celestial bath while<br>chanting mantras and making offerings.
                        </div>
                    <div class="clock"><i class="fa-solid fa-clock"></i><a class="time">4:00 PM to 4:30 PM</a></div>
                    <form action="sevaDetails.php" method="POST">
                    <input type="hidden" name="sevaName" value="Abhishekam">
                    <input type="hidden" name="sevaTime" value="4:00 PM to 4:30 PM">
                    <button class="Btn" type="submit" onclick="showAlert()">Book Now</button>
                </form>
                </div>
                <div class="seva1">
                    <div class="head">Deeparadhana</div>
                    <div class="content">Ritual where priests perform<br> daily aarti by chanting<br> mantras and making offerings.
                        </div>
                    <div class="clock"><i class="fa-solid fa-clock"></i><a class="time">6:00 PM to 6:30 PM</a></div>
                    <form action="sevaDetails.php" method="POST">
                    <input type="hidden" name="sevaName" value="Deeparadharna">
                    <input type="hidden" name="sevaTime" value="6:00 PM to 6:30 PM">
                    <button class="Btn" type="submit" onclick="showAlert()">Book Now</button>
                </form>
                </div>
                <div class="seva1">
                    <div class="head">Sarvadarshnam</div>
                    <div class="content">Pilgrims can wait in line<br> to see Lord without<br>ticket.</div>
                    <div class="clock"><i class="fa-solid fa-clock"></i><a class="time">6:30 PM to 8:00 PM</a></div>
                    <form action="sevaDetails.php" method="POST">
                    <input type="hidden" name="sevaName" value="Sarvadarshnam">
                    <input type="hidden" name="sevaTime" value="6:30 PM to 8:30 PM">
                    <button class="Btn" type="submit" onclick="showAlert()">Book Now</button>
                </form>
                </div>
                <div class="seva1">
                    <div class="head">Ekantha Seva</div>
                    <div class="content">Ekantha Seva is the last ritual<br> among the daily sevas. </div>
                    <div class="clock"><i class="fa-solid fa-clock"></i><a class="time">8:00 PM to 8:15 PM</a></div>
                    <form action="sevaDetails.php" method="POST">
                    <input type="hidden" name="sevaName" value="EkanthaSeva">
                    <input type="hidden" name="sevaTime" value="8:00 PM to 8:15 PM">
                    <button class="Btn" type="submit" onclick="showAlert()">Book Now</button>
                </form>
                </div>
            </div>
        </div>
        <script>
            function showAlert() {
                alert("Your seva has been booked successfully!");
            }
        </script>        
        <footer>
            <p>&copy; Sri Kapileshwara Swamy Vari Temple. All rights reserved.</p>
        </footer>
</body>
</html>