<?php
include'../koneksi.php';
$id	= $_GET['id'];

mysqli_query($con,"DELETE FROM buku WHERE id_buku='$id'"
);
header("location:../index_admin.php?p=buku");
?>