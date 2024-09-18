<!DOCTYPE html>
<html>
<head>
    <title>Switch Statement</title>
</head>
<body>

<h2>Switch Control Statement</h2>
<?php
$fruit = "apple";

switch ($fruit) {
    case "apple":
        echo "<p>Apples are red or green.</p>";
        break;
    case "banana":
        echo "<p>Bananas are yellow.</p>";
        break;
    case "orange":
        echo "<p>Oranges are orange.</p>";
        break;
    default:
        echo "<p>Unknown fruit.</p>";
}
?>

</body>
</html>