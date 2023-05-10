<?php

include 'koneksitamu.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$keperluan = $_POST['keperluan'];
$tanggal = $_POST['tanggal'];

$sql = "UPDATE tamu SET nama='$nama', alamat='$alamat', keperluan='$keperluan', tanggal='$tanggal' WHERE id=$id";

if ($koneksi->query($sql) === true) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneki->close();
