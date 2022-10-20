<?php
session_start();
if(!empty($_SESSION['username_xyz'])){
    header("location:dashboard.php");
    exit();
}
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="hasillogin.php" method="post">
            Username : <input type="text" name="username" size="35" maxlength="50"><br>
            Password : <input type="password" name="password" size="35" maxlength="50"><br>
            <input type="submit" value="Login">
            <a href="register.html">Belum punya akun? Daftar disini</a></a>
        </form>
    </body>
</html>