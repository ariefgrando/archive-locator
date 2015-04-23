<div class="row">

	<div class="large-4 small-12 columns">
		<div class="hide-for-small panel">
			<!-- Log in Form -->
				<?php echo form_open('user/auth/'); ?>
				<div class="row">
					<div class="large-12 columns">
					  <div class="row collapse prefix-radius">

						<div class="small-12 columns" style='text-align:center;'>
						  <?php echo "<i class='icono-smile' style='color:#000;'></i><br/><b>".$this->session->userdata("nama")."</b>";?>
						</div>
						<div class="small-12 columns" style='text-align:center;'>
						  &nbsp;
						</div>
						<div class="small-12 columns" style='text-align:center;'>
						  <?php echo "Tanggal akses terakhir : <br/>".$this->session->userdata("lastaccess");?>
						</div>
						<div class="small-12 columns" style='text-align:center;'>
						  &nbsp;
						</div>
						<div class="small-12 columns" style='text-align:center;'>
						  <?php echo "<a href='".base_url()."user/Auth/logout'>Log Out</a>";?>
						</div>

					  </div>
					</div>
				</div>
			  </form>

			<!-- End of Log in Form -->
		</div>
		<a href="#">
			<div class="panel callout radius">
				<h6><i class='icono-bookmark' style='color:#296AD4;'></i>&nbsp;&nbsp;
					<?php
						foreach($archive as $value){
							echo $value->totalarsip;
						}
					?>
				&nbsp;arsip sudah di daftarkan</h6>
			</div>
		</a>
	</div>

	<div class="large-8 columns">
		<div class="row">
			<div class="large-12 columns">
				<div class="panel">
					<div class="row">
						<!--div class="large-2 small-6 columns">
							
						</div-->
						<div  class="large-12 columns">
							<strong>
								<?php
								if($judul=="Status Penambahan Data Arsip Baru"){
									echo "<i class='icono-paperClip' style='color:#296AD4;'></i>&nbsp;&nbsp;";
								}else{
									echo "<i class='icono-market' style='color:#296AD4;'></i>&nbsp;&nbsp;";
								}

									echo $judul;
								?>
							</strong><hr>
						</div>

						<?php //echo form_open('admin/dashboard/submitnewlemari'); ?>

						<div class="large-12 columns">
						  <div class="row collapse">

							<?php
								if(!isset($newlemari["kodelemari"]) && isset($newlemari)){
									echo "<label style='color:red;'>".$newlemari."</label>";
								}elseif(isset($newlemari["kodelemari"])){
							?>

									<label>Data lemari baru berhasil ditambahkan dengan kode :
										<?php
											//foreach($newlemari as $value){
											//	echo $value->kodelemari;
											//}
											echo $newlemari["kodelemari"];
										?>
									</label>

							<?php 

								}elseif(!isset($newodner["kodeodner"]) && isset($newodner)){
									echo "<label style='color:red;'>".$newodner."</label>";
								}elseif(isset($newodner["kodeodner"])){

								?>

									<label>Data Odner baru berhasil ditambahkan dengan kode :
										<?php
											//foreach($newlemari as $value){
											//	echo $value->kodelemari;
											//}
											echo $newodner["kodeodner"];
										?>
									</label>

								<?php

								}elseif(!isset($newuser["username"]) && isset($newuser)){
									echo "<label style='color:red;'>".$newuser."</label>";
								}elseif(isset($newuser["username"])){

								?>

									<label>Data User baru berhasil ditambahkan dengan username :
										<?php
											//foreach($newlemari as $value){
											//	echo $value->kodelemari;
											//}
											echo $newuser["username"];
										?>
									</label>

								<?php
								}elseif(!isset($newarsip["no_surat"]) && isset($newarsip)){
									echo "<label style='color:red;'>".$newarsip."</label>";
								}elseif(isset($newarsip["no_surat"])){

								?>
									<label>Data Arsip baru berhasil ditambahkan dengan no surat :
										<?php
											//foreach($newlemari as $value){
											//	echo $value->kodelemari;
											//}
											echo $newarsip["no_surat"];
										?>
									</label>

								<?php
								}elseif(!isset($newarsiploc["odner"]) && isset($newarsiploc)){
									echo "<label style='color:red;'>".$newarsip."</label>";
								}elseif(isset($newarsiploc["odner"])){

								?>
									<label>Pemindahan Data Arsip No. <?php echo $newarsiploc["no_surat"];?> ke odner <?php echo $newarsiploc["odner"];?> berhasil dilakukan
									</label>

								<?php
								}elseif(!isset($updatelemari["no_lemari"]) && isset($updatelemari)){
									echo "<label style='color:red;'>".$updatelemari."</label>";
								}elseif(isset($updatelemari["no_lemari"])){
									echo "<label>Perubahan Data Lemari No. ".$updatelemari["no_lemari"]." berhasil dilakukan </label>";
								}
								?>
						  </div>
						</div>


						<?php
							if(isset($newlemari)){
						?>
						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Jika anda ingin menambahkan data lemari baru silakan klik tombol di bawah ini !
							</label>
						  </div>
						</div>
						<?php
							}elseif(isset($newodner)){
						?>
						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Jika anda ingin menambahkan data odner baru silakan klik tombol di bawah ini !
							</label>
						  </div>
						</div>
						<?php
							}elseif(isset($newuser)){
						?>
						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Jika anda ingin menambahkan data user baru silakan klik tombol di bawah ini !
							</label>
						  </div>
						</div>

						<?php
							}elseif(isset($newarsip)){
						?>
						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Jika anda ingin menambahkan data arsip baru silakan klik tombol di bawah ini !
							</label>
						  </div>
						</div>

						<?php
							}
						?>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>
							</label>
						  </div><hr>
						</div>
						
						
						<?php
							if(isset($newlemari)){
						?>

						<div class="small-12 columns">
						  <a href="<?php echo base_url();?>admin/dashboard/newwardrobe" class="button postfix">Tambah Data Lemari Baru</a>
						</div>

						<?php
							}elseif(isset($newodner)){
						?>

						<div class="small-12 columns">
						  <a href="<?php echo base_url();?>admin/dashboard/newodner" class="button postfix">Tambah Data Odner Baru</a>
						</div>

						<?php
							}elseif(isset($newuser)){	
						?>

						<div class="small-12 columns">
						  <a href="<?php echo base_url();?>admin/dashboard/newuser" class="button postfix">Tambah Data User Baru</a>
						</div>

						<?php
							}elseif(isset($newarsip)){	
						?>
						<div class="small-12 columns">
						  <a href="<?php echo base_url();?>user/proses/rekamdata" class="button postfix">Tambah Data Arsip Baru</a>
						</div>

						<?php
							}elseif(isset($newarsiploc)){	
						?>
						<div class="small-12 columns">
						  <a href="<?php echo base_url();?>user/proses/cariarsip" class="button postfix">Cari Arsip Lain</a>
						</div>

						<?php
							}elseif(isset($updatelemari)){
								echo "<div class='small-12 columns'>";
								  echo "<a href='".base_url()."admin/dashboard/wardrobe' class='button postfix'>Daftar Data Lemari</a>";
								echo "</div>";
							}
						?>

<!-- 						</form> -->
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
