<?php
require'functions.php';
$siswasa  = query("SELECT  *  FROM  tbl_absensiswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data absen siswa</title>
</head>
<body>
    <h1>Daftar siswa yang absen</h1>

    <a href="absen-siswa.php">Tambah data siswa</a>

    <table border="1"  cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kelas</th> 
            <th>Jurusan</th>
            <th>Jam masuk</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $siswasa as $siswa )  :  ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $siswa["nama"]; ?></td>
            <td><?= $siswa["kelas"]; ?></td>
            <td><?= $siswa["jurusan"]; ?></td>
            <td><?= $siswa["jam_masuk"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ; ?>
    </table>
</body>
</html>