<?php
include'../koneksi.php';

$id	= $_GET['id'];

mysqli_query($con," UPDATE transaksi set status_transaksi='Sudah Mengembalikan' WHERE id_buku='$id'");
mysqli_query($con," UPDATE buku set status='Tersedia' WHERE id_buku='$id'");
header("location:../index_admin.php?p=rk");
?>