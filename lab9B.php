<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series Generator</title>
</head>
<body style="background-color: powderblue;">
    <h1>Fibonacci Series Generator</h1>
    <p>First 10 numbers in the Fibonacci series:</p>

    <?php
    $num1 = 0;
    $num2 = 1;
    $count = 10; // Number of Fibonacci numbers to generate

    for ($i = 1; $i <= $count; $i++) {
        echo $num1 . " ";

        // Update $num1 and $num2 for the next iteration
        $next = $num1 + $num2;
        $num1 = $num2;
        $num2 = $next;
    }
    ?>
</body>
</html>
