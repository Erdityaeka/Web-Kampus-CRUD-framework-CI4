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
                        <form role="form" method="post" action="tambahmk" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Kode MK</label>
                                <input class="form-control" placeholder="Enter text" name="kdmk">
                            </div>
                            <div class="form-group">
                                <label>Nama Mk</label>
                                <input class="form-control" placeholder="Enter text" name="namamk">
                            </div>
                            <div class="form-group">
                                <label>sks</label>
                                <input class="form-control" placeholder="Enter text" name="sks">
                            </div>
                            <div class="form-group">
                                <label>Prodi</label>
                                <select class="form-control" name="prodi" required>
                                    <option value="">-- Pilih Prodi --</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Informasi">Teknik Informasi</option>
                                    <option value="Hukum">Hukum</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis </label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis" id="optionsRadios1" value="Teori" checked>Teori
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jenis" id="optionsRadios2" value="praktik">praktik
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>semester</label>
                                <input class="form-control" placeholder="Enter text" name="semester">
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