<?php
include('config.php');

if (!isset($_GET['id'])) {
    header("Location:index.php");
}

$id = $_GET['id'];

$sql = "DELETE FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);

header("Location: list-siswa.php");
?>