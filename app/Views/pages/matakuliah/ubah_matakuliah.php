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
                        <form role="form" method="post" action="/ubahmkl/<?= $editmatakuliah['kdmk'] ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>kdmk</label>
                                <input class="form-control" placeholder="Enter text" name="kdmk" value="<?= $editmatakuliah['kdmk'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" placeholder="Enter text" name="namamk" value="<?= $editmatakuliah['namamk'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Sks</label>
                                <input class="form-control" placeholder="Enter text" name="sks" value="<?= $editmatakuliah['sks'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Prodi</label>
                                <select class="form-control" name="prodi" required>
                                    <option value="">-- Pilih Prodi --</option>
                                    <option value="Teknik Informatika" <?= $editmatakuliah['prodi'] == 'Teknik Informatika' ? 'selected' :
                                                                            ''; ?>>Teknik Informatika</option>
                                    <option value="Teknik Informasi" <?= $editmatakuliah['prodi'] == 'Teknik Informasi' ? 'selected' :
                                                                            ''; ?>>Teknik Informasi</option>
                                    <option value="Hukum" <?= $editmatakuliah['prodi'] == 'Hukum' ? 'selected' :
                                                                ''; ?>>Hukum</option>
                                    <option value="Pendidikan" <?= $editmatakuliah['prodi'] == 'Pendidikan' ? 'selected' :
                                                                    ''; ?>>Pendidikan</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>semester</label>
                                <input class="form-control" placeholder="Enter text" name="semester" value="<?= $editmatakuliah['semester'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis" id="optionsRadios1" value="Teori" <?= $editmatakuliah['jenis'] == 'Teori' ? 'checked' :
                                                                                                                ''; ?>>Teori
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis" id="optionsRadios2" value="praktik" <?= $editmatakuliah['jenis'] == 'praktik' ? 'checked' :
                                                                                                                    ''; ?>>praktik
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/matakuliah" class="btn btn-primary" role="button">Kembali</a>

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