<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <h1>Form Daftar</h1>
            <form action="proses_registrasi.php" method="post">
                <table>
                    <tr>
                        <td><input type="text" name="nis" placeholder="Nis"><br></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" placeholder="Password"><br></td>
                    </tr>
                    <!-- <tr>
                        <td><label for="role">Daftar sebagai :</label>
                            <select id="role" name="role">
                                <option value="super_admin">Super Admin</option>
                                <option value="admin">Admin</option>
                                <option value="siswa">Siswa</option>
                            </select>
                        </td>
                    </tr> -->
                    <tr>
                        <td><button type="submit">Daftar</button></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="bt-regis">Sudah punya akun? <a href="login.php">Login</a></p>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>