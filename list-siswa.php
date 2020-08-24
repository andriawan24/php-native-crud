<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Calon Siswa | SMK Bisa</title>
</head>
<body>
    <header>
        <h3>Siswa yang Sudah Mendaftar</h3>
    </header>
    <hr>
    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);
            while ($siswa = mysqli_fetch_array($query)) :
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $siswa['nama'] ?></td>
            <td><?= $siswa['alamat'] ?></td>
            <td><?= $siswa['jenis_kelamin'] ?></td>
            <td><?= $siswa['agama'] ?></td>
            <td><?= $siswa['sekolah_asal'] ?></td>
            <td>
                <a href="hapus-siswa.php?id=<?= $siswa['id'] ?>">Hapus</a>
                <a href="form-edit.php?id=<?= $siswa['id'] ?>">Edit</a>
            </td>
        </tr>
        <?php endwhile;?>
    </tbody>
    </table>
</body>
</html>