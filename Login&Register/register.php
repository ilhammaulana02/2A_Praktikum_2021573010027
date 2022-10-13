<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <?php
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmpassword = $_POST["confirmpassword"];
            $conn = mysqli_connect("localhost","root","","db_2022_kelas2a")
            or die ("koneksi gagal");
            if(empty($username) && empty($password)){
                echo "Mohon maaf, anda harus mengisi username dan password";
            }elseif($password != $confirmpassword){
                echo "Harap mengisi password yang sama";
            }
            else{ 
                $hasil = mysqli_query($conn,"insert into tb_mahasiswa (nim,password)
                values ('$username','$password')");
                echo "Register berhasil dilakukan";
            }
        ?>
    </body>
</html>