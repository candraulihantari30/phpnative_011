<?php
require 'fungsi.php';

$id = $_GET["id"];

$bk = query("SELECT * FROM detailbuku WHERE id = $id")[0];

if( isset($_POST["submit"]) ) {
    if(ubah($_POST) > 0 ){
        echo"
           <script>
              alert('data berhasil diubah!');
              document.location.href='index1.php';
           </script>
           ";
     }else {
        echo"
        <script>
              alert('data gagal diubah!');
              document.location.href='index1.php';
           </script>
           ";
     }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Buku</title>
</head>
<body>
  <h2 align="center"> Ubah Data Buku</h2>
  <form action="" method="post">
  <table border="2" cellpadding="10" cellspacing="0" align="center">
        <input type="hidden" name="id" value="<?=$bk["id"]?>">
       <tr>
       <td>Kode</td>
       <td>:</td>
       <td><input type="text"name="kode"id="kode" require value="<?= $bk["kode"]; ?>"></td>
       </tr>
       <tr>
       <td>Judul</td>
       <td>:</td>
       <td> <input type="text"name="judul"id="judul" require value="<?= $bk["judul"]; ?>"></td>
       </tr>
       <tr>
       <td>Penulis</td>
       <td>:</td>
       <td> <input type="text"name="penulis"id="penulis" require value="<?= $bk["penulis"]; ?>"></td>
       </tr>
       <tr>
       <td>Tahun Terbit</td>
       <td>:</td>
       <td> <input type="text"name="tahun_terbit"id="tahun_terbit" require value="<?= $bk["tahun_terbit"]; ?>"></td>
       </tr>
       <tr>
       <td><button type="submit"name="submit">Proses Data</button></td>
       </tr>
  </table>
</body>
</html>