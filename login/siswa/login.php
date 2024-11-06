<?php
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
</head>

<body>
    <div class="form-container">
        <div class="form-group">
            <h1>Form Login</h1>
            <form action="proses_login.php" method="post">
                <table>
                    <tr>
                        <th><input type="text" name="nis" placeholder="Masukkan email"><br></th>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" placeholder="Masukkan password"><br></td>
                    </tr>
                    <tr>
                        <td><a href="../forgot.php">Lupa password?</a></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Login</button></td>
                    </tr>
                    <tr>
                        <td><p class="bt-regis">Belum punya akun? <a href="registrasi.php">Daftar</a></p></td>
                    </tr>
                </table>
            </form>
            <!-- <p><a href="index.php">Back</a></p> -->
        </div>
    </div>
</body>
</html>