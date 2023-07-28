<?php
include'../koneksi.php';
$id	= $_GET['id'];

mysqli_query($con,"DELETE FROM anggota WHERE id_anggota='$id'"
);
header("location:../index_admin.php?p=anggota");
?>