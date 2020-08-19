<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['idsiswa']) ){
    header('Location: daftarsiswa.php');
}

//ambil id dari query string
$id = $_GET['idsiswa'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM t_siswa WHERE idsiswa=$idsiswa";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="nis">NIS: </label>
            <input type="text" name="nis"/>
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama"/>
        </p>
        <label for="ttl">TTL: </label>
            <input type="date" name="ttl"/>
         <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="L"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>