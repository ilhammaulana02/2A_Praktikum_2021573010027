<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <?php
            $username = $_POST["username"];
            $password = md5($_POST["password"]);
            $confirmpassword = md5($_POST["confirmpassword"]);
            $nama = $_POST["nama"];
            $kelas = $_POST["kelas"];
            $alamat = $_POST["confirmpassword"];
            $ipk = $_POST["confirmpassword"];
            if(empty($username) || empty($password) || empty($confirmpassword)){
                echo "Mohon maaf, anda harus mengisi username dan password";
            }elseif($password != $confirmpassword){
                echo "Harap mengisi password yang sama";
            }
            else{ 
                $conn = mysqli_connect("localhost","root","","db_2022_kelas2a");
                $query = mysqli_query($conn,"INSERT INTO tb_mahasiswa (nim,password,nama,kelas,alamat,ipk)
                VALUES ('$username','$password','$nama','$kelas','$alamat','$ipk')");
                if($query){
                    echo "Selamat anda berhasil mendaftar <a href='index.php'>Login</a>";
                }else{
                    echo "<script>alert('Anda gagal register')</script>";
                }
            }
        ?>
    </body>
</html>