<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Siswa</title>
</head>

<body>
    <header>
        <h3>Form Tambah Siswa</h3>
    </header>

    <form action="proses_tambah.php" method="POST">

        <fieldset>
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
            <input type="submit" value="Tambah" name="daftar" />
        </p>

        </fieldset>

    </form>
<p><a href="daftarsiswa.php">[<] Kembali</a>
    </body>
</html>