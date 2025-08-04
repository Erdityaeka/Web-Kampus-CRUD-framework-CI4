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
                    <a href="/tambahMatakuliah" style="margin-bottom: 15px;" class="btn btn-primary btn-lg" role="button">Tambah</a>

                    </a>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Kode Mk</th>
                                <th>nama mk</th>
                                <th>sks</th>
                                <th>Prodi</th>
                                <th>Semester</th>
                                <th>Jenis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($matakuliah as $row): ?>
                                <tr>
                                    <td><?php echo $row['kdmk'] ?></td>
                                    <td><?php echo $row['namamk'] ?></td>
                                    <td><?php echo $row['sks'] ?></td>
                                    <td><?php echo $row['prodi'] ?></td>
                                    <td><?php echo $row['semester'] ?></td>
                                    <td><?php echo $row['jenis'] ?></td>

                                    <td>
                                        <a href="/ubahmk/<?= $row['kdmk']; ?>"><i class="fa fa-fw" style="color: green;" aria-hidden="true" title="Copy to use pencil">&#xf040</i></a>
                                        <a href="/deletemk/<?= $row['kdmk']; ?>"><i class="fa fa-fw" style="color: red;" aria-hidden="true" title="Copy to use trash">&#xf1f8</i></a>
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