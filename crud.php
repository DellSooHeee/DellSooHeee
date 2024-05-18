<?php
include('koneksi.php');

$query = "SELECT * FROM pembelian_tiket";
$result = mysqli_query($con, $query);

echo "<div class='data-container'>";
echo "<link rel='stylesheet' href='crud.css'>"; 

echo "<h2>"; 
echo "<img src='koc.png' alt='Logo' class='logo'>"; 
echo "Movie Pass"; 
echo "</h2>"; 

echo "<table class='data-table'>"; 
echo "<tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Film</th>
        <th>Gambar</th>
        <th>Aksi</th>
      </tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['alamat'] . "</td>";
    echo "<td>" . $row['telepon'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['film'] . "</td>";
    echo "<td><img src='upload/" . $row['gambar'] . "' width='100'></td>";
    echo "<td><a href='edit_crud.php?id=". $row['id']. "&action=edit'>Edit</a> | <a href='delete.php?id=". $row['id']. "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";
echo "</div>";

if (isset($_GET['action']) && $_GET['action'] == 'edit') {
    $id = $_GET['id'];
    $query_edit = "SELECT * FROM pembelian_tiket WHERE id='$id'";
    $result_edit = mysqli_query($con, $query_edit);
    $row_edit = mysqli_fetch_array($result_edit);

    // Form to edit nama
    echo "<form method='POST' action='edit_process.php'>";
    echo "<input type='hidden' name='id' value='" . $row_edit['id'] . "'>";
    echo "<label for='nama'>Nama Baru:</label>";
    echo "<input type='text' id='nama' name='nama' value='" . $row_edit['nama'] . "'>";
    echo "<input type='submit' name='submit' value='Update'>";
    echo "</form>";
}
?>
