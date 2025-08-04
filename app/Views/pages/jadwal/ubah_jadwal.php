<?= $this->extend('layout/media') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah Data Jadwal
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post" action="/ubahhjdwl/<?= $editjadwal['id_jadwal'] ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Id Jadwal</label>
                                <input class="form-control" placeholder="Enter text" name="id_jadwal" value="<?= $editjadwal['id_jadwal'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Matakuliah</label>
                                <select class="form-control" name="kdmk" required>
                                    <option value="">-- Pilih Matakuliah --</option>
                                    <?php foreach ($matakuliah as $p): ?>
                                        <option value="<?= $p['kdmk'] ?>"
                                            <?= ($p['kdmk'] == $editjadwal['kdmk']) ? 'selected' : '' ?>>
                                            <?= $p['namamk'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Dosen</label>
                                <select class="form-control" name="nidn" required>
                                    <option value="">-- Pilih Dosen --</option>
                                    <?php foreach ($dosen as $p): ?>
                                        <option value="<?= $p['nidn'] ?>"
                                            <?= ($p['nidn'] == $editjadwal['nidn']) ? 'selected' : '' ?>>
                                            <?= $p['nama'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Hari</label>
                                <input class="form-control" placeholder="Enter text" name="hari" value="<?= $editjadwal['hari'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="jam_mulai">Jam Mulai:</label>
                                <input type="time" id="jam_mulai" name="jam_mulai"
                                    value="<?= isset($editjadwal['jam_mulai']) ? date('H:i', strtotime($editjadwal['jam_mulai'])) : '' ?>">
                            </div>

                            <div class="form-group">
                                <label for="jam_selesai">Jam Selesai:</label>
                                <input type="time" id="jam_selesai" name="jam_selesai"
                                    value="<?= isset($editjadwal['jam_selesai']) ? date('H:i', strtotime($editjadwal['jam_selesai'])) : '' ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Ruangan</label>
                                <select class="form-control" name="kode_ruangan" required>
                                    <option value="">-- Pilih Ruangan --</option>
                                    <?php foreach ($ruangan as $p): ?>
                                        <option value="<?= $p['kode_ruangan'] ?>"
                                            <?= ($p['kode_ruangan'] == $editjadwal['kode_ruangan']) ? 'selected' : '' ?>>
                                            <?= $p['nama_ruangan'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Kelas</label>
                                <select class="form-control" name="kode_kelas" required>
                                    <option value="">-- Pilih Kelas --</option>
                                    <?php foreach ($kelas as $p): ?>
                                        <option value="<?= $p['kode_kelas'] ?>"
                                            <?= ($p['kode_kelas'] == $editjadwal['kode_kelas']) ? 'selected' : '' ?>>
                                            <?= $p['nama_kelas'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/jadwal" class="btn btn-primary" role="button">Kembali</a>

                            </a>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<?= $this->endSection() ?>