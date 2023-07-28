<?php
include '../koneksi.php';

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$th_terbit = $_POST['th_terbit'];
$status = "Tersedia";

if(isset($_POST['simpan'])){
    mysqli_query($con, "INSERT INTO buku (judul,kategori,penulis,penerbit,th_terbit,status) VALUES ('$judul','$kategori','$penulis','$penerbit','$th_terbit','$status')");
    echo "<script>alert('Tambah Data Berhasil!');
        window.location='../index_admin.php?p=buku';</script>";
}

?>