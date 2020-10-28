
<?php
$conn = mysqli_connect("localhost","root","","crudnativ");
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM detailbuku WHERE id= $id");
    return mysqli_affected_rows($conn);
}


?>

