
    <div id="page-wrapper">
        <div class="row">
                <div class="col-xs-12"><br><br>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Data Anggota
                        </div>
                        <div class="panel-body">
                        <a href="index_admin.php?p=anggota-input"><button class="btn btn-xs btn-primary"><i class="fa fa-plus-circle"></i> <span>Tambah data</span></button></a>
                        <a href="pages/anggota-cetak.php" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-print"></i> Print</a><br><br><br>
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="tabel">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nim</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th><i class="fa fa-gear"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                        $no=1;
                                        $sql = mysqli_query($con,"SELECT * FROM anggota");
                                        while($d=mysqli_fetch_array($sql)) {
                                        ?>
                                    <tr>
                                        <td><?= $no?></td>
                                        <td><?= $d['nama']?></td>
                                        <td><?= $d['nim']?></td>
                                        <td><?= $d['alamat']?></td>
                                        <td><?= $d['no_tlp']?></td>
                                        <td><a href="index_admin.php?p=anggota-edit&id=<?=$d['id_anggota'];?>"><i class="fa fa-pencil-square"></i> <a href="proses/anggota-hapus.php?id=<?= $d['id_anggota'];?>" onclick = "return confirm ('Apakah yakin akan menghapus data ini?')"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                        <?php $no++; } ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
                </div>
        </div>
    </div>

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



                                