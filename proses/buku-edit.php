<?php
include '../koneksi.php';

$id = $_POST['id'];

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$th_terbit = $_POST['th_terbit'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "UPDATE buku SET judul='$judul', kategori='$kategori', penulis='$penulis',penerbit='$penerbit',th_terbit='$th_terbit' WHERE id_buku='$id'");
    echo "<script>alert('Edit Data Berhasil!');
        window.location='../index_admin.php?p=buku';</script>";
}
?>