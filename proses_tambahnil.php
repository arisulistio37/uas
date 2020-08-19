<?php

include("koneksi.php");

if(isset($_POST['daftar'])){

    $nis = $_POST['nis'];
    $kode_mp = $_POST['kode_mp'];
    $nilai = $_POST['nilai'];

    $sql = "INSERT INTO t_nilai (nis, kode_mp, nilai) VALUE ('$nis','$kode_mp', '$nilai')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: daftarnilai.php?status=sukses');
    } else {
        header('Location: daftarnilai.php?status=gagal');
    }


} 

?>