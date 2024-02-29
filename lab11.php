<!DOCTYPE html>
<html>
<head>
    <title>Print Pattern</title>
</head>
<body style="background-color: powderblue;">
    <h1>Pattern:</h1>

    <?php
    $rows = 5; // Number of rows in the pattern

    for ($i = $rows; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>

</body>
</html>
