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
                        <li class="breadcrumb-item"><a href="/admin/special"><?= $title; ?></a></li>
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
                            <h3 class="card-title">Tamba Data <?= $title; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php echo form_open_multipart('admin/special/store'); ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="include">Include</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="include" name="include" placeholder="Place some text here" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="harga" name="harga" placeholder="Place some text here" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select name="kategori" required class="form-control" id="kategori">
                                            <option value="">.:: Pilih Kategori ::.</option>
                                            <option value="Island">Island</option>
                                            <option value="Tracking">Tracking</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto" name="foto">
                                                <label class="custom-file-label" for="foto">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exclude">Exclude</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="exclude" name="exclude" placeholder="Place some text here" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Deskripsi</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="desc" name="desc" placeholder="Place some text here" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="trip">Trips</label>
                                        <?php foreach ($trips as $row) : ?>
                                            <div class="custom-control custom-checkbox">
                                                <input class="form-check-input" type="checkbox" name="trip[]" value="<?= $row->trip_id ?>">
                                                <label class="form-check-label"><?= $row->trip_nama ?></label>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                        <?php echo form_close(); ?>
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