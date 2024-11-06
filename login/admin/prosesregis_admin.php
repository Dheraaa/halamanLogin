<?php

include '../koneksi.php';

// Validate and sanitize input
if (empty($email) || empty($password)) {
    die("Email and password are required.");
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare an SQL statement
$stmt = $koneksi->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $hashed_password);

if ($stmt->execute()) {
    header("Location: proses_registrasi.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$koneksi->close();