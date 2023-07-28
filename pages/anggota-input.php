    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12"><br><br>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Tambah Anggota <button class="btn btn-xs btn-grey"><a href="index_admin.php?p=anggota"><i class=" fa fa-undo"></i></a></button>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="proses/anggota-input.php" method="post">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input name="nama" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nim</label>
                                        <input name="nim" type="number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" type="text" class="form-control" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>No. Telp</label>
                                        <input name="no_tlp" type="text" class="form-control">
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