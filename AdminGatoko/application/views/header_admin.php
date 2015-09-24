<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" media="screen" href="<?= base_url("css/bootstrap.min.css") ?>">
    <link rel="stylesheet" media="screen" href="<?= base_url("css/style.css") ?>">
    <script src="<?= base_url("js/jquery.min.js") ?>"></script>
    <script src="<?= base_url("js/bootstrap.min.js") ?>"></script>
    <!-- owl -->
    <script src="<?= base_url("js/owl.carousel.js") ?>"></script>
    <script src="<?= base_url("js/owl.carousel.min.js") ?>"></script>
    <link rel="stylesheet" media="screen" href="<?= base_url("css/owl.carousel.css") ?>">
    <link rel="stylesheet" media="screen" href="<?= base_url("css/owl.theme.css") ?>">
    <link rel="stylesheet" media="screen" href="<?= base_url("css/owl.transitions.css") ?>">
    <script>s
        var owl;

        $(document).ready(function () {

            owl = $("#owl-demo");

            owl.owlCarousel({

                navigation: false, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                afterInit: afterOWLinit // do some work after OWL init
            });


            function afterOWLinit() {

                // adding A to div.owl-page
                $('.owl-controls .owl-page').append('<a class="item-link" href="#"/>');

                var pafinatorsLink = $('.owl-controls .item-link');

                /**
                 * this.owl.userItems - it's your HTML <div class="item"><img src="http://www.ow...t of us"></div>
                 */
                $.each(this.owl.userItems, function (i) {

                    $(pafinatorsLink[i])
                        // i - counter
                        // Give some styles and set background image for pagination item
                        .css({
                            'background': 'url(' + $(this).find('img').attr('src') + ') center center no-repeat',
                            '-webkit-background-size': 'cover',
                            '-moz-background-size': 'cover',
                            '-o-background-size': 'cover',
                            'background-size': 'cover'
                        })
                        // set Custom Event for pagination item
                        .hover(function () {
                            owl.trigger('owl.goTo', i);
                        });

                });


                // add Custom PREV NEXT controls
                $('.owl-pagination').prepend('<a href="#prev" class="prev-owl"/>');
                $('.owl-pagination').append('<a href="#next" class="next-owl"/>');


                // set Custom event for NEXT custom control
                $(".next-owl").click(function () {
                    owl.trigger('owl.next');
                });

                // set Custom event for PREV custom control
                $(".prev-owl").click(function () {
                    owl.trigger('owl.prev');
                });

            }

        });
    </script>
    <title>Gatoko</title>
</head>
<body>
<div class="menu">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="#">Gatoko</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url() ?>"><img src="<?= base_url("images/home_menu.png") ?>"
                                                             alt="home menu" style=" height: 20px;"/></a></li>
                        <li><a href="#">SHOP</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">WEBSITE
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">WEBSITE TOKO ONLINE</a></li>
                                <li><a href="#">WEBSITE TEMPLATE</a></li>
                                <li><a href="#">WEBSITE CUSTOM</a></li>
                            </ul>
                        </li>
                        <li><a href="#">SOFTWARE</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../about">About Us</a></li>
                        <li><a href="../faq">FAQ</a></li>
                        <li><a href="../desclaimer">Desclaimer</a></li>
                        <li><a href="#">Selamat datang <span
                                    style="color:red;"><?= $this->session->userdata('user_name'); ?> </span>...</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= base_url("User/profil"); ?>"> <img src="<?=base_url("images/profil.png")?>"> Profil</a>
                                </li>
<!--                                --><?php
//                                if ($_SESSION["level"] == "1") {
//                                    $profil = "sub/" . $_SESSION["url"] . "/profil";
//                                    $konfigurasi = "sub/" . $_SESSION["url"] . "/admin";
//                                    $iklan_saya = "sub/" . $_SESSION["url"] . "/produk_saya";
//                                    $add_produk = "sub/" . $_SESSION["url"] . "/add_produk";
//                                } else {
//                                    $profil = "sub/user/profil";
//                                    $iklan_saya = "sub/user/produk_saya";
//                                    $add_produk = "sub/user/add_produk";
//                                }
//                                ?>
<!--                                <li>-->
<!--                                    <a href="--><?//= $profil ?><!--"><img src="--><?//= base_url("images/profil.png") ?><!--"-->
<!--                                                                  alt="profil toko online gatoko" height="20px"/>-->
<!--                                        Profil</a>-->
<!--                                </li>-->
<!--                                --><?php //if ($_SESSION["level"] == "1") { ?>
<!--                                    <li>-->
<!--                                        <a href="--><?//= $konfigurasi ?><!--"><img src="--><?//= base_url("images/iklan.png") ?><!--"-->
<!--                                                                           alt="iklan toko online" height="20px"/>-->
<!--                                            Konfigurasi Toko</a>-->
<!--                                    </li>-->
<!--                                --><?php //} ?>
<!--                                <li>-->
<!--                                    <a href="--><?//= $iklan_saya ?><!--"><img src="--><?//= base_url("images/iklan.png") ?><!--"-->
<!--                                                                      alt="iklan" height="20px"/> Iklan Saya</a>-->
<!--                                </li>-->
<!--                                <li style="margin-bottom:20px;">-->
<!--                                    <a href="--><?//= $add_produk ?><!--"><img src="--><?//= base_url("images/plus.png") ?><!--"-->
<!--                                                                      alt="tambah iklan" height="20px"/> Tambah-->
<!--                                        Iklan</a>-->
<!--                                </li>-->
<!--                                <hr style="margin:2px;">-->
                                <li><a href="<?= base_url("User/logout"); ?>" class="logout"><img
                                            src="<?= base_url("images/logout.png") ?>" alt="logout" height="20px"/>Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>