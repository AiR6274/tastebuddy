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

if(isset($_POST['phoneNum'])) $phoneNum=$_POST['phoneNum'];
if(isset($_POST['restaurantName'])) $restaurantName=$_POST['restaurantName'];
if(isset($_POST['zipCode'])) $zipCode=$_POST['zipCode'];
if(isset($_POST['style'])) $style=$_POST['style'];


##Creates restaurant
mysqli_query($conn, "INSERT INTO restaurant (phoneNum, restaurantName, zipCode, style) VALUES ('$phoneNum', '$restaurantName', '$zipCode', '$style');");
echo "Restaurant entered sucessfully.";

$conn->close();
?>