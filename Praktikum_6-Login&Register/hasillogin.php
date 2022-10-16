<?php
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // if(empty($username) || empty($password)){
    //     echo "Mohon maaf username atau password tidak boleh kosong";
    // }
    // elseif($username == "admin" && $password == "123"){
    //     echo "Selamat anda berhasil login";
    // }else{
    //     echo "Mohon Maaf Anda Gagal Login";
    // }
    
    if(empty($username) || empty($password)){
        echo "Mohon maaf username atau password tidak boleh kosong";
    }else{
        $conn = mysqli_connect("localhost","root","","db_2022_kelas2a");
        $query = mysqli_query($conn,"SELECT * FROM tb_mahasiswa WHERE nim='$username' && password='$password'");
        $data = mysqli_fetch_array($query);
        if($data){
            echo "Selamat anda berhasil login";
        }else{
            echo "Anda gagal login";
        }
    }
?>