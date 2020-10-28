<?php
    require 'fungsi.php';

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Perpustakaan</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Perpustakaan</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../img/img2.jpg" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#databuku">DATA BUKU PERPUSTAKAAN</a></li>
                </ul>
            </div>
        </nav>
            <?php

            $bk = query ("SELECT * FROM detailbuku");
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
                <script type="text/javascript" src="../js/bootstrap.min.js"></script>
            </head>
            <body>
            <div class="container">
            <h1 align="center">Daftar Buku Perpustakaan</h1>
                <a href="tambah.php"> Tambah Data Buku</a>
                <table border="2" cellpandding="10" cellspacing="0" align="center" >

                <tr bgcolor="808080" align="center">
                <th>No.</th>
                <th>Judul</th>
                <th>Kode</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
                </tr>

                <?php $i = 1; ?>
                <?php  foreach($bk as $row) : ?> 
                <tr align="center">
                <td><?= $i; ?></td>
                <td><?= $row["judul"]; ?></td>
                <td><?= $row["kode"]; ?></td>
                <td><?= $row["penulis"]; ?></td>
                <td><?= $row["tahun_terbit"]; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row["id"];?>">Ubah</a> | 
                    <a href="delet.php?id=<?= $row["id"]; ?>" onclick="return confirm ('Anda Yakin?'); ">Hapus</a>
                </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tr>
                </table>
                <p><a href ="../logout.php"><button type="button" class="btn btn-primary">Logout</button></p></a>
                </div>
</body>
</html>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

