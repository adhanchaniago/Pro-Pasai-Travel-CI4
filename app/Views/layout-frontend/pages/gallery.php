<?php echo view('layout-frontend/_partials/head.php') ?>

<body>
    <?php echo view('layout-frontend/_partials/topbar.php') ?>

    <!-- Gallery -->
    <div class="container-fluid paddding mb-5">
        <div class="row mx-0">
            <div class="col-md-12">
                <div class="row">
                    <?php foreach ($gallerys as $no => $row) :  ?>
                        <div class="col-md-3 col-12 paddding animate-box" data-animate-effect="fadeIn">
                            <div class="fh5co_suceefh5co_height_2"><img src="<?= base_url('uploads/gallery/' . $row->gallery_foto) ?>" alt="img" />
                                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                    <div class=""><a target="_blank" href="<?= base_url('uploads/gallery/' . $row->gallery_foto) ?>" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?= tgl_indo($row->gallery_tgl) ?> </a></div>
                                    <div class=""><a target="_blank" href="<?= base_url('uploads/gallery/' . $row->gallery_foto) ?>" class="fh5co_good_font_2"> <?= $row->gallery_nama ?></a></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
	<div class="container-fluid  fh5co_fh5co_bg_contcat">
		<div class="container">
			<br>
			<div>
				<center>
					<div class="fh5co_heading  py-2 mb-4">Atur Perjalanan Anda <span style="color: lightseagreen;">Bersama</span> Kami
						<br>
						<span style="color: lightseagreen;">PASAI <span style="color: tomato;">West Sumatera</span> Tours</span>
					</div>
				</center>
			</div>
			<div class="row py-4">
				<div class="col-md-6 py-3">
					<div class="row fh5co_contact_us_no_icon_difh5co_hover">
						<div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
							<div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
						</div>
						<a href="tel:<?= $profils->profil_no1 ?>">
							<div style="max-width: 100%;" class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
								<span class="c_g d-block">Candra</span>
								<span class="d-block c_g fh5co_contact_us_no_text"><?= $profils->profil_no1 ?></span>
							</div>
						</a>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 py-3">
					<div class="row fh5co_contact_us_no_icon_difh5co_hover">
						<div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
							<div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
						</div>
						<a href="tel:<?= $profils->profil_no1 ?>">
							<div style="max-width: 100%;" class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
								<span class="c_g d-block">Evan</span>
								<span class="d-block c_g fh5co_contact_us_no_text"><?= $profils->profil_no2 ?></span>
							</div>
						</a>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div id="news" class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                    </div>
                    <?php foreach ($news as $no => $row) : ?>
                        <div class="row pb-4">
                            <div class="col-md-5">
                                <div class="fh5co_hover_news_img">
                                    <div class=""><img class="img-fluid" src="<?= base_url('uploads/news/' . $row['news_foto']) ?>" alt="" /></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="col-md-7 animate-box">
                                <a href="single.html" class="fh5co_magna py-2"><?= $row['news_judul'] ?></a>
                                <a href="single.html" class="fh5co_mini_time py-3"> Administrator -
                                    <?= tgl_indo($row['news_tgl']) ?> </a>
                                <div class="fh5co_consectetur">
                                    <?= $row['news_isi'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <?= $pager->links('bootstrap', 'bootstrap_pagination') ?>
                </div>
                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="fh5co_tags_all">
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Education</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Hiking</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Holiday</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Adventure</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Island</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">West Sumatera</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Photography</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Lifestyle</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Art</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Education</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Social</a>
                        <a href="<?= base_url() ?>" class="fh5co_tagg">Three</a>
                    </div>
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">News</div>
                    </div>
                    <?php foreach ($newsLimit as $no => $row) : ?>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img src="<?= base_url('uploads/news/' . $row->news_foto) ?>" alt="img" class="fh5co_most_trading">
                            </div>
                            <div class="col-7 paddding">
                                <a href="<?= base_url('news?page_bootstrap=' . $row->news_id) ?>" class="most_fh5co_treding_font"> <?= $row->news_judul ?></a>
                                <div class="most_fh5co_treding_font_123"> <?= tgl_indo($row->news_tgl) ?></div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php echo view('layout-frontend/_partials/footer.php') ?>
    <?php echo view('layout-frontend/_partials/scripts.php') ?>

</body>

</html>