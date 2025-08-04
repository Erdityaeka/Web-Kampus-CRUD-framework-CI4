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
                    <a href="/tambahkprodi" style="margin-bottom: 15px;" class="btn btn-primary btn-lg" role="button">Tambah</a>

                    </a>

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>idprodi</th>
                                <th>nama</th>
                                <th>prodi</th>
                                <th>aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kaprodi as $row): ?>
                                <tr>
                                    <td><?php echo $row['idprodi'] ?></td>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td><?php echo $row['prodi'] ?></td>

                                    <td>
                                        <a href="/ubahprodi/<?= $row['idprodi']; ?>"><i class="fa fa-fw" style="color: green;" aria-hidden="true" title="Copy to use pencil">&#xf040</i></a>
                                        <a href="/delete/<?= $row['idprodi']; ?>"><i class="fa fa-fw" style="color: red;" aria-hidden="true" title="Copy to use trash">&#xf1f8</i></a>
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