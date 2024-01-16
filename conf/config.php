<?php
$koneksi = mysqli_connect('localhost','root','','db_siganteng');
// Mengecek koneksi
if(!$koneksi){
    die("Koneksi Gagal:". mysqli_connect_error());
}
else{
    echo "Koneksi Berhasil";
}

?>