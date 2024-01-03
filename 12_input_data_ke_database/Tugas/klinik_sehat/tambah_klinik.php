<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pasien = $_POST['nama_pasien'];
    $keluhan = $_POST['keluhan'];
    $diagnosis = $_POST['diagnosis'];
    $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];

    $sql = "INSERT INTO klinik_sehat (nama_pasien, keluhan, diagnosis, tgl_pemeriksaan) VALUES ('$nama_pasien', '$keluhan', '$diagnosis', '$tgl_pemeriksaan')";
    $result = $koneksi->query($sql);

    if ($result) {
        echo "<p>Pemeriksaan berhasil ditambahkan.</p>";
        header("Location: index.php");
        exit();
    } else {
        echo "<p>Error: " . $koneksi->error . "</p>";
    }
}
?>
