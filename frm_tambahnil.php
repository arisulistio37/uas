<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Nilai Pelajaran</title>
</head>

<body>
    <header>
        <h3>Form Tambah Nilai Pelajaran</h3>
    </header>

    <form action="proses_tambahnil.php" method="POST">

        <fieldset>
        <p>
            <label for="nis">NIS: </label>
            <input type="text" name="nis"/>
        </p>
        <p>
            <label for="kode_mp">Kode Mata Pelajaran: </label>
            <input type="text" name="kode_mp"/>
        </p>
        <p>
            <label for="nilai">Nilai: </label>
            <input type="text" name="nilai"/>
        </p>
        <p>
            <input type="submit" value="Tambah" name="daftar" />
        </p>

        </fieldset>

    </form>
<p><a href="daftarmapel.php">[<] Kembali</a>
    </body>
</html>