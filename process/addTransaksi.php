<?php 
include "conSQL.php"; 
if (isset($_POST['transaksi'])) 
{
    $id = $_POST['id'];
    $id_kelas = $_POST['id_kelas'];
    $kelas = $_POST['kelas'];
    $jml_kursi = $_POST['jml_kursi'];
    $biaya = $_POST['biaya'];

    $bayar = $jml_kursi * $biaya;

    $query = "INSERT INTO transaksi (id, id_kelas, kelas, jml_kursi, bayar, terhapus) VALUES ($id,'$id_kelas','$kelas','$jml_kursi','$bayar',0)"; 

    if(mysqli_query($con,$query)) 
    {
        echo "<script>document.location.href = '../konfirmasi.php';</script>";
    } else{

        echo "<script>alert('Input tidak valid');document.location.href = '../dasbor.php';</script>";
    }
}
?>
        