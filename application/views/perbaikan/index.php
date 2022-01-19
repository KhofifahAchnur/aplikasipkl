<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Perbaikan Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Perbaikan Barang</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card-header -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Daftar Perbaikan Data Barang
                            </h3>
                            <a href="<?= base_url('perbaikan/tambah') ?>" button type="button" class="btn waves-effect waves-light btn-primary" style="float:right"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Nama Barang</th>
                                        <th>Kode Barang</th>
                                        <th>Kerusakan</th>
                                        <th>Jenis Service</th>
                                        <th>Biaya</th>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($barang as $brg) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $brg['tanggal_masuk'] ?></td>
                                            <td><?= $brg['nama_barang'] ?></td>
                                            <td><?= $brg['kode_barang'] ?></td>
                                            <td><?= $brg['kerusakan'] ?></td>
                                            <td><?= $brg['jenis_service'] ?></td>
                                            <td><?= $brg['biaya'] ?></td>
                                            <td>
                                                <a href= "<?= base_url(); ?>lokasi/edit/<?= $brg['id']; ?>" class="badge badge-pill badge-success">EDIT</a> |
                                                <a href="<?= base_url(); ?>lokasi/hapus/<?= $brg['id']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Yakin ingin menghapus data?');">DELETE</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>