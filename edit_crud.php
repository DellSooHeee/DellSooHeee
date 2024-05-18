<?php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_baru = $_POST['nama'];

    // Lakukan proses update data ke dalam database
    $query_update = "UPDATE pembelian_tiket SET nama='$nama_baru' WHERE id='$id'";
    $result_update = mysqli_query($con, $query_update);

    if ($result_update) {
        // Jika update berhasil, arahkan kembali ke halaman utama atau halaman CRUD
        header("Location: crud.php");
        exit(); // Penting untuk menghentikan eksekusi script setelah header redirect
    } else {
        echo "Gagal melakukan update data. Silakan coba lagi.";
    }
} else {
    
    header("Location: crud.php"); 
    exit(); 
}
?>
