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
                        <form role="form" method="post" action="/ubah/<?= $editprodi['idprodi'] ?>" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" placeholder="Enter text" name="nama" value="<?= $editprodi['nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Prodi</label>
                                <select class="form-control" name="prodi" required>
                                    <option value="">-- Pilih Prodi --</option>
                                    <option value="Teknik Informatika" <?= $editprodi['prodi'] == 'Teknik Informatika' ? 'selected' :
                                                                            ''; ?>>Teknik Informatika</option>
                                    <option value="Teknik Informasi" <?= $editprodi['prodi'] == 'Teknik Informasi' ? 'selected' :
                                                                            ''; ?>>Teknik Informasi</option>
                                    <option value="Hukum" <?= $editprodi['prodi'] == 'Hukum' ? 'selected' :
                                                                ''; ?>>Hukum</option>
                                    <option value="Pendidikan" <?= $editprodi['prodi'] == 'Pendidikan' ? 'selected' :
                                                                    ''; ?>>Pendidikan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/kaprodi" class="btn btn-primary" role="button">Kembali</a>

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