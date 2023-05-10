<?php include 'sidebar.php';?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Laporan Tamu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>

<body style="background-color: #F4F4FE;">

    <body>
        <div class="container">
            <p></p>
            <h2 class="text-center ">Data Tamu</h2>
            <style>
            /* CSS untuk judul halaman */
            h2 {
                font-size: 30px;
                font-weight: 700;
                text-align: center;
                color: #333;
                font-family: 'Montserrat', sans-serif;
                text-transform: uppercase;
            }

            /* CSS untuk teks pada badan dokumen */
            body {
                font-family: 'Open Sans', sans-serif;
                font-size: 16px;
                line-height: 1.5;
                color: #333;
            }
            </style>
            <a href="tambahtamu.php" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Data
            </a>
            <p></p>
            <div class="data-tables datatable-dark">
                <table class="table table-striped" id="export">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Keperluan</th>
                            <th>Tgl/waktu</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
include 'koneksitamu.php';
$id = 1;
$query = mysqli_query($koneksi, "SELECT * FROM tamu");
while ($row = mysqli_fetch_array($query)) {
    ?>
                        <tr>
                            <td><?php echo $id++; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td><?php echo $row['keperluan']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="hapustamu.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>

                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

        <script>
        $(document).ready(function() {
            $('#export').DataTable({
                dom: 'frtip', // f -> filter, r -> processing display element, t -> table, i -> table information summary, p -> pagination
                buttons: [], // remove export buttons
                searching: false // remove search bar
            });
        });
        </script>
    </body>

</html>