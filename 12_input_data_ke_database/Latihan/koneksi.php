<?php 
    // isi nama host, username mysql, password mysql, dan nama database
    $host = mysqli_connect("localhost", "root", "", "unipma");

    // Check connection
    if (!$host) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
