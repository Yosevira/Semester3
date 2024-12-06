<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f0f8ff;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    h1 {
        text-align: center;
        color: #2c3e50;
        font-size: 3em;
        margin: 10px 0;
        font-weight: bold;
    }

    h2 {
        text-align: center;
        color: #34495e;
        font-size: 1.5em;
        margin-bottom: 30px;
    }

    .container {
        text-align: center;
    }

    .menu {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }

    a {
        display: inline-block;
        padding: 12px 20px;
        font-size: 1.1em;
        color: #ffffff;
        text-decoration: none;
        background-color: #3498db;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    a:hover {
        background-color: #2980b9;
        transform: scale(1.05);
    }
    </style>


</head>

<body>
    <div class="container">
        <h1>Sistem Informasi Sekolah</h1>
        <h2>SMK Unipdu</h2>
        <div class="menu">
            <a href="data_siswa.php">Daftar Siswa</a><br>
            <a href="tambah_siswa.php">Pendaftaran</a>
        </div>
    </div>
</body>

</html>