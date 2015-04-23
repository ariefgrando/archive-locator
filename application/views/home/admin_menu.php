<div class="row">

	<div class="large-4 small-12 columns">
		<div class="panel">
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
				<div class="large-12 columns" style="display:none; vertical-align:top;"  id="popup2">
					Test
				</div>
				<div class="panel">
					<div class="row">
						<!--div class="large-2 small-6 columns">
							
						</div-->
						<div class="large-12 columns">
							<strong><i class='icono-search' style='color:#296AD4;'></i>&nbsp;&nbsp;Pencarian Arsip</strong><hr>
						</div>

						
						<div class="large-12 columns">
						  <label>Filter Pencarian
							<select id='carifil' name='carifil'>
							<option value='00' selected>- Pilih Filter -</option>
								<option value='numsurat' >Nomor Surat</option>
								<option value='halsurat' >Perihal Surat</option>
								<option value='datesurat' >Tanggal Surat</option>
								<option value='kdodner' >Odner</option>
								<option value='keterangans' >Keterangan Surat</option>
							</select>
						  </label>
						</div>

						<form id='pencarian'>
						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Nomor Surat</label><?php echo form_error('numsurat'); ?>
							<div class="small-12 columns">
							  <input type="text" placeholder=""  name='no_surat' id='numsurat'/>
							</div>
						  </div>
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Perihal Surat</label><?php echo form_error('halsurat'); ?>
							<div class="small-12 columns">
							  <input type="text" placeholder=""  name='perihal_surat' id='halsurat'/>
							</div>
						  </div>
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Tanggal Surat</label><?php echo form_error('datesurat'); ?>
							<div class="small-12 columns">
							  <input type="text" placeholder="" name='tgl_surat' id='datesurat'/>
							</div>
						  </div>
						</div>

						<div class="large-12 columns">
						  <label>Nomor / Kode Odner <?php echo form_error('kdodner'); ?>
							<select id='kdodner' name='odner'>
										<option value='' selected>Silakan Pilih Nomor / Kode Odner</option>
								<?php
									foreach($odner as $valodner){
										echo "<option value='".$valodner->id."'>".$valodner->no_odner;
									}
								?>
								
							</select>
						  </label>
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Keterangan Surat</label><?php echo form_error('keterangans'); ?>
							<div class="small-12 columns">
							  <input type="text" placeholder=""  name='keterangan' id='keterangans'/>
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
						  <a href="#popup2" data-role="find" class="button postfix open-popup" id='findarsip'>Cari</a>
						</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div class="panel">
					<div class="row">
						<!--div class="large-2 small-6 columns">
							
						</div-->
						<div class="large-12 columns">
							<strong><i class='icono-textAlignCenter' style='color:#296AD4;'></i>&nbsp;&nbsp;Archive Locator Log</strong><hr>
						</div>

						<div class="large-12 columns">
							<?php
								foreach($log as $value){
									echo $value->tanggal.", ".$value->proses." processed by ".$value->user."<br/>";
								}
							?>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>

</div>
