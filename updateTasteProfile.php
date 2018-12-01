<?php
$servername = "localhost";
$username = "yeet";
$password = "a";
$dbname = "tasteBuddy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

##Updates taste profile
mysqli_query($conn, "UPDATE tasteProfile SET sweetPercent = (SELECT AVG sweetPercent FROM tasteProfile);");
mysqli_query($conn, "UPDATE tasteProfile SET saltyPercent = (SELECT AVG saltyPercent FROM tasteProfile);");
mysqli_query($conn, "UPDATE tasteProfile SET sourPercent = (SELECT AVG sourPercent FROM tasteProfile);");
mysqli_query($conn, "UPDATE tasteProfile SET bitterPercent = (SELECT AVG bitterPercentPercent FROM tasteProfile);");
mysqli_query($conn, "UPDATE tasteProfile SET umamiPercent = (SELECT AVG umamiPercentPercent FROM tasteProfile);");
mysqli_query($conn, "UPDATE tasteProfile SET spicyPercent = (SELECT AVG spicyPercent FROM tasteProfile);");

echo "Taste Profile Updated Sucessfully.";

$conn->close();
?>