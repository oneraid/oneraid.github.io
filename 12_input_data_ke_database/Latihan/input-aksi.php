<?php
    include 'koneksi.php';
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];

    mysqli_query($host, "INSERT INTO mahasiswa VALUES('$npm','$nama','$alamat','$kelas')");
    header("location:index.php?pesan=input");
?>