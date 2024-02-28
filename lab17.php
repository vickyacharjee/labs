<!DOCTYPE html>
<html>
<head>
    <title>Input Validation</title>
</head>
<body style="background-color:powderblue;">
    <h1>Input Validation</h1>

    <?php
    // Initialize variables
    $name = $email = $age = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo "Name can only contain letters and white spaces.<br>";
            $name = "";
        }

        // Validate email
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.<br>";
            $email = "";
        }

        // Validate age
        $age = test_input($_POST["age"]);
        if (!is_numeric($age) || $age < 1 || $age > 100) {
            echo "Age must be a number between 1 and 100.<br>";
            $age = "";
        }
    }

    // Function to sanitize user input
    function test_input($data) {
        $data = trim($data); // Remove whitespace
        $data = stripslashes($data); // Remove backslashes
        $data = htmlspecialchars($data); // Convert special characters to HTML entities
        return $data;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required value="<?php echo $name; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="<?php echo $email; ?>"><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="100" required value="<?php echo $age; ?>"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
