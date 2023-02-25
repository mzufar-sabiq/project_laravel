<?php 
//koneksi ke database
$conn = mysqli_connect("localhost",  "root",  "",  "db_@siswa");

function query($query)  {
    global $conn;
    $result = mysqli_query($conn,  $query);
    $swa = [];
    while(  $siswa = mysqli_fetch_assoc($result) ) {
        $swa[] = $siswa;
    }
    return $swa;
}
?>