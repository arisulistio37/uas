<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa Sekolah Universe</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <center><h3>Daftar Siswa Sekolah Universe</h3></center>
    </header>

    <br>

    <center><table border="1" class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM t_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['idsiswa']."</td>";
            echo "<td>".$siswa['nis']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['ttl']."</td>";
            echo "<td>".$siswa['jk']."</td>";
            echo "<td>".$siswa['alamat']."</td>";

            echo "<td>";
            echo "<a href='form_edit.php?id=".$siswa['idsiswa']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['idsiswa']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
</center>

<p>
</p>
<center><p><a href="index.php">[<] Kembali</a><a href="frm_tambahsiswa.php">   [+] Tambah Baru</a></p></center>
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