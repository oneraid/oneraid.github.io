<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum</title>
</head>
<body>
<form>
    Masukkan Nama, Email dan Password<br>
    Default Nama = belajar, Email = test@gmail.com dan Password = madiun <br>
    Isian data :<br>
    Nama :<INPUT TYPE=TEXT NAME=password><br>
    Email :<INPUT TYPE=TEXT NAME=email><br>
    Password :<INPUT TYPE=PASSWORD NAME=password><br>
    <INPUT TYPE=SUBMIT VALUE="Cek"><br>
</form>

<?php
    if (isset($email))
        if (empty($email))
            print("Harap mengisi email <br>\n");
            else {
                if (preg_match("/^.+@.+11..+$/", $email)) {
                    if (strpos($email, "test@gmail.com") !== false) {
                        print("Alamat email $email valid<br>\n");
                    } else {
                        print("Alamat email $email tidak valid<br>\n");
                    }
                } else {
                    print("Format email tidak valid<br>\n");
                }
            }
    
    if (isset($password)){
        $nama = "belajar";
        $pass_valid = crypt("madiun", $nama);
        $enkripsi = crypt($password, $nama);

    if($pass_valid == $enkripsi)
        print("Password valid");
    else
        print("Password salah");
    }
?>
</body>
</html>