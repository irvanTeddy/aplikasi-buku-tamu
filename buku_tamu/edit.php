<?php
include 'sidebar.php';
include 'koneksitamu.php';

$id = $_GET['id'];

$sql = "SELECT * FROM tamu WHERE id=$id";
$result = $koneksi->query($sql);

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Tamu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h3 class="mb-5">Edit data tamu</h3>
        <form action="updatetamu.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="text">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
            </div>
            <div class="form-group">
                <label for="keperluan">keperluan</label>
                <input type="text" class="form-control" name="keperluan" value="<?php echo $row['keperluan']; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal dan Waktu</label>
                <input type="datetime-local" class="form-control" id="tanggal" name="tanggal"
                    value="<?php echo $row['tanggal']; ?>">

            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
</body>

</html>