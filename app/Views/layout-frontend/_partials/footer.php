<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 py-5">
                <!-- <img src="<?= base_url() ?>/assets-frontend/images/logo.png" alt="img" /> -->
            </div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3" id="about">
                <div class="footer_main_title py-3"> About</div>
                <div class="footer_sub_about pb-3">
                    <p>“PASAI west sumatra tours” adalah rumah kami untuk menyambut kedatangan kamu di Sumatra Barat. Sekarang percayai hatimu, bahwa ini adalah kisah yang bermakna, dan kita akan merindukannya suatu hari nanti.</p>
                </div>
                <div class="footer_mediya_icon">
                    <div class="text-center d-inline-block"><a href="<?= $contacts->contact_youtube ?>" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-youtube"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a href="<?= $contacts->contact_email ?>" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-google"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a href="<?= $contacts->contact_twitter ?>" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a href="<?= $contacts->contact_facebook ?>" class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a></div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Menu</div>
                <ul class="footer_menu">
                    <li><a href="<?= base_url('/') ?>"><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Home</a></li>
                    <li><a href="<?= base_url('/news') ?>"><i class="fa fa-angle-right"></i>&nbsp;&nbsp; News</a></li>
                    <li><a href="<?= base_url('/contact') ?>"><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Contact</a></li>
                    <li><a href="<?= base_url('/gallery') ?>"><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Gallery</a></li>
                    <li><a href="<?= base_url('/profil') ?>"><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Profil</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> Rekening</div>
                <div class="footer_makes_sub_font"> BRI</div>
                <a href="#" class="footer_post pb-5"> <?= $contacts->contact_rek_bri ?> </a>
                <div class="footer_makes_sub_font"> BNI</div>
                <a href="#" class="footer_post pb-5"> <?= $contacts->contact_rek_bni ?> </a>
                <div class="footer_makes_sub_font"> BCA</div>
                <a href="#" class="footer_post pb-5"> <?= $contacts->contact_rek_bca ?> </a>
                <div class="footer_position_absolute"><img src="<?= base_url() ?>/assets-frontend/images/footer_sub_tipik.png" alt="img" class="width_footer_sub_img" /></div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Gallery</div>
                <?php foreach ($gallerysfooter as $no => $row) :  ?>
                    <a href="<?= base_url('gallery') ?>" class="footer_img_post_6"><img src="<?= base_url('uploads/gallery/' . $row->gallery_foto) ?>" alt="img" /></a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> © Copyright <?= date('Y'); ?>, All rights reserved <a href="https://mediatamaweb.co.id/" title="Mediatama">CV Mediatama Web Indonesia</a> by <a href="https://instagram.com/egovaflavia" title="egova"> Egova</a></div>
            <div class="col-12 col-md-6 spdp_right py-4">
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>
</div>