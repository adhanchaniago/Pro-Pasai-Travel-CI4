<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/trip"><?= $title; ?></a></li>
                        <li class="breadcrumb-item active">Tambah Data <?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Detail Data <?= $title; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('admin/regular/update') ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="img-fluid" src="<?= base_url('uploads/regulars/' . $regulars->relugar_foto) ?>" alt="No Images">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input type="hidden" name="id" value="<?= $regulars->regular_id ?>">
                                        <input value="<?= $regulars->relugar_kode ?>" type="text" class="form-control" id="kode" name="kode" placeholder="Kode" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input value="<?= $regulars->relugar_nama_paket ?>" type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="include">Include</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="include" name="include" placeholder="Place some text here" required><?= $regulars->relugar_include ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exclude">Exclude</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="exclude" name="exclude" placeholder="Place some text here" required><?= $regulars->relugar_exclude ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rute">Rute</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="rute" name="rute" placeholder="Place some text here" required><?= $regulars->relugar_rute ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="foto">Foto</label> <small class="text-danger">Masukan foto baru jika ingin mengupdate foto</small>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                                <label class="custom-file-label" for="foto">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="harga" name="harga" placeholder="Place some text here" required><?= $regulars->relugar_harga ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Deskripsi</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="desc" name="desc" placeholder="Deskripsi" required><?= $regulars->relugar_desc ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="trip">Trips</label>
                                        <small class="text-danger">Isi trips baru jika diperlukan</small>
                                        <?php foreach ($trips as $row) : ?>
                                            <div class="custom-control custom-checkbox">
                                                <input class="form-check-input" type="checkbox" name="trip[]" value="<?= $row->trip_id ?>">
                                                <label class="form-check-label"><?= $row->trip_nama ?></label>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="trip">Trips Lama</label>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Trips</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($hasil as $no => $row) : ?>
                                                <tr>
                                                    <td><?= ++$no ?></td>
                                                    <td><?= $row->trip_nama ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->