<?= $this->extend('layout/media') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data Jadwal
            </div>
            <div class="panel-body">
                <div class="row">

                    <div class="col-lg-12">
                        <form role="form" method="post" action="tambahjdwl" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Matakuliah</label>
                                <select class="form-control" name="kdmk" required>
                                    <option value="">-- Pilih Matakuliah --</option>
                                    <?php foreach ($matakuliah as $p): ?>
                                        <option value="<?= $p['kdmk'] ?>">
                                            <?= $p['namamk'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Dosen</label>
                                <select class="form-control" name="nidn" required>
                                    <option value="">-- Pilih Matakuliah --</option>
                                    <?php foreach ($dosen as $p): ?>
                                        <option value="<?= $p['nidn'] ?>">
                                            <?= $p['nama'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hari</label>
                                <input class="form-control" placeholder="Enter text" name="hari">
                            </div>
                            <div class="form-group">
                                <label for="appt">Jam Mulai:</label>
                                <input type="time" id="appt" name="jam_mulai">
                            </div>
                            <div class="form-group">
                                <label for="appt">Jam Selesai:</label>
                                <input type="time" id="appt" name="jam_selesai">
                            </div>
                            <div class="form-group">
                                <label>Nama Ruangan</label>
                                <select class="form-control" name="kode_ruangan" required>
                                    <option value="">-- Pilih Ruangan --</option>
                                    <?php foreach ($ruangan as $p): ?>
                                        <option value="<?= $p['kode_ruangan'] ?>">
                                            <?= $p['nama_ruangan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <select class="form-control" name="kode_kelas" required>
                                    <option value="">-- Pilih Ruangan --</option>
                                    <?php foreach ($kelas as $p): ?>
                                        <option value="<?= $p['kode_kelas'] ?>">
                                            <?= $p['nama_kelas'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/dosen" class="btn btn-primary" role="button">Kembali</a>

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