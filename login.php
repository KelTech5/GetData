<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $fullname, $hashed_password);
        $stmt->fetch();

        if ($password === $hashed_password) {
            header("Location: dashboard.php?name=" . urlencode($fullname));
            exit;
        } else {
            echo "❌ Invalid password! (Check if it's hashed in DB)";
        }
    } else {
        echo "❌ Email not found!";
    }
}
?>
