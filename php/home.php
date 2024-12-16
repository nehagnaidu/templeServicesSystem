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
    <link rel="stylesheet" href="home.css">
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
    <div class="img-section">
        <img src="Swamyy.jpg">
    </div>
    <div class="text">
        Lord Kapileshwar Swamy with his consort.
    </div>
    <section class="services-section">
        <div class="partition">
            --- Devotee Services ---
        </div>
        <div class="service-container">
            <div class="darshan-container">
                <a href="darshan.php" class="service-link">
                    <i class="fa-solid fa-gopuram fa-3x"></i>
                    <p>Darshan Booking</p>
                </a>
            </div>
            <div class="seva-container">
                <a href="seva.php" class="service-link">
                    <i class="fas fa-praying-hands fa-3x"></i>
                    <p>Seva Booking</p>
                </a>
            </div>
            <div class="accom-container">
                <a href="accommodation.php" class="service-link">
                    <i class="fa-solid fa-hotel fa-3x"></i>
                    <p>Accommodation</p>
                </a>
            </div>
        </div>
    </section>

    <section class="places-section">
        <div class="head"><u>--- Nearby Places to Visit ---</u></div>
        <div class="places-grid">
            <div class="place-box">
                <div class="image-container">
                    <img src="p1.jpg" alt="Sri Venkateswara Temple">
                    <div class="hover-content">
                        <ul>
                            <li><strong>Location:</strong> Tirumala, Andhra Pradesh, India</li>
                            <li><strong>Significance:</strong> One of the richest and most visited temples in the world</li>
                            <li><strong>Deity:</strong> Lord Venkateswara</li>
                            <li><strong>Festivals:</strong> Brahmotsavam and other important festivals</li>
                        </ul>
                    </div>
                    <div class="place-name">Sri Venkateswara Temple</div>
                </div>
            </div>
            <div class="place-box">
                <div class="image-container">
                    <img src="p6.jpg" alt="Srikalahasti Temple">
                    <div class="hover-content">
                        <ul>
                            <li><strong>Location:</strong> Srikalahasti, Andhra Pradesh, India</li>
                            <li><strong>Significance:</strong> One of the Panchabhoota Sthalams, representing the element of air (Vayu)</li>
                            <li><strong>Deity:</strong> Lord Shiva as Kalahasteeswara</li>                        
                            <li><strong>Festivals:</strong> Maha Shivaratri, Brahmotsavam</li>
                        </ul>
                    </div>
                    <div class="place-name">Srikalahasti Temple</div>
                </div>
            </div>
            <div class="place-box">
                <div class="image-container">
                    <img src="p3.jpg" alt="Iskon Tirupati">
                    <div class="hover-content">
                        <ul>
                            <li><strong>Location:</strong> Tirupati, Andhra Pradesh, India</li>
                            <li><strong>Significance:</strong> Promotes the teachings of Bhagavad Gita</li>
                            <li><strong>Deity:</strong> Lord Krishna</li>
                            <li><strong>Established:</strong> 1982</li>
                        </ul>
                    </div>
                    <div class="place-name">Iskon Tirupati</div>
                </div>
            </div>
            <div class="place-box">
                    <div class="image-container">
                        <img src="p4.jpg" alt="Sri Govindarajaswamy Temple">
                        <div class="hover-content">
                            <ul>
                                <li>Location:</strong> Tirupati, Andhra Pradesh, India</li>
                                <li>Deity:</strong> Lord Govindarajaswamy</li>
                                <li>Significance:</strong> One of the most important temples in Tirupati</li>
                                <li>Festivals:</strong> Annual Brahmotsavam</li>
                            </ul>
                        </div>
                    </div>
                    <div class="place-name">Sri Govindarajaswamy Temple</div>
                </div>
                <div class="place-box">
                    <div class="image-container">
                        <img src="p5.jpg" alt="Sri Padmavati Ammavaari Temple">
                        <div class="hover-content">
                            <ul>
                                <li>Location:</strong> Tiruchanur, Andhra Pradesh,<br>India</li>
                                <li>Deity:</strong> Goddess Padmavati</li>
                                <li>Significance:</strong> Consort of Lord Venkateswara</li>
                                <li>Festivals:</strong> Kartheeka Brahmotsavam, Panchami Teertham</li>
                            </ul>
                        </div>
                    </div>
                    <div class="place-name">Sri Padmavati Ammavaari Temple</div>
                </div>
                <div class="place-box">
                    <div class="image-container">
                        <img src="p2.jpg" alt="Sri Venkateswara Zoological Park">
                        <div class="hover-content">
                            <ul>
                                <li>Location:</strong> Tirupati, Andhra Pradesh,<br>India</li>
                                <li>Significance:</strong> Largest zoological park in Asia</li>
                                <li>Flora and Fauna:</strong> Home to a wide variety of species</li>
                                <li>Conservation Efforts:</strong> Focus on endangered species</li>
                                <li>Established:</strong> 1987</li>
                            </ul>
                        </div>
                    </div>
                    <div class="place-name">Sri Venkateswara Zoological Park</div>
                </div>
            </div>
        </div>
        </section>
    
    <script src="dem.js"></script>
    
    <footer>
        <p>&copy; Sri Kapileshwara Swamy Vari Temple. All rights reserved.</p>
    </footer>
</body>
</html>
