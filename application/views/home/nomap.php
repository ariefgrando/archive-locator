<!-- Registration form - START -->
<div class="container">
    <div class="row">
		<div class="col-lg-12" style='background: linear-gradient(to right, #F9F9F9 0%, #F9F9F9 100%)'>
			<?php

			if(!isset($nomormap['nomap'])){

				echo "Maaf data isian anda belum lengkap, silakan periksa kembali data isian anda. Klik tombol back pada bagian kiri atas browser anda. Terima Kasih<br/><br/>Salam<br/>Tim Rekrutmen";

			}else{


				if(isset($nomormap['err'])){
					print_r("Maaf No. KTP ".$nomormap['ktp'].", sudah pernah terdaftar atas nama :<br/><br/>".$nomormap['nama']." dengan alamat ".$nomormap['alamat']."<br/><br/>Salam<br/>Tim Rekrutmen");
				}else{
					print_r("Terima Kasih ".$nomormap['nama'].", Data anda berhasil di simpan. Selanjutnya silakan cantumkan <font color='red' size='5'>No. ".$nomormap['nomap']."</font> pada Map anda<br/><br/>Salam<br/>Tim Rekrutmen");
				}

			}
			?>
		</div>
		<div>&nbsp;&nbsp;</div>
		<div>&nbsp;&nbsp;</div>

        <input type="button" name="back" id="back" value=" Kembali ke Form isian " class="btn btn-info pull-left">
    </div>
</div>
<!-- Registration form - END -->
