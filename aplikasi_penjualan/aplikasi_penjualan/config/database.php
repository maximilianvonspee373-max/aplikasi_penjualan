<?php
$host = "localhost";
$user = "root";       
$password = "";       
$database = "aplikasi_penjualan";

$koneksi = mysqli_connect($host, $user, $password, $database);
if (!$koneksi) {
    die("koneksi database gagal: " . mysqli_connect_error());

   
}

 //echo "koneksi berhasil si abay ciga ambatubay <br>";
// echo 'boneka ambalabu, merupakan sosok berbahaya yang suka labu dan suka wwaluh';

?>