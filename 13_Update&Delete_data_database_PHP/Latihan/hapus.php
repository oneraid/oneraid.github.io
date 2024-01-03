<?php
    include 'koneksi.php';
    $npm = $_GET['npm'];
    mysqli_query($host, "DELETE FROM mahasiswa WHERE npm='$npm'") or die(mysqli_error($host));
    header("location:index.php?pesan=hapus");
?>