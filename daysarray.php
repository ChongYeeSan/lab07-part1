<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Days Array</title>
</head>
<body>
    <h1>Days of the week</h1>
<?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    echo "<p>The days of the week are: </p>";
    echo "<ul>";
    foreach ($days as $day) {
        echo "<li>$day</li>";
    }

    echo "</ul>";
?>
</body>
</html>