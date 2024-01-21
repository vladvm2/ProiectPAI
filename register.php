<?php
// Include your database configuration file (config.php)
include('config.php');

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user registration data from the form
    $newUsername = $_POST['newUsername'];
    $newEmail = $_POST['newEmail'];
    $newPassword = $_POST['newPassword'];
    $filea = $_REQUEST["filea"];
    
    // Hash the user's password for security
    $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

    // Prepare and bind the statement for user registration
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $newUsername, $newEmail, $hashedPassword);

    // Attempt to execute the prepared statement
    if ($stmt->execute()) {
        // Registration was successful

        // Prepare the email
        $to = $newEmail; // Send the email to the registered user
        $subject = "Account Creation Successful";
        $message = "Your account has been successfully created.";
        $headers = "From: webmaster@example.com\r\n";
        $headers .= "Reply-To: webmaster@example.com\r\n";
        $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

        // Send the email
        if(mail($to, $subject, $message, $headers)) {
            echo "Account created successfully. Email sent.";
        } else {
            echo "Account created, but email could not be sent.";
        }

        // Redirect the user to a login page
        header("Location: login.html"); // Replace with the actual login page URL
    } else {
        // Registration failed, display an error message
        echo "Registration failed. Please try again.";
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>
