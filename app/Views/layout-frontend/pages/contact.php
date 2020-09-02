<?php echo view('layout-frontend/_partials/head.php') ?>

<body>
    <?php echo view('layout-frontend/_partials/topbar.php') ?>

    <div class="container-fluid contact_us_bg_img">
        <div class="container">
            <div class="row">
                <a href="<?= base_url('/') ?>" class="fh5co_con_123"><i class="fa fa-home"></i></a>
                <a href="#" class="fh5co_con pt-2"> Contact Us </a>
            </div>
        </div>
    </div>
    <div class="container-fluid  fh5co_fh5co_bg_contcat">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
                        </div>
                    
                            <div style="max-width: 100%;" class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                                <span class="c_g d-block">Candra</span>
                                <a href="tel:<?= $profils->profil_no1 ?>" class="d-block c_g fh5co_contact_us_no_text"><?= $profils->profil_no1 ?></a>
                            </div>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
                        </div>
                        
                            <div style="max-width: 100%;" class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                                <span class="c_g d-block">Evan</span>
                                <a href="tel:<?= $profils->profil_no2 ?>" class="d-block c_g fh5co_contact_us_no_text"><?= $profils->profil_no2 ?></a>
                            </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-envelope"></i></span>
                            </div>
                        </div>
                        <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span class="c_g d-block">Have any questions?</span>
                            <a href="mailto:<?= $contacts->contact_email ?>" class="d-block c_g fh5co_contact_us_no_text"><?= $contacts->contact_email ?></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="row py-4">
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-money"></i></span> </div>
                        </div>

                        <div style="max-width: 100%;" class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span class="c_g d-block">BRI</span>
                            <span class="d-block c_g fh5co_contact_us_no_text"><?= $contacts->contact_rek_bri ?></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-money"></i></span> </div>
                        </div>
                        <div style="max-width: 100%;" class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span class="c_g d-block">BNI</span>
                            <span class="d-block c_g fh5co_contact_us_no_text"><?= $contacts->contact_rek_bni ?></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                        <div style="max-width: 100%;" class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span class="c_g d-block">BCA</span>
                            <span class="d-block c_g fh5co_contact_us_no_text"><?= $contacts->contact_rek_bca ?></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row py-4">
                <div class="col-md-6 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-map-marker"></i></span>
                            </div>
                        </div>
                        <div  class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span style="max-width: 15%;" class="c_g d-block">Address</span>
                            <span class="d-block c_g fh5co_contact_us_no_text"> <?= $contacts->contact_alamat ?></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-4">
        <div class="container">
            <div class="col-12 text-center contact_margin_svnit ">
                <div class="text-center fh5co_heading py-2">Contact Us</div>
            </div>

            <div class="row">


                <div class="col-12 col-md-12 align-self-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31915.294291105678!2d100.28853936713026!3d-0.8179244118114611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4c17f990a07c9%3A0x28d72ed5c5024d80!2sPadang%20Sarai%2C%20Kec.%20Koto%20Tangah%2C%20Kota%20Padang%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1596820569047!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php echo view('layout-frontend/_partials/footer.php') ?>
    <?php echo view('layout-frontend/_partials/scripts.php') ?>

</body>

</html>