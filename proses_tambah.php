<?php

include("koneksi.php");

if(isset($_POST['daftar'])){

    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO t_siswa (nis, nama, ttl, jk, alamat) VALUE ('$nis', '$nama', '$ttl', '$jk', '$alamat')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: daftarsiswa.php?status=sukses');
    } else {
        header('Location: daftarsiswa.php?status=gagal');
    }


}

?>