<!DOCTYPE html>
<html>
<head>
    <title>Do-While Loop</title>
</head>
<body>

<h2>Do-While Loop Example</h2>
<?php
$count = 1;

echo "<ul>";
do {
    echo "<li>This is count $count</li>";
    $count++;
} while ($count <= 3);
echo "</ul>";
?>

</body>
</html>
