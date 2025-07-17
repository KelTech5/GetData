<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "user_system";

$conn = new mysqli($host, $user, $pass, $dbname);

$stmt = $conn->prepare("INSERT INTO users (fullname, email, phone, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullname, $email, $phone, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
