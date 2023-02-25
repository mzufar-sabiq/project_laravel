<?php

$conn = mysqli_connect("localhost",  "root",  "",  "db_@siswa");

if( isset ( $_POST["submit"] ) ) {

    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    $jammasuk = $_POST["jam_masuk"];


    $query = " INSERT INTO  tbl_absensiswa 
                            VALUES
                            ('',  '$nama',  '$kelas',  '$jurusan',  '  $jammasuk')
                            ";
    mysqli_query($conn,  $query);
    
}
?>

<!DOCTYPE html>
<div lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style> 
       .container {
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        padding-top: 20px;
       }
       .body {
       
        width: 700px;
        height: 500px;
        box-sizing: border-box;
        margin: auto;
        box-shadow: 2px 3px 6px rgb(53, 52, 52);;
        background-color: green;
       }
       .sidebar img {
        height: 150px;
        margin-top: 30px;
        transition: 1s;
       }
       .sidebar img:hover {
        transform: rotate(360deg);
       }
       .main form input {
        margin-top: -50px;
        margin: auto;
        box-sizing: border-box;
       }
       .main form {
        margin-top: -10px;
       }
    .main h3 {
        font-weight: bold;
        margin-bottom: -5px;
    }
    .main form button{
        margin-top: 20px;
        color: rgb(255, 255, 255);
        background-color: rgb(28, 180, 28);
        padding:  7px 30px 7px 30px;
        border-radius: 6px;
    }
    .main form input {
        padding:  7px 20px 7px 20px;
        border-radius: 6px;
    }
    </style>
</head>
<body>
<div>
    <div class="container">
        <h1>SISTEM ABSENSI SISWA <br> SMK SYAFI'I AKROM KOTA PEKALONGAN</h1>
        <div class="body">
            <div class="sidebar">
                <img src="img/lgsmk.png" alt="Logo SMK Syafi'i Akrom" title="Logo SMK Syafi'i Akrom">
            <div class="main">
                <form action="" method="post">
                <h3>ABSENSI SISWA</h3>
                <label></label><br>
                <input type="text" placeholder="Masukkan Nama">
                <label></label><br><br>
                <input type="text" placeholder="Masukkan Kelas">
                <label></label><br><br>
                <input type="text" placeholder="Masukkan Jurusan">
                <label></label><br><br>
                <input type="text" placeholder="Masukkan Jam masuk">
                <br>
                <button  type="submit"   name="submit">Absen</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
