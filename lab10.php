<!DOCTYPE html>
<html>
<head>
    <title>Remove Duplicates from Sorted List</title>
</head>
<body style="background-color: powderblue;">
    <h1>Remove Duplicates from Sorted List</h1>
    <p>Original sorted list:</p>

    <?php
    // Original sorted list with duplicates
    $sortedList = array(1, 2, 2, 3, 4, 4, 4, 5, 6, 6, 7, 8, 8);

    // Function to remove duplicates from a sorted list
    function removeDuplicates($arr) {
        $result = array();
        $n = count($arr);

        if ($n == 0) {
            return $result;
        }

        // Add the first element to the result array
        $result[] = $arr[0];

        // Compare each element with the previous element
        for ($i = 1; $i < $n; $i++) {
            if ($arr[$i] != $arr[$i - 1]) {
                $result[] = $arr[$i];
            }
        }

        return $result;
    }

    // Call the function to remove duplicates
    $uniqueList = removeDuplicates($sortedList);

    // Display the original list and the list with duplicates removed
    echo "Original List: " . implode(", ", $sortedList) . "<br>";
    echo "List with Duplicates Removed: " . implode(", ", $uniqueList);
    ?>
</body>
</html>
