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
							<strong><i class="icono-paperClip" style='color:#296AD4;'></i>&nbsp;&nbsp;Arsip Baru</strong><hr>
						</div>

						<?php echo form_open('user/proses/submitnewarsip'); ?>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Nomor Surat</label><?php echo form_error('nosurat'); ?>
							<div class="small-12 columns">
							  <input type="text" placeholder=""  name='nosurat' id='nosurat' />
							</div>
						  </div>
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Tanggal Surat</label><?php echo form_error('tanggalsurat'); ?>
							<div class="small-12 columns">
							  <input type="text" placeholder="" name='tanggalsurat' id='tanggalsurat'/>
							</div>
						  </div>
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Perihal Surat</label><?php echo form_error('perihalsurat'); ?>
							<div class="small-12 columns">
							  <input type="text" placeholder=""  name='perihalsurat' id='perihalsurat'/>
							</div>
						  </div>
						</div>

						<div class="large-12 columns">
						  <label>Nomor / Kode Lemari<?php echo form_error('lemari'); ?>
							<select id='lemari' name='lemari'>
								<option value='' selected>Silakan Pilih Nomor / Kode Lemari</option>
								<?php
									foreach($lemari as $value){
										echo "<option value='".$value->id."'>".$value->no_lemari."</option>";
									}
								?>
							</select>
						  </label>
						</div>

						
						<div class="large-12 columns">
						  <label>Nomor / Kode Odner (Silakan Pilih Nomor / Kode Lemari dahulu !)<?php echo form_error('odner'); ?>
							<select id='odner' name='odner'>
								<option value='' selected>Silakan Pilih Nomor / Kode Odner</option>
							</select>
						  </label>
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Keterangan</label><?php echo form_error('ketsurat'); ?>
							<div class="small-12 columns">
							  <textarea placeholder=""  id='ketsurat' name='ketsurat'></textarea>
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
						  <a href="" data-role="simpan" class="button postfix">Simpan</a>
						</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
