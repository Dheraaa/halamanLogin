<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <h1>Halaman Registrasi</h1>
            <form action="prosesregis_admin.php" method="post">
                <table>
                    <tr>
                        <td><input type="email" name="email" placeholder="Email"><br></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" placeholder="Password"><br></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Daftar</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="bt-regis">Sudah punya akun? <a href="login_admin.php">Login</a></p>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>