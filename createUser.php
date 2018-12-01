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

if(isset($_POST['userName'])) $userName=$_POST['userName'];
if(isset($_POST['userEmail'])) $userEmail=$_POST['userEmail'];
if(isset($_POST['firstName'])) $firstName=$_POST['firstName'];
if(isset($_POST['lastName'])) $lastName=$_POST['lastName'];

##Creates user
mysqli_query($conn, "INSERT INTO user (userName, userEmail, firstName, lastName) VALUES ('$userName', '$userEmail', '$firstName', '$lastName');");

echo "User account created sucessfully.";

$conn->close();
?>