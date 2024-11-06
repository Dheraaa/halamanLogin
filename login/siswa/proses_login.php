<?php
include '../koneksi.php';
session_start();

if (isset($_SESSION['nis'])) {
    header("Location: berhasil_login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
    $password = hash('sha256', $_POST['password']);


    $sql = "SELECT * FROM siswa WHERE nis='$nis' AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nis'] = $row['password'];
        header("Location: berhasil_login.php");
        exit();
    } else {
        echo "<script>alert('nis atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
header("Location: berhasil_login.php");