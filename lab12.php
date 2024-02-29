<!DOCTYPE html>
<html>
<head>
<title>Search Data by Criteria</title>
</head>
<body style="background-color:powderblue;">
<h1>Search Data by Criteria</h1>
    <form method="post">
    <label for="criteria">Search Criteria:</label>
        <select id="criteria" name="criteria">
            <option value="name">Name</option>
            <option value="age">Age</option>
            <option value="city">City</option>
        </select>
    <input type="text" id="searchValue" name="searchValue">
    <input type="submit" value="Search">
    </form>
<?php
// Sample data array
$data = [
["name" => "John", "age" => 25, "city" => "New York"],
["name" => "Alice", "age" => 30, "city" => "Los Angeles"],
["name" => "Bob", "age" => 28, "city" => "Chicago"],
["name" => "Eve", "age" => 22, "city" => "San Francisco"],
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$criteria = $_POST["criteria"];
$searchValue = $_POST["searchValue"];
// Search and display results based on the selected criteria
echo "<h2>Search Results:</h2>";
foreach ($data as $item) {
if (isset($item[$criteria]) && strtolower($item[$criteria]) ==
strtolower($searchValue)) {
echo "Name: " . $item["name"] . "<br>";
echo "Age: " . $item["age"] . "<br>";
echo "City: " . $item["city"] . "<br><br>";
}
}

}
?>
</body>
</html>