<?= $this->extend('layout/media') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah Data Kaprodi
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post" action="/ubahrg/<?= $editruangan['kode_ruangan'] ?>" enctype="multipart/form-data">
                             <div class="form-group">
                                <label>Kode Kelas</label>
                                <input class="form-control" placeholder="Enter text" name="kode_ruangan" value="<?= $editruangan['kode_ruangan'] ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Kode Ruangan</label>
                                <select class="form-control" name="nama_ruangan" required>
                                    <option value="">-- Pilih Ruangan --</option>
                                    <option value="Mawar" <?= $editruangan['nama_ruangan'] == 'Mawar' ? 'selected' :
                                                                            ''; ?>>Mawar</option>
                                    <option value="Melati" <?= $editruangan['nama_ruangan'] == 'Melati' ? 'selected' :
                                                                            ''; ?>>Melati</option>
                                    <option value="Anggrek" <?= $editruangan['nama_ruangan'] == 'Anggrek' ? 'selected' :
                                                                            ''; ?>>Anggrek</option>
                                 
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