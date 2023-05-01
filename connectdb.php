<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

// Create a connection to the database
$connection = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "The connection was successful";
}
?>

