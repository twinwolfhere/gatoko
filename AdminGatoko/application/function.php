<?php
function kode_prop_lain($prop){
	if ($prop==1) { $kp['olx']="aceh"; $kp["kaskus"]="aceh";}//aceh
	elseif ($prop==2) { $kp['olx']="bali"; $kp["kaskus"]="bali";}//bali
	elseif ($prop==3) { $kp['olx']="bangka"; $kp["kaskus"]="bangka";}//bangka belitug
	elseif ($prop==4) { $kp['olx']="banten"; $kp["kaskus"]="banten";}//banten
	elseif ($prop==5) { $kp['olx']="bengkuli"; $kp["kaskus"]="bengkulu";}//bengkulu
	elseif ($prop==6) { $kp['olx']="gorontalo"; $kp["kaskus"]="gorontalo";}//gorontalo
	elseif ($prop==7) { $kp['olx']="jakarta"; $kp["kaskus"]="jakarta";}//DKI jakarta
	elseif ($prop==8) { $kp['olx']="jambi"; $kp["kaskus"]="jambi";}//jambi
	elseif ($prop==9) { $kp['olx']="jawa barat"; $kp["kaskus"]="jawa barat";}//jawa barat
	elseif ($prop==10) { $kp['olx']="jawa tengah"; $kp["kaskus"]="jawa tengah";}//jawa tengah
	elseif ($prop==11) { $kp['olx']="jawa timur"; $kp["kaskus"]="jawa timur";}//jawa timur
	elseif ($prop==12) { $kp['olx']="kalimantan barat"; $kp["kaskus"]="kalimantan barat";}//kalimantan barat
	elseif ($prop==13) { $kp['olx']="kalimantan selatan"; $kp["kaskus"]="kalimantan selatan";}//kalimantan selatan
	elseif ($prop==14) { $kp['olx']="kalimantan tengah"; $kp["kaskus"]="kalimantan tengah";}//kalimantan tengah
	elseif ($prop==15) { $kp['olx']="kalimantan timur"; $kp["kaskus"]="kalimantan timur";}//kalimantan timur
	elseif ($prop==16) { $kp['olx']="lampung"; $kp["kaskus"]="lampung";}//lampung
	elseif ($prop==17) { $kp['olx']="maluku"; $kp["kaskus"]="maluku";}//maluku
	elseif ($prop==18) { $kp['olx']="maluku utara"; $kp["kaskus"]="maluku utara";}//maluku utara
	elseif ($prop==19) { $kp['olx']="nusa tenggara barat"; $kp["kaskus"]="nusa tenggara barat";}//NTB
	elseif ($prop==20) { $kp['olx']="nusa tenggara timur"; $kp["kaskus"]="nusa tenggara timur";}//NTT
	elseif ($prop==21) { $kp['olx']="papua barat"; $kp["kaskus"]="papua barat";}//papua barat
	elseif ($prop==22) { $kp['olx']="papua"; $kp["kaskus"]="papua";}//papua
	elseif ($prop==24) { $kp['olx']="riau"; $kp["kaskus"]="riau";}//riau
	elseif ($prop==25) { $kp['olx']="sulawesi selatan"; $kp["kaskus"]="sulawesi selatan";}//sulawesi selatan
	elseif ($prop==26) { $kp['olx']="sulawesi tengah"; $kp["kaskus"]="sulawesi tengah";}//sulawesi tengah
	elseif ($prop==27) { $kp['olx']="sulawesi tenggara"; $kp["kaskus"]="sulawesi tenggara";}//sulawesi tenggara
	elseif ($prop==28) { $kp['olx']="sulawesi utara"; $kp["kaskus"]="sulawesi utara";}//sulawesi utara
	elseif ($prop==29) { $kp['olx']="sumatra barat"; $kp["kaskus"]="sumatera barat";}//sumatera barat
	elseif ($prop==30) { $kp['olx']="sumatra selatan"; $kp["kaskus"]="sumatera selatan";}//sumatera selatan
	elseif ($prop==31) { $kp['olx']="sumatra utara"; $kp["kaskus"]="sumatera utara";}//sumatera utara
	elseif ($prop==32) { $kp['olx']="yogyakarta"; $kp["kaskus"]="yogyakarta";}//DI. Yogyakarta
	elseif ($prop==33) { $kp['olx']="sulawesi barat"; $kp["kaskus"]="sulawesi barat";}//sulawesi barat
	elseif ($prop==34) { $kp['olx']="kepulauan riau"; $kp["kaskus"]="kepulauan riau";}//Kepulauan riau
	else { $kp['olx']="";}
	return $kp;
}
function kategori_lain($kategori){
	if ($kategori=1) {$kat['kaskus']=1;}
	elseif($kategori=2) {$kat['kaskus']=2;}
	else {$kat['kaskus']=0;}
	return $kat;
}

