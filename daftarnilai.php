<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai Siswa Sekolah Universe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <center><h3>Daftar Nilai Siswa Sekolah Universe</h3></center>
    </header>

    <br>

    <center><table border="1" class="table">
    <thead>
        <tr>

            <th>NIS</th>
            <th>Kode Mata Pelajaran</th>
            <th>Nilai</th>
            <th>Tindakan</th>

        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM t_nilai";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['nis']."</td>";
            echo "<td>".$siswa['kode_mp']."</td>";
            echo "<td>".$siswa['nilai']."</td>";

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
<center><p><a href="index.php">[<] Kembali</a><a href="frm_tambahnil.php">   [+] Tambah Baru</a></p></center>
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