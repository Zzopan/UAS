<?php
include '../koneksi.php';
?>
<!-- 
    <div id="page-wrapper">
        <div class="row">
                <div class="col-xs-12"><br><br>
                    <div class="panel panel-info">
                        <div class="panel-heading"> -->
                            <!-- <h3>Data Buku</h3>
                        </div>
                        <div class="panel-body">
                        <a href="index_admin.php?p=buku-input"><button class="btn btn-xs btn-primary"><i class="fa fa-plus-circle"></i> <span>Tambah data</span></button></a>
                        <a href="pages/buku-cetak.php" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-print"></i> Print</a><br><br><br>
                            <div class="table-responsive"> -->
                                <h3>Data Buku</h3>
                            <table border=1 cellspacing=0 cellpadding=10 class="table table-striped table-bordered table-hover" id="tabel">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Penulis</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                        $no=1;
                                        $sql = mysqli_query($con,"SELECT * FROM buku");
                                        while($d=mysqli_fetch_array($sql)) {
                                        ?>
                                    <tr>
                                        <td><?= $no?></td>
                                        <td><?= $d['judul']?></td>
                                        <td><?= $d['kategori']?></td>
                                        <td><?= $d['penulis']?></td>
                                        <td><?= $d['penerbit']?></td>
                                        <td><?= $d['th_terbit']?></td>
                                        
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
        window.print()
    </script>


                                