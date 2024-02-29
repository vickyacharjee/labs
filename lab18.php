<html> 
<head> 
    <title>Cookie Handler</title> 
</head> 
<body> 
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        setcookie("username", $_POST['username'], time() + (10*30), "/");
        echo "<p>Cookie set. Reload the page to see the cookie value.</p>";
    }

    if (isset($_COOKIE["username"])) { 
        echo "<p>Welcome Back, " . htmlspecialchars($_COOKIE["username"]) . "!</p>"; 
    } else { 
        echo "<p>Welcome, Guest!</p>"; 
    } 
    ?> 

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
        <label for="username">Enter Your Name: </label><br> 
        <input type="text" id="username" name="username"><br> 
        <input type="submit" value="Set Cookie"> 
    </form> 
</body> 
</html>
