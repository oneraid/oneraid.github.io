<?php
include('koneksi.php');

$sql = "SELECT * FROM service_motor";
$result = $koneksi->query($sql);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Nama Pelanggan</th>
        <th>Merk Motor</th>
        <th>Jenis Service</th>
        <th>Tanggal Service</th>
      </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama_pelanggan']}</td>
                <td>{$row['merk_motor']}</td>
                <td>{$row['jenis_service']}</td>
                <td>{$row['tanggal_service']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Tidak ada data service motor.</td></tr>";
}

echo "</table>";

$koneksi->close();
?>
