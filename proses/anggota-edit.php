<?php
include '../koneksi.php';

$id = $_POST['id'];

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "UPDATE anggota SET nama='$nama', nim='$nim', alamat='$alamat',no_tlp='$no_tlp' WHERE id_anggota='$id'");
    echo "<script>alert('Edit Data Berhasil!');
        window.location='../index_admin.php?p=anggota';</script>";
}
?>