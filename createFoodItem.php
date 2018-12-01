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

if(isset($_POST['restaurantID'])) $restaurantID=$_POST['restaurantID'];
if(isset($_POST['description'])) $description=$_POST['description'];
if(isset($_POST['sweetAVG'])) $sweetAVG=$_POST['sweetAVG'];
if(isset($_POST['sourAVG'])) $sourAVG=$_POST['sourAVG'];
if(isset($_POST['saltyAVG'])) $saltyAVG=$_POST['saltyAVG'];
if(isset($_POST['bitterAVG'])) $bitterAVG=$_POST['bitterAVG'];
if(isset($_POST['umamiAVG'])) $umamiAVG=$_POST['umamiAVG'];
if(isset($_POST['spicyAVG'])) $spicyAVG=$_POST['spicyAVG'];

##Creates food item
mysqli_query($conn, "INSERT INTO foodItem (restaurantID, description, sweetAVG, sourAVG, saltyAVG, bitterAVG, umamiAVG, apicyAVG) VALUES ('$restaurantID', '$description', '$sweetAVG', '$sourAVG', '$saltyAVG', '$bitterAVG', '$umamiAVG', '$spicyAVG');");
echo "Food item created sucessfully.";

$conn->close();
?>