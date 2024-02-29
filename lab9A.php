<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Generator</title>
</head>
<body style="background-color: powderblue;">
    <h1>Prime Number Generator</h1>
    <p>Prime numbers up to 100:</p>

    <?php
    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }

        return true;
    }

    for ($i = 2; $i <= 100; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
    ?>
</body>
</html>
