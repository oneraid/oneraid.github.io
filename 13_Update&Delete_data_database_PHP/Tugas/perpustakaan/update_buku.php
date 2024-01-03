<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];

    $sql = "SELECT * FROM buku WHERE id = $id";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Data buku tidak ditemukan.";
        exit();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "UPDATE buku SET judul='$judul', pengarang='$pengarang', tahun_terbit=$tahun_terbit WHERE id=$id";
    $result = $koneksi->query($sql);

    if ($result) {
        echo "<p>Buku berhasil diperbarui.</p>";
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
    <title>Update Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Update Buku</h1>
    
    <form action="update_buku.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul" value="<?php echo $row['judul']; ?>" required>

        <label for="pengarang">Pengarang:</label>
        <input type="text" id="pengarang" name="pengarang" value="<?php echo $row['pengarang']; ?>" required>

        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>" required>

        <button type="submit">Update Buku</button>
    </form>

</body>
</html>
