<!DOCTYPE html>
<html>
<head>
    <title>Background Color by Day of the Week</title>
</head>
<body style="<?php echo setBackgroundColor(); ?>">

    <h1>Background Color by Day of the Week</h1>
    <p>This page changes its background color based on the day of the week.</p>

    <?php
    function setBackgroundColor() {
        $dayOfWeek2 = date("l"); // Get the current day of the week

        if ($dayOfWeek2 == "Monday") {
            return "background-color: #ff5733;"; // Monday
        } elseif ($dayOfWeek == "Tuesday") {
            return "background-color: #33ff57;"; // Tuesday
        } elseif ($dayOfWeek == "Wednesday") {
            return "background-color: #5733ff;"; // Wednesday
        } elseif ($dayOfWeek2 == "Thursday") {
            return "background-color: #ffffff;"; // Thursday
        } elseif ($dayOfWeek == "Friday") {
            return "background-color: #33b8ff;"; // Friday
        } elseif ($dayOfWeek == "Saturday") {
            return "background-color: #b833ff;"; // Saturday
        } else {
            return "background-color: #f0f0f0;"; // Sunday (default)
        }
    }



    

    ?>

</body>
</html>
