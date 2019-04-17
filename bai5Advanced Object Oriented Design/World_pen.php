<?php
$servername = "http://localhost:8080/phpmyadmin";
$username = "root";
$database = "vien";
$password = "";
//  Create a new connection to the MySQL database using PDO
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>