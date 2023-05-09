<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST["email"];
$password = sha1($_POST["password"]);

// Query the database for a user with matching email and password
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  // User is authenticated, redirect to a dashboard or homepage
  header("Location: crud.php");
  exit();
} else {
  // Invalid email or password, show an error message
  echo "Invalid email or password. Please try again.";
}

$conn->close();
?>
