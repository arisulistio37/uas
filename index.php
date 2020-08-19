<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Akademik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="judul">	
        <h3>Sistem Informasi Akademik</h3>
        <h1>Sekolah Universe</h1>
    </div>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="daftarsiswa.php">Daftar Siswa</a></li>
            <li><a href="daftarmapel.php">Daftar Matkul</a></li>
            <li><a href="daftarnilai.php">Daftar Nilai Siswa</a></li>
        </ul>
    </nav>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Data berhasil ditambahkan!";
            } else {
                echo "Data gagal ditambahkan!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>