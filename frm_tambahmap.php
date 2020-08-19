<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Mata Pelajaran</title>
</head>

<body>
    <header>
        <h3>Form Tambah Mata Pelajaran</h3>
    </header>

    <form action="proses_tambahmap.php" method="POST">

        <fieldset>
        <p>
            <label for="kode_mp">Kode Mata Pelajaran: </label>
            <input type="text" name="kode_mp"/>
        </p>
        <p>
            <label for="nama_mp">Nama: </label>
            <input type="text" name="nama_mp"/>
        </p>
        <p>
            <input type="submit" value="Tambah" name="daftar" />
        </p>

        </fieldset>

    </form>
<p><a href="daftarmapel.php">[<] Kembali</a>
    </body>
</html>