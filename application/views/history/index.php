<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="<?= base_url('aset/index') ?>" button type="button" class="btn waves-effect waves-light btn-secondary"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Kembali</a>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 ml-3 mr-3">
                    <!-- /.card-header -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Indentitas Barang</h3>
                        </div>
                        <!-- form start -->
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input readonly type="text" class="form-control" id="nama_barang" placeholder="Masukkan Kode Barang" name="nama_barang" value="<?= $barang['nama_barang']; ?>">
                                    <div class="form-text text-danger"><?= form_error('nama_barang'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input readonly type="text" class="form-control" id="kode_barang" placeholder="Masukkan Kode Barang" name="kode_barang" value="<?= $barang['kode_barang']; ?>">
                                    <div class="form-text text-danger"><?= form_error('kode_barang'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Register</label>
                                    <input readonly type="text" class="form-control" id="register" placeholder="Masukkan Kode Barang" name="register" value="<?= $barang['register']; ?>">
                                    <div class="form-text text-danger"><?= form_error('register'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Merk</label>
                                    <input readonly type="text" class="form-control" id="merk" placeholder="Masukkan Kode Barang" name="merk" value="<?= $barang['merk']; ?>">
                                    <div class="form-text text-danger"><?= form_error('merk'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Kondisi</label>
                                    <input readonly type="text" class="form-control" id="kondisi" placeholder="Masukkan Kode Barang" name="kondisi" value="<?= $barang['kondisi']; ?>">
                                    <div class="form-text text-danger"><?= form_error('kondisi'); ?></div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Perpindahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- /.card-header -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">History Perpindahan</h3>
                        </div>
                        <!-- form start -->
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input readonly type="text" class="form-control" id="nama_barang" placeholder="Masukkan Kode Barang" name="nama_barang" value="<?= $barang['nama_barang']; ?>">
                                    <div class="form-text text-danger"><?= form_error('nama_barang'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input readonly type="text" class="form-control" id="kode_barang" placeholder="Masukkan Kode Barang" name="kode_barang" value="<?= $barang['kode_barang']; ?>">
                                    <div class="form-text text-danger"><?= form_error('kode_barang'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Register</label>
                                    <input readonly type="text" class="form-control" id="register" placeholder="Masukkan Kode Barang" name="register" value="<?= $barang['register']; ?>">
                                    <div class="form-text text-danger"><?= form_error('register'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Merk</label>
                                    <input readonly type="text" class="form-control" id="merk" placeholder="Masukkan Kode Barang" name="merk" value="<?= $barang['merk']; ?>">
                                    <div class="form-text text-danger"><?= form_error('merk'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Kondisi</label>
                                    <input readonly type="text" class="form-control" id="kondisi" placeholder="Masukkan Kode Barang" name="kondisi" value="<?= $barang['kondisi']; ?>">
                                    <div class="form-text text-danger"><?= form_error('kondisi'); ?></div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="row">
                <div class="col-lg-3 ml-3 mr-3">


                </div>

                <div class="col-lg-8">
                    <!-- /.card-header -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">history Kondisi</h3>
                        </div>
                        <!-- form start -->
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input readonly type="text" class="form-control" id="nama_barang" placeholder="Masukkan Kode Barang" name="nama_barang" value="<?= $barang['nama_barang']; ?>">
                                    <div class="form-text text-danger"><?= form_error('nama_barang'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input readonly type="text" class="form-control" id="kode_barang" placeholder="Masukkan Kode Barang" name="kode_barang" value="<?= $barang['kode_barang']; ?>">
                                    <div class="form-text text-danger"><?= form_error('kode_barang'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Register</label>
                                    <input readonly type="text" class="form-control" id="register" placeholder="Masukkan Kode Barang" name="register" value="<?= $barang['register']; ?>">
                                    <div class="form-text text-danger"><?= form_error('register'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Merk</label>
                                    <input readonly type="text" class="form-control" id="merk" placeholder="Masukkan Kode Barang" name="merk" value="<?= $barang['merk']; ?>">
                                    <div class="form-text text-danger"><?= form_error('merk'); ?></div>
                                </div>
                                <div class="form-group">
                                    <label>Kondisi</label>
                                    <input readonly type="text" class="form-control" id="kondisi" placeholder="Masukkan Kode Barang" name="kondisi" value="<?= $barang['kondisi']; ?>">
                                    <div class="form-text text-danger"><?= form_error('kondisi'); ?></div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </section>
</div>