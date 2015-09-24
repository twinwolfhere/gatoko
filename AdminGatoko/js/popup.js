  $(function() {
    var dialog, form,
      tips = $( ".validateTips" );

    function addUser() {
		var c_kaskus = document.getElementById("c_kaskus").checked;
		var c_olx = document.getElementById("c_olx").checked;
		var c_tokopedia = document.getElementById("c_tokopedia").checked;
		var c_lazada = document.getElementById("c_lazada").checked;
		var c_bhineka = document.getElementById("c_bhineka").checked;
		var c_blibli = document.getElementById("c_blibli").checked;
		
		$( "option#list-toko" ).remove();
		
		
		$( "#list-toko" ).append( "<option id='list-toko' value=''>.. Lihat Toko Online</option>");
		if(c_kaskus==true){
			$( "input#kaskus" ).remove();
			$( "#list-toko" ).append( "<option id='list-toko' value='kaskus'>kaskus</option>");
			$( "#form-seleksi" ).append('<input id="kaskus" type="hidden" name="k"  value="1" class="form-control">');
		} else{
			$( "input#kaskus" ).remove();
			$( "#form-seleksi" ).append('<input id="kaskus" type="hidden" name="k"  value="0" class="form-control">');
		}
		if(c_olx==true){
			$( "input#olx" ).remove();
			$( "#list-toko" ).append( "<option id='list-toko' value='olx'>olx</option>");
			$( "#form-seleksi" ).append('<input id="olx" type="hidden" name="o" value="1" class="form-control">');
		} else{
			$( "input#olx" ).remove();
			$( "#form-seleksi" ).append('<input id="olx" type="hidden" name="o"  value="0" class="form-control">');
		}
		if(c_tokopedia==true){
			$( "input#tokopedia" ).remove();
			$( "#list-toko" ).append( "<option id='list-toko' value='tokopedia'>tokopedia</option>");
			$( "#form-seleksi" ).append('<input id="tokopedia" type="hidden" name="t" value="1" class="form-control">');
		} else{
			$( "input#tokopedia" ).remove();
			$( "#form-seleksi" ).append('<input id="tokopedia" type="hidden" name="t"  value="0" class="form-control">');
		}
		if(c_lazada==true){
			$( "input#lazada" ).remove();
			$( "#list-toko" ).append( "<option id='list-toko' value='lazada'>lazada</option>");
			$( "#form-seleksi" ).append('<input id="lazada" type="hidden" name="l" value="1" class="form-control">');
		} else{
			$( "input#lazada" ).remove();
			$( "#form-seleksi" ).append('<input id="lazada" type="hidden" name="l"  value="0" class="form-control">');
		}
		if(c_bhineka==true){
			$( "input#bhineka" ).remove();
			$( "#list-toko" ).append( "<option id='list-toko' value='bhineka'>bhineka</option>");
			$( "#form-seleksi" ).append('<input id="bhineka" type="hidden" name="bh" value="1" class="form-control">');
		} else{
			$( "input#bhineka" ).remove();
			$( "#form-seleksi" ).append('<input id="bhineka" type="hidden" name="bh"  value="0" class="form-control">');
		}
		if(c_blibli==true){
			$( "input#blibli" ).remove();
			$( "#list-toko" ).append( "<option id='list-toko' value='blibli'>blibli</option>");
			$( "#form-seleksi" ).append('<input id="blibli" type="hidden" name="bl" value="1" class="form-control">');
		} else{
			$( "input#blibli" ).remove();
			$( "#form-seleksi" ).append('<input id="blibli" type="hidden" name="bl"  value="0" class="form-control">');
		}
		
        dialog.dialog( "close" );

      return valid;
    }
 
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      width: 350,
      modal: true,
      buttons: {
        "Konfigurasi": addUser,
        Cancel: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addUser();
    });
 
    $( "#user1" ).button().on( "click", function() {
		if (document.getElementById("kaskus").value==1){
		document.getElementById("c_kaskus").checked = true;
		}
		if (document.getElementById("olx").value==1){
		document.getElementById("c_olx").checked = true;
		}
		if (document.getElementById("tokopedia").value==1){
		document.getElementById("c_tokopedia").checked = true;
		}
		if (document.getElementById("lazada").value==1){
		document.getElementById("c_lazada").checked = true;
		}
		if (document.getElementById("bhineka").value==1){
		document.getElementById("c_bhineka").checked = true;
		}
		if (document.getElementById("blibli").value==1){
		document.getElementById("c_blibli").checked = true;
		}
		dialog.dialog( "open" );
    });
  });