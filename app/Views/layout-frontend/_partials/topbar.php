<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="<?= base_url('/') ?>" class="color_fff ">
                    <marquee behavior="" direction="">
                        <i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;<?= tgl_indo(date('Y-m-d')) ?>
                </a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="<?= base_url('/') ?>" class="treding_btn">PASAI West Sumatera Tours</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
                <a href="<?= base_url('/') ?>" class="color_fff ">The Smart Way to West Sumatra Tours</a>
                </marquee>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <a href="<?= base_url('/') ?>" class="color_fff ">
                <div class="col-12 col-md-3 fh5co_padding_menu">
                    <img src="<?= base_url() ?>/assets-frontend/images/logo_baru.png" alt="img" class="fh5co_logo_width">
                </div>
            </a>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a href="<?= $contacts->contact_twitter ?>" target="_blank" class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-instagram"></i></div>
                    </a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="<?= $contacts->contact_facebook ?>" target="_blank" class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                    </a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="<?= $contacts->contact_youtube ?>" target="_blank" class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-youtube"></i></div>
                    </a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="mailto:<?= $contacts->contact_email ?>" target="_blank" class="fh5co_display_table">
                        <div class="fh5co_verticle_middle"><i class="fa fa-google"></i></div>
                    </a>
                </div>

               

                <div class="d-inline-block text-center dd_position_relative ">
                    <select class="form-control fh5co_text_select_option">
                        <option>Indonesian </option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <a class="navbar-brand" href="#"><img src="<?= base_url() ?>/assets-frontend/images/logo_baru.png" alt="img" class="mobile_logo_width" /></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?= ($menu == "home") ? "active" : "" ?>">
                        <a class="nav-link" href="<?= base_url('/') ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?= ($menu == "contact") ? "active" : "" ?> ">
                        <a class="nav-link " href="<?= base_url('contact') ?>">Profil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown <?= ($menu == "packages") ? "active" : "" ?> "">
                        <a class=" nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Packages <span class="sr-only">(current)</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                            <a class="dropdown-item" href="<?= base_url('special') ?>">Special Tours For Inspired Adventure</a>
                            <a class="dropdown-item" href="<?= base_url('rental') ?>">Car Rental For Tours & Education</a>
                            <a class="dropdown-item" href="<?= base_url('regular') ?>">Epic Pleasure For Regular Tours</a>
                        </div>
                    </li>
                    <li class="nav-item <?= ($menu == "news") ? "active" : "" ?> ">
                        <a class="nav-link" href="<?= base_url('news') ?>">News <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?= ($menu == "gallery") ? "active" : "" ?> ">
                        <a class="nav-link" href="<?= base_url('gallery') ?>">Gallery <span class="sr-only">(current)</span></a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>