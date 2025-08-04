<?= $this->extend('layout/media') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data Kaprodi
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post" action="tambahrg" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Kode Ruangan</label>
                                <input class="form-control" placeholder="Enter text" name="kode_ruangan">
                            </div>
                            <div class="form-group">
                                <label>NAMA Ruangan</label>
                                <select class="form-control" name="nama_ruangan" required>
                                    <option value="">-- Pilih Ruangan --</option>
                                    <option value="Mawar">Mawar</option>
                                    <option value="Melati">Melati</option>
                                    <option value="Anggrek">Anggrek</option>

                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/ruangan" class="btn btn-primary" role="button">Kembali</a>

                            </a>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<?= $this->endSection() ?>