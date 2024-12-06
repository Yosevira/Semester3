<?php
$konek = mysqli_connect("localhost", "root", "", "sekolahan");

if (!$konek) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>