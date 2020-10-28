<?php
require 'fungsi.php';
if( isset($_POST["submit"]) ) {
    if(tambah ($_POST) > 0 ){
        echo"
           <script>
              alert('data berhasil ditambahkan!');
              document.location.href='index1.php';
           </script>
           ";
     }else {
        echo"
        <script>
              alert('data gagal ditambahkan!');
              document.location.href='index1.php';
           </script>
           ";
     }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Buku</title>
</head>
<body>
  <h2 align="center"> Tambah Data Buku</h2>
  <form action="" method="post">
  <table border="2" cellpadding="10" cellspacing="0" align="center">
  <tr>
       <tr>
       <td>Kode</td>
       <td>:</td>
       <td><input type="text"name="kode"id="kode"required></td>
       </tr>
       <tr>
       <td>Judul</td>
       <td>:</td>
       <td> <input type="text"name="judul"id="judul"></td>
       </tr>
       <tr>
       <td>Penulis</td>
       <td>:</td>
       <td> <input type="text"name="penulis"id="penulis"></td>
       </tr>
       <tr>
       <td>Tahun Terbit</td>
       <td>:</td>
       <td> <input type="text"name="tahun_terbit"id="tahun_terbit"></td>
       </tr>
       <tr>
       <td><button type="submit"name="submit">Proses Data</button></td>
       </tr>
  </table>
</body>
</html>