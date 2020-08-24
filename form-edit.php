<?php
include('config.php');

if(!isset($_GET['id'])) {
    header("Location: list-siswa.php");
}

// Ambil ID dari GET
$id = $_GET['id'];

// Buat Query untuk menampilkan Data 
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Edit Siswa | SMK Bisa</title>
</head>
<body>
    <header>
        <h3>Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="post">
        <fieldset>
            <input type="hidden" name="id" value="<?= $siswa['id'] ?>">
            <p>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" value="<?= $siswa['nama'] ?>">
            </p>
            <p>
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="5"><?= $siswa['alamat'] ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <?php $jk = $siswa['jenis_kelamin'] ?>
                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" <?= ($jk == 'laki-laki') ? 'checked' : '' ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" <?= ($jk == 'perempuan') ? 'checked' : '' ?>> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama</label>
                <?php $agama = $siswa['agama'] ?>
                <select name="agama" id="agama">
                    <option <?= ($siswa['agama'] == 'Islam') ? 'selected' : '' ?> value="Islam">Islam</option>
                    <option <?= ($siswa['agama'] == 'Buddha') ? 'selected' : '' ?> value="Buddha">Buddha</option>
                    <option <?= ($siswa['agama'] == 'Kristen') ? 'selected' : '' ?> value="Kristen">Kristen</option>
                    <option <?= ($siswa['agama'] == 'Hindu') ? 'selected' : '' ?> value="Hindu">Hindu</option>
                    <option <?= ($siswa['agama'] == 'Konghucu') ? 'selected' : '' ?> value="Konghucu">Konghucu</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder="Nama Sekolah" value="<?= $siswa['sekolah_asal'] ?>">
            </p>
            <p>
                <button type="submit" name="submit">Edit Data</button>
            </p>
        </fieldset>
    </form>
</body>
</html>