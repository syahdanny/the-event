<?php
include 'conSQL.php';

$id_transaksi = $_GET["id"];

$query = "UPDATE transaksi 
    SET terhapus = 1
    WHERE id_transaksi = $id_transaksi";
    
if (mysqli_query($con, $query)) {
    header("Location:../admin.php");
} else {
    $error = urldecode("Data tidak berhasil di delete" . mysqli_error($con));
    header("Location:../admin.php?error=$error");
}
	
mysqli_close($con); 
?>