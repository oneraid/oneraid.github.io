<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $sql = "SELECT * FROM klinik_sehat WHERE id = $id";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data pemeriksaan klinik sehat tidak ditemukan.";
        exit();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_pasien = $_POST['nama_pasien'];
    $keluhan = $_POST['keluhan'];
    $diagnosis = $_POST['diagnosis'];
    $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];

    $sql = "UPDATE klinik_sehat SET nama_pasien='$nama_pasien', keluhan='$keluhan', diagnosis='$diagnosis', tgl_pemeriksaan='$tgl_pemeriksaan' WHERE id=$id";
    $result = $koneksi->query($sql);

    if ($result) {
        echo "<p>Data pemeriksaan klinik sehat berhasil diperbarui.</p>";
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
    <title>Update Pemeriksaan Klinik Sehat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Update Pemeriksaan Klinik Sehat</h1>
    
    <form action="update_klinik.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="nama_pasien">Nama Pasien:</label>
        <input type="text" id="nama_pasien" name="nama_pasien" value="<?php echo $row['nama_pasien']; ?>" required>

        <label for="keluhan">Keluhan:</label>
        <textarea id="keluhan" name="keluhan" rows="4" required><?php echo $row['keluhan']; ?></textarea>

        <label for="diagnosis">Diagnosis:</label>
        <textarea id="diagnosis" name="diagnosis" rows="4" required><?php echo $row['diagnosis']; ?></textarea>

        <label for="tgl_pemeriksaan">Tanggal Pemeriksaan:</label>
        <input type="date" id="tgl_pemeriksaan" name="tgl_pemeriksaan" value="<?php echo $row['tgl_pemeriksaan']; ?>" required>

        <button type="submit">Update Pemeriksaan</button>
    </form>

</body>
</html>
