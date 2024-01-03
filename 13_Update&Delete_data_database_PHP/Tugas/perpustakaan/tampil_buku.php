<?php
include('koneksi.php');

$sql = "SELECT * FROM buku";
$result = $koneksi->query($sql);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th> <!-- Kolom baru untuk tombol aksi -->
      </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['judul']}</td>
                <td>{$row['pengarang']}</td>
                <td>{$row['tahun_terbit']}</td>
                <td>
                    <a href='update_buku.php?id={$row['id']}'>Update</a>
                    <a href='hapus_buku.php?id={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Tidak ada data buku.</td></tr>";
}

echo "</table>";

$koneksi->close();
?>
