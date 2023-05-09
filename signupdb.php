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
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = sha1($_POST["password"]);
$gender = $_POST["Gender"];

// Insert form data into table
$sql = "INSERT INTO users (firstname, lastname, email, password, gender)
VALUES ('$firstname', '$lastname', '$email', '$password', '$gender')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: login.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
