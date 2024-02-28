<!DOCTYPE html>
<html>
<head>
    <title>PHP Exception Handling</title>
</head>
<body>
    <h1>PHP Exception Handling</h1>

    <?php
    // Function for dividing two numbers
    function divide($numerator, $denominator) {
        if ($denominator == 0) {
            throw new Exception("Cannot divide by zero");
        }
        return $numerator / $denominator;
    }

    // Function for checking date format
    function checkDateFormat($dateString) {
        $dateFormat = 'Y-m-d';
        $dateObject = DateTime::createFromFormat($dateFormat, $dateString);

        if (!$dateObject || $dateObject->format($dateFormat) !== $dateString) {
            throw new Exception("Invalid date format. Please use the format 'YYYY-MM-DD'");
        }

        return true;
    }

    try {
        // Example 1: Divide by zero
        $result = divide(10, 0);
        echo "Result of division: $result"; // This line will not be executed due to the exception

    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage() . "<br>";
    }



    

    try {
        // Example 2: Check date format
        $dateString = "2022-02-30"; // Invalid date (February 30)
        $isValidDate = checkDateFormat($dateString);
        echo "Date is valid."; // This line will not be executed due to the exception

    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage() . "<br>";
    }
    ?>

</body>
</html>
