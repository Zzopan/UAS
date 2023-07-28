<?php
include '../koneksi.php';

$id_buku = $_POST['id_buku'];
$id_anggota = $_POST['id_anggota'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$status_transaksi = "Sedang Meminjam";

if(isset($_POST['simpan'])){
    $sql = mysqli_query($con, "INSERT INTO transaksi (id_anggota,id_buku,tgl_pinjam,tgl_kembali,status_transaksi) VALUES ('$id_anggota','$id_buku','$tgl_pinjam','$tgl_kembali','$status_transaksi')");
    mysqli_query($con, "UPDATE buku set status='Sedang di pinjam' WHERE id_buku='$id_buku'");
    echo "<script>alert('Peminjaman Berhasil!');
        window.location='../index_admin.php?p=kembali';</script>";
}

?>