function get_all($all){
	// Extract data all
	$i=0;
	while ($row = mysql_fetch_array($all)) {
		
		$data_all['judul'][$i]= '<a href="'.$row{'link'}.' " target="_blank">'.$row{'judul'}.'</a>';
		$data_all['link'][$i]= $row{'link'};
		$data_all['judul_m'][$i]= $row{'judul'};
		$data_all['jam'][$i]= $row{'jam'};
		$data_all['toko'][$i]= $row{'toko'};
		//$data_all['r'][$i]= $row{'r'};
		$data_all['lokasi'][$i]=$row{'lokasi'};
		$data_all['waktu'][$i]=$row{'waktu'};
		$data_all['harga'][$i]=$row{'harga'};
		$data_all['gambar'][$i]=$row{'gambar'};
		$data_all['src'][$i]=$row{'gambar'};
		$i++;
	}
	return @$data_all;
}
function get_gatoko($gtk){
	// Extract data all
	$i=0;
	while ($row = mysql_fetch_array($gtk)) {
		
		if ($row{'id_user'}=="100101"){
		$data_gtk['nama'][$i]= '<a href="http://fapermata.gatoko.com/detail_produk.php?idp='.$row{'id'}.' " target="_blank">'.$row{'nama'}.'</a>';
		$data_gtk['link'][$i]= $row{'id'};
		$data_gtk['nama_m'][$i]= $row{'nama'};
		$data_gtk['jam'][$i]= $row{'jam'};
		$data_gtk['toko'][$i]= "gatoko";
		$data_gtk['lokasi'][$i]="Fa Permata";
		$data_gtk['tanggal'][$i]=$row{'tanggal'};
		if($row{'harga'}==0){
		$data_gtk['harga'][$i]="CALL ME";
		}else {
		$data_gtk['harga'][$i]="Rp. ".number_format($row{'harga'},0);}
		$data_gtk['gambar'][$i]="http://fapermata.gatoko.com/".$row{'foto1'};
		$data_gtk['src'][$i]="http://fapermata.gatoko.com/".$row{'foto1'};
		}else{
		$data_gtk['nama'][$i]= '<a href="http://gatoko.com/detail_produk.php?idp='.$row{'id'}.' " target="_blank">'.$row{'nama'}.'</a>';
		$data_gtk['link'][$i]= $row{'id'};
		$data_gtk['nama_m'][$i]= $row{'nama'};
		$data_gtk['jam'][$i]= $row{'jam'};
		$data_gtk['toko'][$i]= "gatoko";
		//$data_all['r'][$i]= $row{'r'};
		$data_gtk['lokasi'][$i]="gatoko";
		$data_gtk['tanggal'][$i]=$row{'tanggal'};
		if($row{'harga'}==0){
		$data_gtk['harga'][$i]="CALL ME";
		}else {
		$data_gtk['harga'][$i]="Rp. ".number_format($row{'harga'},0);}
		$data_gtk['gambar'][$i]="http://gatoko.com/sub/user/".$row{'foto1'};
		$data_gtk['src'][$i]="http://gatoko.com/sub/user/".$row{'foto1'};
		}
		$i++;
	}
	return @$data_gtk;
}
function get_kategori($kategori){
	if ($kategori==1){$kat['olx']="mobil";$kat['kaskus']=208;$kat['tokopedia']=40;}//mobil
	elseif ($kategori==2){$kat['olx']="motor";$kat['kaskus']=209;$kat['tokopedia']=37;}//motor
	elseif ($kategori==3){$kat['olx']="properti";$kat['kaskus']=223;$kat['tokopedia']=404;}//properti
	elseif ($kategori==4){$kat['olx']="elektronik-gadget";$kat['kaskus']=317;$kat['tokopedia']=60;}//elektronik
	elseif ($kategori==5){$kat['olx']="elektronik-gadget/handphone";$kat['kaskus']=210;$kat['tokopedia']=65;}//gadget
	elseif ($kategori==6){$kat['olx']="rumah-tangga";$kat['kaskus']=296;$kat['tokopedia']=992;}//interior
	elseif ($kategori==7){$kat['olx']="keperluan-pribadi";$kat['kaskus']=196;$kat['tokopedia']=78;}//fashion
	elseif ($kategori==8){$kat['olx']="jasa-lowongan-kerja/jasa";$kat['kaskus']=202;$kat['tokopedia']=404;}//jasa
	else {$kat['olx']="";$kat['kaskus']="all";}
	return $kat;
}

function base_url($path = ""){
	if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] ."/".explode("/",$_SERVER['REQUEST_URI'])[1]."/".$path;
}

?>