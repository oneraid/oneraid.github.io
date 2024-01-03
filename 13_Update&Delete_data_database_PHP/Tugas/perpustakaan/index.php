<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulir Perpustakaan</h1>
    
    <form action="tambah_buku.php" method="post">
        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul" required>

        <label for="pengarang">Pengarang:</label>
        <input type="text" id="pengarang" name="pengarang" required>

        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" id="tahun_terbit" name="tahun_terbit" required>

        <button type="submit">Tambah Buku</button>
    </form>

    <h2>Daftar Buku</h2>
    
    <?php include('tampil_buku.php'); ?>

</body>
</html>
