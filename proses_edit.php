<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // buat query update
    $sql = "UPDATE t_siswa SET nis='$nis', nama='$nama', =ttl='$ttl', jk='$jk', alamat='$alamat' WHERE idsiswa=$idsiswa";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>