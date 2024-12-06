<?php
$konek = mysqli_connect("localhost", "root", "", "sekolahan");

if (!$konek) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>

<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $sql = "DELETE FROM data_siswa WHERE id = $id";
    $query = mysqli_query($konek, $sql);

    if ($query) {
        header('Location: index.php');
        exit;
    } else {
        die("Gagal menghapus data: " . mysqli_error($konek));
    }
} else {
    die("Akses tidak valid.");
}
?>