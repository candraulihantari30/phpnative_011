<?php
   // Koneksi Ke Database
$conn = mysqli_connect("localhost","root", "", "crudnativ");
 
function query($query){
global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while($row = mysqli_fetch_assoc($result) ){
      $rows [] = $row;
   }
   return $rows;
}

function tambah($data){
    global $conn;
    $judul = htmlspecialchars ($data["judul"]);
    $kode =htmlspecialchars ($data["kode"]);
    $penulis = htmlspecialchars ($data["penulis"]);
    $tahun_terbit =htmlspecialchars ($data["tahun_terbit"]);
   $query ="INSERT INTO detailbuku
             VALUES
             ('', '$judul', '$kode', '$penulis','$tahun_terbit')
         ";
      mysqli_query($conn, $query);
      return mysqli_affected_rows($conn);
   }

   function hapus($id){
      global $conn;
      mysqli_query($conn, "DELETE FROM detailbuku WHERE id=$id");
      return mysqli_affected_rows($conn);
  }

function ubah($data) {
   global $conn;
   $id= $data["id"];
   $judul = htmlspecialchars ($data["judul"]);
   $kode =htmlspecialchars ($data["kode"]);
   $penulis = htmlspecialchars ($data["penulis"]);
   $tahun_terbit =htmlspecialchars ($data["tahun_terbit"]);
  
  $query ="UPDATE detailbuku SET 
            judul = '$judul',
            kode = '$kode',
            penulis = '$penulis',
            tahun_terbit = '$tahun_terbit'
            WHERE id= $id
        ";
     mysqli_query($conn, $query);
     return mysqli_affected_rows($conn);
}
?>