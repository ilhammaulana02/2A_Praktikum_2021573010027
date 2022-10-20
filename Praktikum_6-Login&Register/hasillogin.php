<?php
session_start();
if(empty($_SESSION['username_xyz'])){
    header("location:dashboard.php");
    exit();
}
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    if(empty($username) || empty($password)){
        echo "<script>alert('Mohon maaf username atau password tidak boleh kosong')
        window.location=history.go(-1);</script>";
    }else{
        $conn = mysqli_connect("localhost","root","","db_2022_kelas2a");
        $query = mysqli_query($conn,"SELECT * FROM tb_mahasiswa WHERE nim='$username' && password='$password'");
        $data = mysqli_fetch_array($query);
        if($data){
            // echo "<script>window.location='dashboard.php'</script>";
            $_SESSION['username_xyz']=$username;
        }else{
            echo "<script>alert('Anda gagal login')
            </script>"; 
            header("location: dashboard.php");
        }
    }
?>