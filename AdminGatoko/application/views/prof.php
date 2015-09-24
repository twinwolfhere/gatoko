
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
    //<![CDATA[
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    //]]>
</script>

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>

<script type="text/javascript" >
    $(document).ready(function() {

        $('#photoimg').live('change', function()			{
            $("#preview").html('');
            $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
            $("#imageform").ajaxForm({
                target: '#preview'
            }).submit();

        });
    });
</script>
<script>
    function cekpassword(pass2) {
        var pass1 = document.getElementById("pass").value;
        if(pass1==pass2){
            document.getElementById("pass_mesin").innerHTML = "<span style='color:green'>match password</span>";
        }else {
            document.getElementById("pass_mesin").innerHTML = "<span style='color:red'>not match password!!!</span>";
        }
    }
</script>

<html>

<body>
<div class="container">
    <div class="row" style="padding:5px 0px 5px 0px;">

        <div class="col-md-2">
            <img src="<?=base_url("images/logotengah.png")?>" class="img-responsive" style="max-width:200px">

        </div>

        <div class="col-md-10" style="margin-top:8px;">
            <form method="get" id="form-seleksi" action="../../list.php">
                <div class="col-md-5" style="padding-right:2px; padding-left:2px;margin-top:4px;">
                    <input type="text" placeholder="Masukan nama produk yang akan dicari | Selamat berbelanja" name="tag" id="input" class="form-control" placeholder="cari  nama">
                </div>
                <div class="col-md-2" style="padding-right:2px; padding-left:2px;margin-top:4px;">
                    <button type="submit" class="btn btn-primary" style="width:100%; float:left;">Cari Produk</button>
                </div>
                <input id="page" type="hidden" name="page"  value="1" class="form-control">
            </form>
        </div><!-- /.navbar-collapse -->

    </div>
    <hr class="hr" style="margin:0;">
</div>
<br>
<div class="container">
    <div class="row">


        <div class="col-md-12">
            <h3>
                <b>Profil - <?= $this->session->userdata('email'); ?></b></h3>
            <a href="profil.php" class="menu-admin active">Profil</a>
            <a href="produk_saya.php" class="menu-admin">Produk Saya</a>
            <a href="add_produk.php" class="menu-admin">Tambah Produk</a>
            <br><br>
        </div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Profil</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-3">

                <form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
                    <div id='preview' style="width:100%">
                        <img src="<?=base_url("element/foto_member")?>/<?= $this->session->userdata('foto'); ?>"/>
                    </div>
					<span class="btn btn-default btn-file">
					<img src="<?=base_url("element/browse.png")?>" class="browse"/>
					<input type="file" name="photoimg" id="photoimg"/>
					</span>
                </form>
            </div>
            <div class="col-md-9">
                <form action="profil_proses.php" method="POST"  enctype="multipart/form-data">
                    <label>Nama</label><br>
                    <input type="text" name="nama" class="ui-text" value="<?= $this->session->userdata('user_name'); ?>" required/><br><br>
                    <label>No. Identitas (KTP / SIM / Kartu Pelajar)</label><br>
                    <input type="text" name="ktp" class="ui-text" value="<?= $this->session->userdata('no_identitas'); ?>" required/><br><br>
                    <label>Password </label><br>
                    <input type="password" name="pass" id="pass" class="ui-text" style="width:200px" value="<?= $this->session->userdata('password'); ?>" required /><br><br>
                    <label>Re-Password </label><br>
                    <input type="password" name="pass2" id="pass2" class="ui-text" style="width:200px" value="<?= $this->session->userdata('password'); ?>" onchange="cekpassword(this.value)" required />
                    <br><span id="pass_mesin"></span><br>
                    <div class="col-md-4" style="padding:0;">
                        <label>Propinsi </label><br>
                        <script type="text/javascript" src="js/ajax_kota.js"></script>
                        <select name="prop" id="prop" onchange="ajaxkota(this.value)" class="combo">
                            <option value="">Pilih Provinsi</option>
                            <?php
                            $queryProvinsi=mysql_query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");
                            while ($dataProvinsi=mysql_fetch_array($queryProvinsi)){
                                if ($dataProvinsi['lokasi_propinsi']==$propinsi)
                                    echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'" selected>'.$dataProvinsi['lokasi_nama'].'</option>';
                                else
                                    echo '<option value="'.$dataProvinsi['lokasi_propinsi'].'">'.$dataProvinsi['lokasi_nama'].'</option>';
                            }
                            ?>
                            <select>
                    </div>
                    <div class="col-md-4" style="padding:0;">
                        <label>Kota </label><br>
                        <select name="kota" id="kota" onchange="ajaxkec(this.value)" class="combo">
                            <option value="<?= $this->session->userdata('kota'); ?>"><?= $this->session->userdata('kota'); ?></option>
                        </select>
                    </div>
                    <div class="col-md-4" style="padding:0;">
                    </div>
                    <br><br><br>
                    <label>Alamat </label><br>
                    <input type="text" name="alamat" class="ui-text" value="<?= $this->session->userdata('alamat'); ?>" required /><br><br>
                    <label>No. Telp </label><br>
                    <input type="number" name="telepon" class="ui-text" value="<?= $this->session->userdata('telepon'); ?>" required /><br><br>
                    <label>BBM </label><br>
                    <input type="text" name="bbm" class="ui-text" value="<?= $this->session->userdata('bbm'); ?>" required /><br><br>
                    <label>Keterangan </label><br>
                    <textarea name="ket" class="ui-text" style="height:150px !important; width:80% !important;" required> <?= $this->session->userdata('keterangan'); ?> </textarea><br>
                    <br>
                    <div class="info">
                        <ul>
                            <li>Pastikan data yang anda isikan benar</li>
                            <ul>
                    </div>
                    <br>
                    <input type="checkbox" name="agreement" required/> Apakah anda sudah menyetujui <a href="">terms and condition</a><br><br>
                    <input type="submit" name="submit" value="UPDATE" class="btn btn-default btn-sub"/>
                </form>
            </div>
        </div>


    </div>
</div>
</body>
</html>