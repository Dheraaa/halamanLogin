<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Lupa Password?</h1>
            <p>Masukkan email anda untuk reset password</p>
        </div>
        <div class="form-forgot">
            <form action="#">
                <table>
                    <tr>
                        <td><input type="text" name="email" placeholder="Masukkan email..."></td>
                    </tr>
                    <tr>
                        <td><button onclick="resetPassword()" type="submit">Kirim</button></td>
                    </tr>
                    <tr>
                        <td><a href="siswa/login.php">Kembali Ke Halaman Login</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script>
    function resetPassword() {
        alert("Kami sudah mengisi surei yang berisi tautan untuk mereset kata sandi Anda!");
    }
</script>
</body>
</html>