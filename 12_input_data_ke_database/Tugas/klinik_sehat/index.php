<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Klinik Sehat</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulir Klinik Sehat</h1>
    
    <form action="tambah_klinik.php" method="post">
        <label for="nama_pasien">Nama Pasien:</label>
        <input type="text" id="nama_pasien" name="nama_pasien" required>

        <label for="keluhan">Keluhan:</label>
        <textarea id="keluhan" name="keluhan" rows="4" required></textarea>

        <label for="diagnosis">Diagnosis:</label>
        <textarea id="diagnosis" name="diagnosis" rows="4" required></textarea>

        <label for="tgl_pemeriksaan">Tanggal Pemeriksaan:</label>
        <input type="date" id="tgl_pemeriksaan" name="tgl_pemeriksaan" required>

        <button type="submit">Tambah Pemeriksaan</button>
    </form>

    <h2>Daftar Pemeriksaan Klinik Sehat</h2>
    
    <?php include('tampil_klinik.php'); ?>

</body>
</html>
