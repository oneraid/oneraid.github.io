<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $merk_motor = $_POST['merk_motor'];
    $jenis_service = $_POST['jenis_service'];
    $tanggal_service = $_POST['tanggal_service'];

    $sql = "INSERT INTO service_motor (nama_pelanggan, merk_motor, jenis_service, tanggal_service) VALUES ('$nama_pelanggan', '$merk_motor', '$jenis_service', '$tanggal_service')";
    $result = $koneksi->query($sql);

    if ($result) {
        echo "<p>Service motor berhasil ditambahkan.</p>";
        header("Location: index.php");
        exit();
    } else {
        echo "<p>Error: " . $koneksi->error . "</p>";
    }
}
?>
