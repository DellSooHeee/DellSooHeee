<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "tiket_bioskop"; 

// Membuat koneksi ke database
$con = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$con) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
