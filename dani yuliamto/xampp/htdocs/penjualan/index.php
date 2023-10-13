<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login Menggunakan PHP dan MySQL</title>
</head>
<body>
    <h1>Membuat halaman login dengan PHP dan MySQL</h1>
    <h3>Login Disini</h3>
    <form action="proses-login.php" method="post ">
        <table>
            <tr>
                <td>Username</td> <br>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td> <br>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Masuk"></td>
            </tr>
        </table>
    </form>
</body>
</html>