<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
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

    .container {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    .tambah-data {
        text-align: right;
    }

    .opsi {
        text-align: center;
    }

    .edit,
    .hapus {
        text-decoration: none;
        padding: 5px;
        border-radius: 3px;
    }

    .edit {
        background-color: lightblue;
    }

    .hapus {
        background-color: lightcoral;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>SI Sekolah | Data Siswa</h2><br />
        <a href="tambah.php">+Tambah Data</a><br />
    </div>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr><?php include 'koneksi.php';
    $no=1;
    $query=mysqli_query($koneksi, "SELECT * FROM siswa");

    while ($data=mysqli_fetch_array($query)) {
        ?><tr>
            <td><?php echo $no++;
        ?></td>
            <td><?php echo $data ['nama'];
        ?></td>
            <td><?php echo $data ['nis'];
        ?></td>
            <td><?php echo $data ['alamat'];
        ?></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>">EDIT </a>
                <a href="hapus.php?id=<?php echo $data['id']; ?>"> HAPUS</a>
            </td>
        </tr><?php
    }

    ?>
    </table>
</body>

</html>