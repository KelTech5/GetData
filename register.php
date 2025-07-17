<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = htmlspecialchars(trim($_POST['fullname']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check required fields
    if (!$fullname || !$email || !$phone || !$password || !$confirm_password) {
        echo "⚠️ All fields are required!";
        exit;
    }

    // Check password match
    if ($password !== $confirm_password) {
        echo "⚠️ Passwords do not match!";
        exit;
    }

    // Hash password
   $plain_password = $_POST['password'];


    // Handle profile image
    $profile_image = $_FILES['profile_image']['name'];
    $temp_img = $_FILES['profile_image']['tmp_name'];
    $img_folder = 'uploads/';
    $img_path = $img_folder . basename($profile_image);

    // Check if email already exists
    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "❌ Email already registered!";
    } else {
        // Move uploaded image
        if (!is_dir($img_folder)) {
            mkdir($img_folder, 0755, true);
        }
        move_uploaded_file($temp_img, $img_path);

        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (fullname, email, phone, password, profile_image) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fullname, $email, $phone, $plain_password, $profile_image);

        if ($stmt->execute()) {
            header("Location: dashboard.php?name=" . urlencode($fullname));
            exit;
        } else {
            echo "❌ Registration failed. Try again.";
        }
    }
}
?>
