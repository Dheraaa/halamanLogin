<?php

include '../koneksi.php';

// Validate and sanitize input
if (empty($nis) || empty($password)) {
    die("NIS and password are required.");
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare an SQL statement
$stmt = $koneksi->prepare("INSERT INTO siswa (nis, password) VALUES (?, ?)");
$stmt->bind_param("ss", $nis, $hashed_password);

if ($stmt->execute()) {
    header("Location: proses_registrasi.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$koneksi->close();