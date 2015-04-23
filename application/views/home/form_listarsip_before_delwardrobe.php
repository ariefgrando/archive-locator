<div class="row">

	<div class="large-4 small-12 columns">
		<div class="panel">
			<!-- Log in Form -->
				<?php echo form_open('user/auth/'); ?>
				<div class="row">
					<div class="large-12 columns">
					  <div class="row collapse prefix-radius">

						<div class="small-12 columns" style='text-align:center;'>
							<?php 
								if($this->session->userdata("hak_akses")=='1'){
									echo "<i class='icono-meh' style='color:#000;'></i><br/><b>".$this->session->userdata("nama")."</b>";
								}elseif($this->session->userdata("hak_akses")=='*'){
									echo "<i class='icono-smile' style='color:#000;'></i><br/><b>".$this->session->userdata("nama")."</b>";
								}
							?>
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
							<strong><i class="icono-paperClip" style='color:#296AD4;'></i>&nbsp;&nbsp;Arsip ditemukan pada data lemari yang akan dihapus. Silakan memindahkan data arsip berikut sebelum menghapus data lemari !</strong><hr>
						</div>


						<?php 
						
						$counter=0;

						//print_r(count($data));
						//$buffer = $data["archivefound"];

						//foreach($data as $value){
						for($i=0; $i<count($data); $i++){
												
							?>

							<div class="large-12 columns">
							  <div class="row collapse">
								<label>Nomor Surat</label><?php echo form_error('nosurat'); ?>
								<div class="small-12 columns">
								  <input type="text" value="<?php echo $data[$i]->no_surat;?>"  name='nosurat' id='nosurat' />
								</div>
							  </div>
							</div>


							<div class="large-12 columns">
							  <div class="row collapse">
								<label>Perihal Surat</label><?php echo form_error('perihal'); ?>
								<div class="small-12 columns">
								  <input type="text" value="<?php echo $data[$i]->perihal_surat;?>"  name='perihal' id='perihal' />
								</div>
							  </div>
							</div>


							<div class="large-12 columns">
							  <div class="row collapse">
								<label></label>
								<div class="small-12 columns">
								  &nbsp;
								</div>
							  </div>
							</div>
							
							<hr>

							<div class="small-12 columns">
							  <a href="<?php echo base_url()."user/u_dashboard/pindaharsip/".$data[$i]->id_arsip; ?>" class="button postfix">Pindahkan Arsip</a>
							</div>


						<?php
						$counter++;
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
