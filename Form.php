<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>User Registration By <b>VICKY </b></h2>
        <form id="registrationForm" action="register.php" method="post" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <button type="submit">Register</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
