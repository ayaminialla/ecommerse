<?php
include '../includes/db.php';

// Create new admin
$email = "admin@example.com";
$password = "admin123"; // your desired password
$role = "admin";

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert into database
$stmt = $conn->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, ?)");
$stmt->execute([$email, $hashed_password, $role]);

echo "Admin created successfully!";
?>

