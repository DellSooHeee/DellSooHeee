<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Tiket Nonton Bioskop</title>
    <link rel="stylesheet" href="stylee.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="koc.png" alt="Logo" width="60">
                <h2 class="montserrate">MoviePass</h2>
            </div>
            <ul>
                <li><a href="purchase.php">Beli Tiket</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="section">
            <div class="container">
                <h2 class="montserrat">PEMBELIAN TIKET</h2>

                <div class="box">
                    <form action="process.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="nama" id="nama" class="input-control" placeholder="Nama" required>
                        <input type="text" name="alamat" id="alamat" class="input-control" placeholder="Alamat" required>
                        <input type="text" name="telepon" id="telepon" class="input-control" placeholder="Nomor Telepon" required>
                        <input type="email" name="email" id="email" class="input-control" placeholder="Email" required>
                        <select name="film" id="film" class="input-control" required>
                            <option value="">Pilih Film</option>
                            <option value="Home Alone">Home Alone</option>
                            <option value="The Nun">The Nun</option>
                            <option value="Belok Kanan Barcelona">Belok Kanan Barcelona</option>
                            <option value="Grave of the Fireflies">Grave of the Fireflies</option>
                        </select>
                        <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" accept="image/*" class="input-control" required>
                        <input type="submit" name="submit" value="Beli Tiket" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <footer>
        <div class="container">
            <small>&copy; 2024 DELL</small>
        </div>
    </footer>
</body>

</html>
