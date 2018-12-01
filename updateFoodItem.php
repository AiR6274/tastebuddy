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

if(isset($_POST['sweetPercent'])) $sweetPercent=$_POST['sweetPercent'];
if(isset($_POST['saltyPercent'])) $saltyPercent=$_POST['saltyPercent'];
if(isset($_POST['sourPercent'])) $sourPercent=$_POST['sourPercent'];
if(isset($_POST['bitterPercent'])) $bitterPercent=$_POST['bitterPercent'];
if(isset($_POST['umamiPercent'])) $umamiPercent=$_POST['umamiPercent'];
if(isset($_POST['spicyPercent'])) $spicyPercent=$_POST['spicyPercent'];
if(isset($_POST['food'])) $food=$_POST['food'];

#Updates food item
mysqli_query($conn, "UPDATE foodItem SET sweetPercent = (SELECT COUNT (sweetPercent) FROM foodItem) + '$sweetPercent' / ((SELECT COUNT (sweetPercent) FROM foodItem) + 1) WHERE foodItem.restaurantID = 'food';");
mysqli_query($conn, "UPDATE foodItem SET saltyPercent = (SELECT COUNT (saltyPercent) FROM foodItem) + '$saltyPercent' / ((SELECT COUNT (saltyPercent) FROM foodItem) + 1) WHERE foodItem.restaurantID = 'food';");
mysqli_query($conn, "UPDATE foodItem SET sourPercent = (SELECT COUNT (sourPercent) FROM foodItem) + '$sourPercent' / ((SELECT COUNT (sourPercent) FROM foodItem) + 1) WHERE foodItem.restaurantID = 'food';");
mysqli_query($conn, "UPDATE foodItem SET bitterPercent = (SELECT COUNT (bitterPercent) FROM foodItem) + '$bitterPercent' / ((SELECT COUNT (bitterPercent) FROM foodItem) + 1) WHERE foodItem.restaurantID = 'food';");
mysqli_query($conn, "UPDATE foodItem SET umamiPercent = (SELECT COUNT (umamiPercent) FROM foodItem) + '$umamiPercent' / ((SELECT COUNT (umamiPercent) FROM foodItem) + 1) WHERE foodItem.restaurantID = 'food';");
mysqli_query($conn, "UPDATE foodItem SET spicyPercent = (SELECT COUNT (spicyPercent) FROM foodItem) + '$spicyPercent' / ((SELECT COUNT (spicyPercent) FROM foodItem) + 1) WHERE foodItem.restaurantID = 'food';");

echo "Food item updated sucessfully.";

$conn->close();
?>