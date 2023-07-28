
<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM buku WHERE id_buku='$id'");
$d=mysqli_fetch_array($sql);
?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12"><br><br>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Edit Buku <button class="btn btn-xs btn-grey"><a href="index_admin.php?p=buku"><i class=" fa fa-undo"></i></a></button>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="proses/buku-edit.php" method="post">
                                    <div class="form-group">
                                       
                                        <input value="<?= $d['id_buku']?>" name="id" type="hidden" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input value="<?= $d['judul']?>" name="judul" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <input value="<?= $d['kategori']?>" name="kategori" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Penulis</label>
                                        <input value="<?= $d['penulis']?>" name="penulis" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <input value="<?= $d['penerbit']?>" name="penerbit" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Terbit</label>
                                        <input value="<?= $d['th_terbit']?>" name="th_terbit" type="text" class="form-control">
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