<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $sql = "SELECT * FROM service_motor WHERE id = $id";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data service motor tidak ditemukan.";
        exit();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $merk_motor = $_POST['merk_motor'];
    $jenis_service = $_POST['jenis_service'];
    $tanggal_service = $_POST['tanggal_service'];

    $sql = "UPDATE service_motor SET nama_pelanggan='$nama_pelanggan', merk_motor='$merk_motor', jenis_service='$jenis_service', tanggal_service='$tanggal_service' WHERE id=$id";
    $result = $koneksi->query($sql);

    if ($result) {
        echo "<p>Data servis motor berhasil diperbarui.</p>";
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
    <title>Update Service Motor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Update Service Motor</h1>
    
    <form action="update_service.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan']; ?>" required>

        <label for="merk_motor">Merk Motor:</label>
        <input type="text" id="merk_motor" name="merk_motor" value="<?php echo $row['merk_motor']; ?>" required>

        <label for="jenis_service">Jenis Service:</label>
        <input type="text" id="jenis_service" name="jenis_service" value="<?php echo $row['jenis_service']; ?>" required>

        <label for="tanggal_service">Tanggal Service:</label>
        <input type="date" id="tanggal_service" name="tanggal_service" value="<?php echo $row['tanggal_service']; ?>" required>

        <button type="submit">Update Service Motor</button>
    </form>

</body>
</html>
