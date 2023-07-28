<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM anggota WHERE id_anggota='$id'");
$d=mysqli_fetch_array($sql);
?>

<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12"><br><br>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Edit Anggota <button class="btn btn-xs btn-grey"><a href="index_admin.php?p=anggota"><i class=" fa fa-undo"></i></a></button>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="proses/anggota-edit.php" method="post">
                                <div class="form-group">
                                        
                                        <input name="id" type="hidden" class="form-control" value="<?= $d['id_anggota']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="nama" type="text" class="form-control" value="<?= $d['nama']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nim</label>
                                        <input name="nim" type="text" class="form-control" value="<?= $d['nim']?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea value="<?= $d['alamat']?>" name="alamat" type="text" class="form-control" rows="3"><?= $d['alamat']?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telp</label>
                                        <input name="no_tlp" type="text" class="form-control" value="<?= $d['no_tlp']?>">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-sm btn-success" type="submit" name="simpan" value="Simpan" id="" onclick="return confirm ('Apakah yakin akan menyimpan data ini?')">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>