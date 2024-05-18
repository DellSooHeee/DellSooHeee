<?php
include('koneksi.php');

// CREATE (Tambah Data)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $film = $_POST['film'];

    // Cek apakah file telah diunggah
    if (isset($_FILES['bukti_pembayaran'])) {
        $gambar = $_FILES['bukti_pembayaran']['name'];
        $tmp = $_FILES['bukti_pembayaran']['tmp_name'];
        $uploadPath = "upload/" . $gambar;

        if (move_uploaded_file($tmp, $uploadPath)) {
            // Simpan data ke dalam database
            $query = "INSERT INTO pembelian_tiket (nama, alamat, telepon, email, film, gambar) 
                      VALUES ('$nama', '$alamat', '$telepon', '$email', '$film', '$gambar')";
            $res = mysqli_query($con, $query);

            if ($res) {
                echo '<script>alert("Pembelian tiket berhasil. Terima kasih!")</script>';
                // Redirect ke halaman CRUD setelah pembelian berhasil
                header("Location:crud.php");
                exit; // Pastikan untuk keluar dari skrip agar tidak melanjutkan eksekusi
            } else {
                echo '<script>alert("Gagal menyimpan data ke database.")</script>';
            }
            
        } else {
            echo '<script>alert("Gagal mengunggah gambar.")</script>';
            echo '<script>alert("Error: ' . $_FILES['bukti_pembayaran']['error'] . '")</script>'; // Tambahkan ini untuk menampilkan kode error
        }
    } else {
        echo '<script>alert("File bukti pembayaran tidak ditemukan.")</script>';
    }

   
    
}

