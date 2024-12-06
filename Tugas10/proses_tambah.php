<?php

$konek = mysqli_connect("localhost","root","", "sekolahan");

if(isset($_POST['tambah'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    $sql = "INSERT INTO data_siswa (nama_siswa, alamat_siswa, agama_siswa, asal_sekolah) VALUE ('$nama', '$alamat', '$agama', '$sekolah')";
    $query = mysqli_query( $konek, $sql);

    if($query){
        header('location: index.php?status=sukses');
    } else{
        header('Location: index.php?status=gagal');
    }

} else{
    die("Akses dilarang....");
}
?>