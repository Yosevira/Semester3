<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <style>
    form {
        width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <header>
        <h2>Formulir Pendaftaran Siswa</h2>
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
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki- laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuam">Perempuan</label>
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