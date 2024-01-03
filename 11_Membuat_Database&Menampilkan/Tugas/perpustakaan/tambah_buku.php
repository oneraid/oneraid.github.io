<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "INSERT INTO buku (judul, pengarang, tahun_terbit) VALUES ('$judul', '$pengarang', $tahun_terbit)";
    $result = $koneksi->query($sql);

    if ($result) {
        echo "<p>Buku berhasil ditambahkan.</p>";
        header("Location: index.php");
    } else {
        echo "<p>Error: " . $koneksi->error . "</p>";
    }
}

$koneksi->close();
?>
