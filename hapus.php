<?php

include("koneksi.php");

if( isset($_GET['idsiswa']) ){

    $id = $_GET['idsiswa'];

    $sql = "DELETE FROM t_siswa WHERE idsiswa=$idsiswa";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: daftarsiswa.php');
    } else {
        die("gagal menghapus...");
    }

}

?>