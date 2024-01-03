<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tanggal</title>
</head>

<body>
    <?php 
        $namahari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
        $namabulan = array("", "Januari", "Pebruari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        echo $namahari[date("w")] . ",  " . date("j") . "  " . $namabulan[date("n")] . "  " . date("Y");

        echo date("Y/m/d"). "<br>";//ini menampilkan dengan format 2017/18/02 
        echo date("l, d-m-Y"). "<br />"; //ini menampilkan dengan format Tuesday,02-10-2017

        echo date("d F Y") . "<br>";//ini menampilkan dengan format 02 Oktober 2017

        echo date("h:i:s"). "<br>";//ini menampilkan dengan format 00:31:94
        echo date("l, d-m-Y h:i:s"). "<br>"; //ini menampilkan dengan format Tuesday, 02-10-2017 00:31:35
    ?>
</body>
</html>