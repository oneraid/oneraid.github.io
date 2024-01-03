<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $sql = "DELETE FROM service_motor WHERE id = $id";
    $result = $koneksi->query($sql);

    if ($result) {
        echo "<p>Data servis motor berhasil dihapus.</p>";
        header("Location: index_service.php");
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
    <title>Hapus Service Motor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hapus Service Motor</h1>
    
    <p>Apakah Anda yakin ingin menghapus data servis motor ini?</p>
    <a href="hapus_service.php?id=<?php echo $_GET['id']; ?>">Ya</a>
    <a href="index.php">Tidak</a>

</body>
</html>
