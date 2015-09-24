<!-- body -->
<!-- 	<?php
if (isset($_GET['m'])) {
    ?>
			<div class="container">
			<div class='sukses'>anda berhasil mendaftar, silahkan login....</div>
			</div>
			<?php
}
?> -->
<div class="container">
    <!-- <?php include "form_search_home.php" ?>	 -->
    <center class="android_d">
        download in : <a href="https://play.google.com/store/apps/details?id=com.gatokocom.app" target="_blank">
            <img src="<?= base_url("images/android.png") ?>" alt="android" width="150"/>
        </a>
    </center>
</div>
<div class="bawah">
    <div class="container">
        <center>
            <h3 style="margin:3px;"><b>Our Partner :</b></h3>
        </center>
        <br>

        <div class="row">
            <?php for ($i = 0; $i < 1; $i++) { ?>
                <div class="col-md-3 partner">
                    <center class="p-inner">
                        <a href="http://faridas-art.com" target="_blank">
                            <img src="<?= base_url("images/support/u_faridas.png") ?>" class="l-inner" alt="faridas"/>
                        </a>
                    </center>
                </div>
                <div class="col-md-3 partner">
                    <center class="p-inner">
                        <a href="http://desyinof.com" target="_blank">
                            <img src="<?= base_url("images/support/u_desyinof.png") ?>" class="l-inner" alt="desyinof"/>
                        </a>
                    </center>
                </div>
                <div class="col-md-3 partner">
                    <center class="p-inner">
                        <a href="http://smartsoftstudio.com" target="_blank">
                            <img class="l-inner" src="<?= base_url("images/support/u_smart.png") ?>" alt="smart"/> </a>
                    </center>
                </div>
                <div class="col-md-3 partner">
                    <center class="p-inner">
                        <a href="http://fapermata.gatoko.com" target="_blank">
                            <img class="l-inner" src="<?= base_url("images/support/u_fapermata.png") ?>"
                                 alt="desyinof"/> </a>
                    </center>
                </div>
            <?php } ?>

        </div>
    </div>
    <br>

    <center>
        download in : <a href="https://play.google.com/store/apps/details?id=com.gatokocom.app" target="_blank">
            <img src="<?= base_url("images/android.png") ?>" alt="android" width="150"/>
        </a><br><br><br><br><br><br><br><br><br><br>

    </center>
</div>

</body>
<footer>
    <div class="container">
        <center>
            copyright &copy; by gatoko.com @2015
        </center>
    </div>
</footer>
</html>