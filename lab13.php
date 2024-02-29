<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// session_start();
function generateCaptchaCode($length = 6) {
    // Define the characters that can be used in the CAPTCHA code
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    // Initialize the CAPTCHA code
    $captchaCode = '';

    // Generate a random CAPTCHA code of the specified length
    for ($i = 0; $i < $length; $i++) {
        $captchaCode .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $captchaCode;
}

// Example usage
$captcha = generateCaptchaCode();
echo "Generated CAPTCHA code: $captcha";

?>

    
</body>
</html>