<?php 

    // 1. membuat susunan konfigurasi koneksinya
    $host = "localhost"; // melakukan set host
    $user = "root"; // melakukan set untuk nama user nya
    $pass = ""; // melakukan set untuk password dari user nya
    $db = "lifetivity"; // melakukan set untuk nama database yang akan diakses

    // 2. membuat koneksinya
    $conn = mysqli_connect($host, $user, $pass, $db);

    // 3. jika koneksi gagal maka akan dikirim hasil errornya
    if(!$conn) { // jika koneksi tidak berhasil
        echo "Gagal terkoneksi : " . die(mysqli_error($conn)); // memunculkan output gagal terkoneksi
    }

?>