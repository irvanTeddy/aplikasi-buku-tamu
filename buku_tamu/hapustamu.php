<?php
include 'koneksitamu.php';

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM tamu WHERE id='$id'");

if ($hapus) {
    header("location:index.php");
} else {
    echo "Gagal menghapus data";
}