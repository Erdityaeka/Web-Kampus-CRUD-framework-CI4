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
                        <form role="form" method="post" action="/ubahds/<?= $editdosen['nidn'] ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIDN</label>
                                <input class="form-control" placeholder="Enter text" name="nidn" value="<?= $editdosen['nidn'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" placeholder="Enter text" name="nama" value="<?= $editdosen['nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" placeholder="Enter text" name="email" value="<?= $editdosen['email'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis_kelamin" id="optionsRadios1" value="Laki-laki" <?= $editdosen['jenis_kelamin'] == 'Laki-laki' ? 'checked' :
                                                                                                                            ''; ?>>Laki-laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis_kelamin" id="optionsRadios2" value="Perempuan" <?= $editdosen['jenis_kelamin'] == 'Perempuan' ? 'checked' :
                                                                                                                            ''; ?>>Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Telpon</label>
                                <input class="form-control" placeholder="Enter text" name="tlpn" value="<?= $editdosen['tlpn'] ?>">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/dosen" class="btn btn-primary" role="button">Kembali</a>

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