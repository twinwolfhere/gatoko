<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-60754707-1', 'auto');
    ga('send', 'pageview');

</script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Pusat jual beli dan Toko Online Komputer, Handphone, Mobil, Motor, Barang bekas, Tanah, Rumah, Otomotif, Laptop, Batu Akik, Permata">
    <meta name="keywords"
          content="jual, beli, tanah, rumah, mobil, motor, komputer, handphone, barang, bekas, baru, pakaian, kaos, polos, kemeja, murah, berkualitas, Emas, Perak ">
    <meta name="author" content="Smart Soft Studio">
    <link rel="stylesheet" media="screen" href="<?= base_url("css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" media="screen" href="<?= base_url("css/style.css"); ?>">

    <title>Gatoko | Cari Barang di Semua Toko Online</title>
    <link rel="icon" href="<?= base_url("favico.png") ?>" type="image/gif">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?= base_url("js/tooltip.js"); ?>"></script>
    <script type="text/javascript" src="<?= base_url("js/ajax.js"); ?>"></script>
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
                        <li><a href="<?= base_url(); ?>"><img src="<?= base_url("images/home_menu.png"); ?>"
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
                        <li><a href="<?= base_url("about") ?>">About Us</a></li>
                        <li><a href="<?= base_url("faq") ?>">FAQ</a></li>
                        <li><a href="<?= base_url("desclaimer") ?>">Desclaimer</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu login_form">
                                <form action= "User/login" method ="POST">
                                <!-- <form action="User/login" method="POST"> -->
                                <label>Email</label>
                                <input type="text" name="email" class="form-control login_field"/>
                                <label>Password</label>
                                <input type="password" name="password" class="form-control login_field"/>
                                <input type="submit" name="submit" value="submit"
                                       class="btn btn-default btn-sub login_button"/>

                                <div class="lupa_sandi">lupa kata sandi? <a href="#">klik disini</a></div>
                                <hr>
                                <center>
                                    <div class="lupa_sandi">mulai berjualan dengan</div>
                                    <a href="<?= base_url("admin/register.php") ?>">Daftar disini.</a></center>
                                <!-- </form> -->
                                <?= form_close(); ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>