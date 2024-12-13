<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
    /* Gaya Umum */
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
    }

    h2,
    h3 {
        color: #333;
        text-align: center;
    }

    a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
        margin-bottom: 20px;
        display: inline-block;
    }

    a:hover {
        color: #0056b3;
    }

    /* Container */
    table {
        margin: 20px auto;
        border-collapse: collapse;
        width: 50%;
        background: #fff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        padding: 15px;
        border-radius: 10px;
    }

    /* Gaya Form */
    form {
        width: 50%;
        margin: 20px auto;
        padding: 20px;
        background: #ffffff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    td {
        padding: 10px;
        vertical-align: top;
        color: #333;
    }

    input[type="text"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        font-weight: bold;
        border: none;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* Gaya Tombol Kembali */
    a {
        display: inline-block;
        margin: 20px auto;
        padding: 10px 15px;
        font-size: 14px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        border-radius: 5px;
        color: #007bff;
        text-align: center;
    }

    a:hover {
        background-color: #eaeaea;
        color: #0056b3;
    }

    /* Center link KEMBALI */
    .container {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>SI Sekolah | Tambah Data Siswa</h2><br /><a href="index.php">Halaman Utama</a><br /><br />
        <h3>Tambah Data Siswa</h3>
    </div>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>