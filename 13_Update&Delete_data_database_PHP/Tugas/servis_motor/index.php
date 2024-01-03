<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Service Motor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulir Service Motor</h1>
    
    <form action="tambah_service.php" method="post">
        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" required>

        <label for="merk_motor">Merk Motor:</label>
        <input type="text" id="merk_motor" name="merk_motor" required>

        <label for="jenis_service">Jenis Service:</label>
        <input type="text" id="jenis_service" name="jenis_service" required>

        <label for="tanggal_service">Tanggal Service:</label>
        <input type="date" id="tanggal_service" name="tanggal_service" required>

        <button type="submit">Tambah Service</button>
    </form>

    <h2>Daftar Service Motor</h2>
    
    <?php include('tampil_service.php'); ?>

</body>
</html>
