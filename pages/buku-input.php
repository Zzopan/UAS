    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12"><br><br>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Tambah Buku <button class="btn btn-xs btn-grey"><a href="index_admin.php?p=buku"><i class=" fa fa-undo"></i></a></button>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="proses/buku-input.php" method="post">
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input name="judul" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <input name="kategori" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Penulis</label>
                                        <input name="penulis" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <input name="penerbit" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Terbit</label>
                                        <input name="th_terbit" type="text" class="form-control">
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