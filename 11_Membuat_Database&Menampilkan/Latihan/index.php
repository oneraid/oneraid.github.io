<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
    <h1>Membuat Koneksi Dengan PHP Dan MySQL</h1>
    <h2>Menampilkan data dari database</h2>
    <h3>www.unipma.ac.id</h3>
</div>
<br><br>
<h3>Data Mahasiswa</h3>
<table border="1" class="table">
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kelas</th>
    </tr>
    <?php
    // Include your database connection file
    include "koneksi.php";

    // Create a connection
    $conn = mysqli_connect("localhost", "root", "", "unipma");

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Perform a query
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($conn, $query);

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Fetch data and display
    while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $data['npm']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['kelas']; ?></td>
        </tr>
        <?php
    }

    // Close the connection
    mysqli_close($conn);
    ?>
</table>
</body>
</html>
