<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect or display an error message if the user is not logged in
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
       body {
            margin: 0; /* Remove default margin */
            font-family: Arial, sans-serif;
            background-image: url('welcome.png'); /* Replace with the correct path to your image */
            background-color: #f4f4f4; /* Or any other desired background color */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Set height to 100% of viewport height */
            overflow: hidden; /* Hide overflow content */
        }
        .white-text {
            color: white; 
        }
        header {
    display: none; 
}


h1 {
    margin: 0;
    font-size: 40px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
    color: white; 
}


        .container {
            max-width: 400px;
            margin: 20px auto;
          
          
            border-radius: 5px;
            padding: 20px;
        }
        
        h2 {
            text-align: center;
        }
        p {
            text-align: center;
        }

        
.cv-button {
    background-color: #28a745; 
}

.projects-button {
    background-color: #17a2b8; 
}

.youtube-button {
    background-color: #ff0000; 
}

.instagram-button {
    background-color: #e1306c; 
}

.facebook-button {
    background-color: #3b5998; 
}

.maps-button {
    background-color: #ffc107; 
}

.logout-button {
    background-color: #dc3545;
}


.profile-button {
    display: inline-block;
    padding: 12px 24px;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    transition: all 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    margin-bottom: 10px;
}

.my-profile-title {
    text-align: center;
    font-size: 36px;
    color: #007BFF;
    margin-top: 30px;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}


.profile-button:hover, .profile-button:focus {
    color: #e2e2e2;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    transform: translateY(-2px);
}

.welcome-text {
    text-align: center;
    font-size: 28px; 
    color: #007BFF; 
    font-weight: bold;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); 
    margin-top: 20px; 
    transition: transform 0.3s ease, color 0.3s ease; 
}

.welcome-text:hover {
    transform: scale(1.05); 
    color: #0056b3; 
}

.email-text {
    text-align: center;
    font-size: 24px; 
    color: #28a745; 
    font-weight: bold;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); 
    margin-top: 10px; 
    transition: transform 0.3s ease, color 0.3s ease; 
}

.email-text:hover {
    transform: scale(1.03); 
    color: #1d5632; 
}

    </style>
</head>
<body>
<header>
    <h1>My Profile</h1>
</header>
<div class="my-profile-title">
    <h1>My Profile</h1>
</div>

    <h2 class="welcome-text">Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p class="email-text">Your email: <?php echo $_SESSION['email']; ?></p>

<div style="text-align: center;padding-bottom: 10px;">
    <a href="CV Radu Vlad.pdf" download class="profile-button cv-button">Download CV</a>
</div>
<div style="text-align: center;padding-bottom: 10px;">
    <a href="https://github.com/vladvm2?tab=repositories" class="profile-button projects-button">My projects</a>
</div>
   
<div style="text-align: center;padding-bottom: 10px;">
    <a href="https://www.youtube.com/channel/UCMoskVPvnmJ9LohKl4g05Og" class="profile-button youtube-button">My YouTube Channel</a>
</div>
<div style="text-align: center;padding-bottom: 10px;">
    <a href="https://www.instagram.com/vlad_vwm/" class="profile-button instagram-button">Instagram</a>
</div>
<div style="text-align: center;padding-bottom: 10px;">
    <a href="https://www.facebook.com/vladmihai.radu/" class="profile-button facebook-button">Facebook</a>
</div>
<div style="text-align: center;">
    <a href="landing.html" class="profile-button maps-button">Maps</a>
</div>
<div style="text-align: center; padding-top: 20px;">
    <a href="logout.php" class="profile-button logout-button">Log Out</a>
</div>

</div>
</body>
</html>