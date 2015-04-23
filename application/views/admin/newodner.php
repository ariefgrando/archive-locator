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
							<strong><i class="icono-book" style='color:#296AD4;'></i>&nbsp;&nbsp;Odner Baru</strong><hr>
						</div>

						<?php echo form_open('admin/dashboard/submitnewodner'); ?>

						<div class="large-12 columns">
						  <label>Nomor / Kode Lemari
							<select id='kdlemari' name='kdlemari'>
								<option value='00' selected>Silakan Pilih Nomor / Kode Lemari</option>
								<?php
									foreach($lemari as $value){
										echo "<option value='".$value->id."'>".$value->no_lemari."</option>";
									}
								?>
							</select>
						  </label>
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Nomor / Kode Odner</label><?php echo form_error('kodeodner'); ?>
							<div class="small-12 columns">
							  <input type="text" placeholder="" name="kodeodner" />
							</div>
						  </div>
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Keterangan</label><?php echo form_error('keterangan'); ?>
							<div class="small-12 columns">
							  <textarea name="keterangan" placeholder="Keterangan lemari dapat berisi, penjelasan perihal ciri-ciri fisik odner, misalnya yang berkaitan dengan merk, warna, lokasi, dsb."></textarea>
							</div>
						  </div>
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label></label>
							<div class="small-12 columns">
							  &nbsp;
							</div>
						  </div><hr>
						</div>
						
						

						<div class="small-12 columns">
						  <a href="" data-role="newodner" class="button postfix">Simpan Data Odner Baru</a>
						</div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>
