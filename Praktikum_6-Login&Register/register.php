<?php
session_start();
if(!empty($_SESSION['username_abc'])){
    header("location:login.php");
    exit();
}
?>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <form action="prosesregister.php" method="post">
            <table border="0">
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" size="35" maxlength="50"><br></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" size="35" maxlength="50"><br></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="confirmpassword" size="35" maxlength="50"><br></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" size="35" maxlength="50"><br></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas" size="35" maxlength="50"><br></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" size="35" maxlength="50"><br></td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td><input type="text" name="ipk" size="35" maxlength="50"><br></td>
                </tr>
            </table>
            <input type="submit" value="Simpan">
        </form>
    </body>
</html>