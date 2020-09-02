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
                        <li class="breadcrumb-item"><a href="/admin/profil"><?= $title; ?></a></li>
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
                        <?php echo form_open_multipart('admin/profil/update') ?>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tentang">Profil Perusahaan</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="tentang" name="tentang" placeholder="Place some text here" required><?= $profils->profil_tentang ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tentang_candra">Tentang Candra</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="tentang_candra" name="tentang_candra" placeholder="Place some text here" required><?= $profils->profil_candra ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_1">Contact Candra</label>
                                        <div class="mb-3">
                                            <input value="<?= $profils->profil_no1 ?>" type="text" name="no_candra" id="no_candra" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tentang_evan">Tentang Evan</label>
                                        <div class="mb-3">
                                            <textarea class="textarea" id="tentang_evan" name="tentang_evan" placeholder="Place some text here" required><?= $profils->profil_evan ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_2">Contact Evan</label>
                                        <div class="mb-3">
                                            <input value="<?= $profils->profil_no1 ?>" type="text" name="no_evan" id="no_evan" class="form-control">
                                        </div>
                                    </div>
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