<?php
include '../koneksi.php';
?>
    <!-- <div id="page-wrapper">
        <div class="row">
                <div class="col-xs-12"><br><br>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Data Transaksi Peminjaman
                        </div>
                        <div class="panel-body">
                        <a href="pages/rp-cetak.php" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-print"></i> Print</a><br><br><br>
                            <div class="table-responsive"> -->
                                <h3>Data Transaksi Peminjaman</h3>
                            <table border=1 cellspacing=0 cellpadding=10 class="table table-striped table-bordered table-hover" id="tabel">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Anggota</th>
                                        <th>Nama</th>
                                        <th>Judul Buku</th>
                                        <th>Kategori</th>
                                        <th>Penulis</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                        $no=1;
                                        $sql = mysqli_query($con,"SELECT * FROM transaksi INNER JOIN anggota ON anggota.id_anggota=transaksi.id_anggota INNER JOIN buku ON buku.id_buku=transaksi.id_buku WHERE status_transaksi='Sedang Meminjam'");
                                        while($d=mysqli_fetch_array($sql)) {
                                        ?>
                                    <tr>
                                        <td><?= $no?></td>
                                        <td><?= $d['id_anggota']?></td>
                                        <td><?= $d['nama']?></td>
                                        <td><?= $d['judul']?></td>
                                        <td><?= $d['kategori']?></td>
                                        <td><?= $d['penulis']?></td>
                                        <td><?= $d['penerbit']?></td>
                                        <td><?= $d['th_terbit']?></td>
                                        <td><?= $d['tgl_pinjam']?></td>
                                        <td><?= $d['tgl_kembali']?></td>
                                        <td><?= $d['status_transaksi']?></td>
                                         </td>
                                    </tr>
                                        <?php $no++; } ?>
<!--                                     
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
        </div>
    </div> -->

    <link href="assets/css/plugins/dataTables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/plugins/dataTables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
    <script>
    $.noConflict();
    jQuery(document).ready(function($) {
    $('#tabel').DataTable();
    });
    </script>
    <script>
        window.print();
    </script>

                                