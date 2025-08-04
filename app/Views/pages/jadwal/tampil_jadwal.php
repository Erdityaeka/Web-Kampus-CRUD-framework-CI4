<?= $this->extend('layout/media') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Advanced Tables
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <a href="/tambahJadwal" style="margin-bottom: 15px;" class="btn btn-primary btn-lg" role="button">Tambah</a>

                    </a>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id Jadwal</th>
                                <th>Nama Matakuliah</th>
                                <th>Nama Dosen</th>
                                <th>Hari</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Ruangan</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jadwal as $row): ?>
                                <tr>
                                    <td><?php echo $row['id_jadwal'] ?></td>
                                    <td><?php echo $row['namamk'] ?></td>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td><?php echo $row['hari'] ?></td>
                                    <td><?php echo $row['jam_mulai'] ?></td>
                                    <td><?php echo $row['jam_selesai'] ?></td>
                                    <td><?php echo $row['nama_ruangan'] ?></td>
                                    <td><?php echo $row['nama_kelas'] ?></td>

                                    <td>
                                        <a href="/ubahjdwl/<?= $row['id_jadwal']; ?>"><i class="fa fa-fw" style="color: green;" aria-hidden="true" title="Copy to use pencil">&#xf040</i></a>
                                        <a href="/deletejdwl/<?= $row['id_jadwal']; ?>"><i class="fa fa-fw" style="color: red;" aria-hidden="true" title="Copy to use trash">&#xf1f8</i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<?= $this->endSection() ?>