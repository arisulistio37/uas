<?php

include("koneksi.php");

if(isset($_POST['daftar'])){

    $kode_mp = $_POST['kode_mp'];
    $nama_mp = $_POST['nama_mp'];

    $sql = "INSERT INTO t_mapel (kode_mp, nama_mp) VALUE ('$kode_mp', '$nama_mp')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: daftarmapel.php?status=sukses');
    } else {
        header('Location: daftarmapel.php?status=gagal');
    }

}

?>