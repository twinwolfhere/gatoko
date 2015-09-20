

	
	<div class="container">
		<div class="row" style="padding:5px 0px 5px 0px;">
			
				<div class="col-md-4">
					<img src="<?=base_url("../images/logotengah.png")?>" class="img-responsive" style="max-width:200px">
				</div>
				
				<div class="col-md-8">
					<form method="get" id="form-seleksi" action="../list.php">
					<ul class="nav navbar-nav navbar-right" style="margin-right:10px">
						<li style="margin-right:5px;">
							<input type="text" name="tag" id="input" class="form-control" placeholder="cari produk ke semua toko" style="max-width:200px;"></li>
						<li style="margin-right:5px;">
							<select id="prop" name="prop" onchange="propchange()" class="form-control" style="width:150px;">
							  <option value="0" >Semua Propinsi</option>
							  <option value="1" >DI. Aceh</option>
							  <option value="2" >Bali</option>
							  <option value="3" >Bangka Belitung</option>
							  <option value="4" >Banten</option>
							  <option value="5" >Bengkulu</option>
							  <option value="6" >Gorontalo</option>
							  <option value="7" >DKI Jakarta</option>
							  <option value="8" >Jambi</option>
							  <option value="9" >Jawa Barat</option>
							  <option value="10"  >Jawa Tengah</option>
							  <option value="11" >Jawa Timur</option>
							  <option value="12" >Kalimantan Barat</option>
							  <option value="13" >Kalimantan Selatan</option>
							  <option value="14" >Kalimantan Tengah</option>
							  <option value="15" >Kalimantan Timur</option>
							  <option value="16" >Lampung</option>
							  <option value="17" >Maluku</option>
							  <option value="18" >Maluku Utara</option>
							  <option value="19" >Nusa Tenggara Barat</option>
							  <option value="20" >Nusa Tenggara Timur</option>
							  <option value="21" >Papua Barat</option>
							  <option value="22" >Papua</option>
							  <option value="24" >Riau</option>
							  <option value="25" >Sulawesi Selatan</option>
							  <option value="26" >Sulawesi Tengah</option>
							  <option value="27" >Sulawesi Tenggara</option>
							  <option value="28" >Sulawesi Utara</option>
							  <option value="29" >Sumatera Barat</option>
							  <option value="30" >Sumatera Selatan</option>
							  <option value="31" >Sumatera Utara</option>
							  <option value="32" >DI. Yogyakarta</option>
							  <option value="33" >Sulawesi Barat</option>
							  <option value="34" >Kepulauan Riau</option>
							</select>
						</li>
						<li style="margin-right:5px;">
							<select id="kategori" name="kt" class="form-control" style="width:150px;">
							  <option value="0" selected >Semua Kategori</option>
							  <option value="1" >Mobil</option>
							  <option value="2" >Motor</option>
							  <option value="3" >Properti dan Rumah</option>
							  <option value="4" >Elektronik dan Komputer</option>
							  <option value="5" >Gadget dan Handphone</option>
							  <option value="6" >Interior dan Rumah Tangga</option>
							  <option value="7" >Fashion dan Aksesoris</option>
							  <option value="8" >Jasa</option>
							</select>
						</li>
						<li>
							<button type="submit" class="btn btn-default btn-sub"style="width:90px;">Search</button>
						</li>
						
					</ul>
					<input id="kaskus" type="hidden" name="k"  value="1" class="form-control">
						<input id="olx" type="hidden" name="o"  value="1" class="form-control">
						<input id="tokopedia" type="hidden" name="t"  value="1" class="form-control">
						<input id="lazada" type="hidden" name="l"  value="1" class="form-control">
						<input id="bhineka" type="hidden" name="bh"  value="1" class="form-control">
						<input id="blibli" type="hidden" name="bl"  value="1" class="form-control">
						<input id="td" type="hidden" name="td"  value="0" class="form-control">
						<input id="page" type="hidden" name="page"  value="1" class="form-control">
						</form>
				</div><!-- /.navbar-collapse -->
		</div>
		<hr class="hr" style="margin:0;">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h3>
			<b>Halaman Admin Gatoko</b></h3>
			<a href="profil" class="menu-admin active">Profil</a>
			<a href="produk_saya" class="menu-admin">Produk Saya</a>
			<a href="add_produk" class="menu-admin">+ Tambah Produk</a>
			<br>
			<br>
			<div class="panel panel-info">
		<div class="panel-heading">
	    	<h3 class="panel-title">Profil</h3>
	    </div>
					<div class="panel-body">
			<form action="admin_proses.php" method="POST"  enctype="multipart/form-data">
			<label>Nama</label><br>
			<input type="text" name="nama" class="ui-text" required/><br><br>
			<label>No. Identitas (KTP / SIM / Kartu Pelajar)</label><br>
			<input type="text" name="ktp" class="ui-text" required/><br><br>
			<label>Email </label><br>
			<input type="email" name="email" class="ui-text" required /><br><br>
			<label>Alamat </label><br>
			<input type="text" name="alamat" class="ui-text" required /><br><br>
			<label>No. Telp </label><br>
			<input type="number" name="telepon" class="ui-text" required /><br><br>
			<label>BBM </label><br>
			<input type="text" name="bbm" class="ui-text" required /><br><br>
			<label>Foto Profil</label><br>
			<input type="file" name="profil" class="ui-text" required/>
			<label>Keterangan </label><br>
			<textarea name="ket" class="ui-text" style="height:150px !important; width:80% !important;" required></textarea><br>
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
	</div>	<br>	
</body>
<footer>
	<div class="container">
	<div class="pull-right" style="padding:5px 0px;">
		copyright &copy; by SMart Soft Studio
	</div></div>
</footer>
</html>