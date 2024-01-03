<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $sql = "DELETE FROM klinik_sehat WHERE id = $id";
    $result = $koneksi->query($sql);

    if ($result) {
        echo "<p>Data pemeriksaan klinik sehat berhasil dihapus.</p>";
        header("Location: index.php");
        exit();
    } else {
        echo "<p>Error: " . $koneksi->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Pemeriksaan Klinik Sehat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hapus Pemeriksaan Klinik Sehat
