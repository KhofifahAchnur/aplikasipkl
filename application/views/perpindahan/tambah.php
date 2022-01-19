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
                        <a href="<?= base_url('kondisi/index') ?>" button type="button" class="btn waves-effect waves-light btn-secondary"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Kembali</a>
                       
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Perpindahan Barang</h3>
                        </div>
                        <!-- form start -->
                        <form action = "" method = "post">
                        <!-- <input type="hidden" name="id" value="<?= $pindah['id']; ?>"> -->
                            <div class="card-body">
                            <div class="form-group">
                                    <label>Nama Barang</label>
                                    <select name="nama_barang" class="form-control" id="nama_barang">
                                        <?php foreach ($aset as $index => $brg) : ?>
                                            <option value="<?= $brg['nama_barang']; ?>"><?= $brg['nama_barang']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            <div class="form-group">
                                    <label>Kode Barang</label>
                                    <select name="kode_barang" class="form-control" id="kode_barang">
                                        <?php foreach ($aset as $index => $brg) : ?>
                                            <option value="<?= $brg['kode_barang']; ?>"><?= $brg['kode_barang']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            <div class="form-group">
                                    <label>Lokasi Barang</label>
                                    <select name="lokasi" class="form-control" id="lokasi">
                                        <?php foreach ($lokasi as $index => $lks) : ?>
                                            <option value="<?= $lks['id']; ?>"><?= $lks
                                            ['lokasi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Penanggung Jawab</label>
                                    <select name="nama" class="form-control" id="nama">
                                        <?php foreach ($penanggung_jawab as $index => $pj) : ?>
                                            <option value="<?= $pj['id']; ?>"><?= $pj['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
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
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </section>
</div>