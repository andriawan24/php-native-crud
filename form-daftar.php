<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="post">
        <fieldset>
            <p>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Nama Lengkap">
            </p>
            <p>
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama</label>
                <select name="agama" id="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" id="sekolah_asal" placeholder="Nama Sekolah">
            </p>
            <p>
                <button type="submit" name="submit">Daftar</button>
            </p>
        </fieldset>
    </form>
</body>
</html>