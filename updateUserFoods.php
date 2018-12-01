<?php
$servername = "localhost";
$username = "yeet";
$password = "a";
$dbname = "TasteBuddy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['sweet'])) $sweet=$_POST['sweet'];
if(isset($_POST['salty'])) $salty=$_POST['salty'];
if(isset($_POST['bitter'])) $bitter=$_POST['bitter'];
if(isset($_POST['sour'])) $sour=$_POST['sour'];
if(isset($_POST['umami'])) $umami=$_POST['umami'];
if(isset($_POST['spicy'])) $spicy=$_POST['spicy'];
if(isset($_POST['food'])) $food=$_POST['food'];

##Updates user foods
mysqli_query($conn, "UPDATE userFoods SET sweet = '$sweet', salty = '$salty', bitter = '$bitter', sour = '$sour', umami = '$umami', spicy = '$spicy' WHERE name = '$food';");
echo "Updated sucessfully";

$conn->close();
?>