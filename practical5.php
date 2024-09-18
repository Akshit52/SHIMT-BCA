<!-- Write a PHP program to display the today’s date and current time. -->
<?php
// Get today's date and current time
$date = date('l, F j, Y');  // Example: "Tuesday, September 17, 2024"
$time = date('h:i:s A');    // Example: "03:45:12 PM"

// Display the date and time
echo "Today's Date: $date <br>";
echo "Current Time: $time";
?>