<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <!-- Penerapan PHP di HTML -->
    <?php 
        // Membuat Tulisan Hellow World
        echo "Hello World";

        // Penerapan perulangan di PHP
        for ($i = 1; $i < 10; $i++) {
            echo "kata ini dicetak sebanyak 10 kali";
        }
    ?>

    <font color="red">
        <?php echo "Tulisan ini berawarna merah" ?>
    </font>

    <?php 
        echo"<br><b>Tulisan dalam bold atau tulisan tebal</b>";
    ?>

    <!-- Penulisan variable di PHP -->
    <?php 
        $bilanganbulat = 17;
        $teks = "aku";
        $bilangandesimal = 17.42;

        echo"Nilai variable bilangan bulat : ". $bilanganbulat ;
        echo"Nilai variable teks : ". $teks ;
        echo"Nilai variable bilangan desimal : ". $bilangandesimal ;
    ?>

    <!-- Perhitungan Angka -->
    <?php 
        $nim = "2105101003";
        $name = "Ridhwan Firdaus";
        $angka1 = 10;
        $angka2 = 15;

        $hasilpenjumlahan = $angka1 + $angka2;

        echo "Nim" . $nim . "<br>";
        echo "Nama" . $name . "<br>";
        echo "Hasil Penjumlahan dari " . $angka1 . "dan". $angka2. " = ". $hasilpenjumlahan. "<br>";
    ?>
    
    <!-- Penerapan Method Post Pada Form -->
    <form method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"/></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td>
                    <select name="mk">
                        <option value="">----- Pilih Mata Kuliah -----</option>
                        <option value="Pemrograman Terstruktur">Pemrograman Terstruktur</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                        <option value="Algoritma & Struktur Data">Algoritma & Struktur Data</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Laki-Laki"/>Laki-Laki<br>
                    <input type="radio" name="jk" value="Perempuan"/>Perempuan<br>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr align="center">
                <td colspan="3">
                    <input type="submit" name="submit" value="Simpan">&nbsp;
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <?php
        if (isset($_POST["submit"])) {
            $nama = $_POST['nama'];
            $mk = $_POST['mk'];
            $jk = $_POST['jk'];
            $email = $_POST['email'];

            echo "INI OUTPUT SESUAI INPUTAN DARI FORM DI ATAS";
            echo "Nama : " . $nama;
            echo "<br>Mata Kuliah : " . $mk;
            echo "<br>Jenis Kelamin : " . $jk;
            echo "<br>Email : " . $email;
        }
    ?>

</body>
</html>


