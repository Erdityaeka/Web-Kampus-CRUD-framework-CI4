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
                    <a href="/tambahkruangan" style="margin-bottom: 15px;" class="btn btn-primary btn-lg" role="button">Tambah</a>

                    </a>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Kode Ruangan</th>
                                <th>Nama Ruangan</th>
                                <th>aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ruangan as $row): ?>
                                <tr>
                                    <td><?php echo $row['kode_ruangan'] ?></td>
                                    <td><?php echo $row['nama_ruangan'] ?></td>

                                    <td>
                                        <a href="/ubahruangan/<?= $row['kode_ruangan']; ?>"><i class="fa fa-fw" style="color: green;" aria-hidden="true" title="Copy to use pencil">&#xf040</i></a>
                                        <a href="/deleterg/<?= $row['kode_ruangan']; ?>"><i class="fa fa-fw" style="color: red;" aria-hidden="true" title="Copy to use trash">&#xf1f8</i></a>
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