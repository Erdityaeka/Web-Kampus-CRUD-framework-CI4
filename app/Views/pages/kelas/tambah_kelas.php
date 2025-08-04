<?= $this->extend('layout/media') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data Kelas
            </div>
            <div class="panel-body">
                <div class="row">

                    <div class="col-lg-12">
                        <form role="form" method="post" action="tambahkl" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Kode Kelas</label>
                                <input class="form-control" placeholder="Enter text" name="kode_kelas">
                            </div>
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <input class="form-control" placeholder="Enter text" name="nama_kelas">
                            </div>
                            <div class="form-group">
                                <label>NAMA Prodi</label>
                                <select class="form-control" name="idprodi" required>
                                    <option value="">-- Pilih Prodi --</option>
                                    <?php foreach ($prodi as $p): ?>
                                        <option value="<?= $p['idprodi'] ?>">
                                            <?= $p['prodi'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/kelas" class="btn btn-primary" role="button">Kembali</a>

                            </a>
                        </form>
                    </div>

                </div>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<?= $this->endSection() ?>