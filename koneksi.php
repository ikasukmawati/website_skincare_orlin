<?php

    $conn = mysqli_connect('localhost', 'root', '', 'orlin');

    if(!$conn){
        die("koneksi gagal: " .mysqli_connect_error());
    }
?>