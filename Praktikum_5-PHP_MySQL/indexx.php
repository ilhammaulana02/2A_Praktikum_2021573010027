<?php
$conn = mysqli_connect("127.0.0.1","root","");// 1. Buka koneksi database
if($conn){
    echo "Koneksi berhasil"."<br><br>";
}else{
    echo "Koneksi gagal";
}

mysqli_select_db($conn,"db_2022_kelas2a");// 2. Pilih Database
$select = mysqli_query($conn,"SELECT * FROM tb_mahasiswa");// 3. Query
// $data = mysqli_fetch_array($select);// 4. Mengambil Record

// echo "NIM : ".$data['nim']."<br>";
// echo "Nama : ".$data['nama']."<br>";
// echo "Kelas : ".$data[2]."<br>";
// echo "Alamat : ".$data[3]."<br>";
// echo "IPK : ".$data['ipk']."<br>";

while($data = mysqli_fetch_array($select)){
    echo "NIM : ".$data['nim']."<br>";
    echo "Nama : ".$data['nama']."<br>";
    echo "Kelas : ".$data[2]."<br>";
    echo "Alamat : ".$data[3]."<br>";
    echo "IPK : ".$data['ipk']."<br><br>";
}
?>