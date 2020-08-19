<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mata Pelajaran Sekolah Universe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <center><h3>Daftar Mata Pelajaran Sekolah Universe</h3></center>
    </header>

    <br>

    <center><table border="1" class="table">
    <thead>
        <tr>

            <th>Kode Mata Pelajaran</th>
            <th>Nama Mata Pelajaran</th>
            <th>Tindakan</th>

        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM t_mapel";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['kode_mp']."</td>";
            echo "<td>".$siswa['nama_mp']."</td>";


            echo "<td>";
            echo "<a href='form_edit.php?id=".$siswa['kode_mp']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['kode_mp']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
</center>

<p>
</p>
<center><p><a href="index.php">[<] Kembali</a><a href="frm_tambahmap.php">   [+] Tambah Baru</a></p></center>
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