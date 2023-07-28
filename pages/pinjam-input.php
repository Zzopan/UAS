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
                        Peminjaman Buku <button class="btn btn-xs btn-grey"><a href="index_admin.php?p=pinjam"><i class=" fa fa-undo"></i></a></button>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="proses/pinjam-input.php" method="post">
                                    <div class="form-group">
                                    <div class="form-group">
                                        <label>ID Buku</label>
                                        <input value="<?= $d['id_buku']?>" name="id_buku" type="text" class="form-control" readonly>
                                    </div>
                                        <label>ID Anggota</label>
                                        <select class="form-control" name="id_anggota" id="">
                                            <option value="">--Pilih--</option>
                                            <?php
                                                $sql = mysqli_query($con, "SELECT * FROM anggota");
                                                while($data=mysqli_fetch_array($sql)){
                                                    echo '<option value="'.$data['id_anggota'].'">'.$data['id_anggota'],'   -    '. $data['nama'] .'</option>';
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Tanggal Pinjam</label>
                                        <input name="tgl_pinjam" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Kembali</label>
                                        <input name="tgl_kembali" type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-sm btn-success" type="submit" name="simpan" value="Simpan" id="">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>