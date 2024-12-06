<?php
$konek = mysqli_connect("localhost", "root", "", "sekolahan");

if (!$konek) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>


// Ambil id dari URL
if (isset($_GET['id'])) {
$id = intval($_GET['id']);
$sql = "SELECT * FROM data_siswa WHERE id = $id";
$result = mysqli_query($konek, $sql);
$data = mysqli_fetch_assoc($result);

if (!$data) {
die("Data tidak ditemukan!");
}
} else {
die("Akses tidak valid.");
}
?>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <label>Nama:</label>
    <input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa']; ?>"><br>
    <label>Alamat:</label>
    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br>
    <label>Agama:</label>
    <input type="text" name="agama" value="<?php echo $data['agama']; ?>"><br>
    <label>Asal Sekolah:</label>
    <input type="text" name="asal_sekolah" value="<?php echo $data['asal_sekolah']; ?>"><br>
    <button type="submit" name="submit">Simpan Perubahan</button>
</form>