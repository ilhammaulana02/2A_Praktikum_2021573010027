<?php
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username) || empty($password)){
        echo "Mohon maaf username atau password tidak boleh kosong";
    }
    elseif($username == "admin" && $password == "123"){
        echo "Selamat anda berhasil login";
    }else{
        echo "Mohon Maaf Anda Gagal Login";
    }
?>