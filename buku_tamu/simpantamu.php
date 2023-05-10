<?php

include 'koneksitamu.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$keperluan = $_POST['keperluan'];
$tanggal = $_POST['tanggal'];

$sql = "INSERT INTO tamu (nama, alamat, keperluan, tanggal)
VALUES ('$nama', '$alamat', '$keperluan', '$tanggal')";

if ($koneksi->query($sql) === true) {
    echo "Data peminjaman berhasil disimpan.";
    header("location:index.php");
} else {
    echo "Gagal menghapus data";
}

$koneksi->close();
?>
<br><br>
<a href="index.php">Kembali</a>