<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Save user data (you may want to store it in a database)
    $userData = array(
        'username' => $username,
        'password' => $hashedPassword
    );

    // In a real application, you would save $userData to a database
    // For simplicity, we will just display the information for now
    echo "User Registered Successfully!<br>";
    echo "Username: " . $userData['username'];
}
?>
