<?php 
    include '../koneksi.php';
    include '../session.php';

    // mengambil id tantangan dari variable post

    $judul_catatan = $_POST['catatan_judul'];
    $isi_catatan = $_POST['catatan_isi'];
    
    // mengeksekusi query
    $execute = mysqli_query($conn, "INSERT INTO catatan(judul_catatan, isi_catatan, id_user) 
    values ('$judul_catatan', '$isi_catatan', '$id_user')");
    

    // setelah query dijalankan
    if($execute) {
        // jika berhail maka akan muncul alert berhasil

        echo "<script>
                    alert('Data Berhasil Disimpan');
                    window.location = '../../catatan';
            </script>";
    }else{
        // jika gagal maka akan muncul alert gagal
        echo "<script>
                    alert('Data Gagal Disimpan');
                    window.location = '../../catatan';
            </script>";
    }
    // setelah itu akan dipindahkan ke halaman catatan
?>


