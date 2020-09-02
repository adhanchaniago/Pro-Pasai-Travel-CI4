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
                        <li class="breadcrumb-item"><a href="/admin/rent"><?= $title; ?></a></li>
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
                        <div class="card-body">
                            <a href="<?= base_url('admin/regular/update/' . $regulars->regular_id) ?>" class="btn btn-sm btn-warning mb-3"><span class="fas fa-edit"></span> Edit</a>
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="img-fluid" src="<?= base_url('uploads/regulars/' . $regulars->relugar_foto) ?>" alt="No Images">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kode">Kode</label>
                                        <input readonly value="<?= $regulars->regular_id ?>" type="hidden">
                                        <p><?= $regulars->relugar_kode ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <p><?= $regulars->relugar_nama_paket ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="include">Include</label>
                                        <p><?= $regulars->relugar_include ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="rute">Rute</label>
                                        <p><?= $regulars->relugar_rute ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <p><?= $regulars->relugar_harga ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exclude">Exclude</label>
                                        <p><?= $regulars->relugar_exclude ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="desc">Deskripsi</label>
                                        <p><?= $regulars->relugar_desc ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="trip">Trips</label>
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
                        </div>
                        <!-- /.card-body -->
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