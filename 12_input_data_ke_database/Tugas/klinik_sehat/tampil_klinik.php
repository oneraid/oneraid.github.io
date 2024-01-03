<?php
include('koneksi.php');

$sql = "SELECT * FROM klinik_sehat";
$result = $koneksi->query($sql);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>Nama Pasien</th>
        <th>Keluhan</th>
        <th>Diagnosis</th>
        <th>Tanggal Pemeriksaan</th>
      </tr>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama_pasien']}</td>
                <td>{$row['keluhan']}</td>
                <td>{$row['diagnosis']}</td>
                <td>{$row['tgl_pemeriksaan']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Tidak ada data pemeriksaan klinik sehat.</td></tr>";
}

echo "</table>";

$koneksi->close();
?>
