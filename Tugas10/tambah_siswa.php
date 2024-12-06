<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa</h3>
    </header>

    <form action="proses_tambah.php" method="POST">

        <fieldset>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="agama">Agama : </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Kristen</option>
                    <option>Konghucu</option>
                </select>
            </p>
            <p>
                <label for="asal_sekolah">Sekolah Asal : </label>
                <input type="text" name="asal_sekolah" placeholder="nama sekolah" />
            </p>
            <p>
                <input type="submit" value="Tambah" name="tambah">
            </p>

        </fieldset>
    </form>
</body>

</html>