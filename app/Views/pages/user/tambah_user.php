<?= $this->extend('layout/media') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Data User
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post" action="createuser" enctype="multipart/form-data">

                          
                            <div class="form-group">
                                <label>nama</label>
                                <input class="form-control" placeholder="Enter text" name="username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="Enter text" name="password">
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role" required>
                                    <option value="">-- Pilih Role --</option>
                                    <option value="admin">admin</option>
                                    <option value="dosen">dosen</option>
                                    <option value="mahasiswa">mahasiswa</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/mahasiswa" class="btn btn-primary" role="button">Kembali</a>

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