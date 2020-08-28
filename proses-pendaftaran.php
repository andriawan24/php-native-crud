<?php 
include("config.php");

function write_mysql_log($dbe)
{
  $remote_addr = $_SERVER["REMOTE_ADDR"];
  $request_uri = $_SERVER["REQUEST_URI"];
  $message = "Accessed";

  $sql = "INSERT INTO logs (remote_addr, req_uri, messages) VALUE ('$remote_addr', '$request_uri', '$message')";

  $query = mysqli_query($dbe, $sql);
}

if(isset($_POST['submit'])) {
    // Ambil data
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // Membuat Query
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal') ";
    $query = mysqli_query($db, $sql);
    write_mysql_log($db);


    if ( $query ) {
        header("Location: index.php?status=sukses");
    } else {
        header("Location: index.php?status=gagal");
    }
}else{
    die("akses dilarang..");
}
