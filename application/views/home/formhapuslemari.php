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
							<strong><i class="icono-exclamation" style='color:#296AD4;'></i>&nbsp;&nbsp;Apakah anda yakin ingin menghapus data lemari di bawah ini ?</strong><hr>
						</div>

						<?php 
			
							

							echo form_open('admin/dashboard/submitdeletelemari'); 
						?>


						<div class="large-12 columns">
						<div class="row collapse">
						  <label>Nomor / Kode Lemari</label>
							<div class="small-12 columns">
								<input type="hidden" value="<?php echo $data[0]->id;?>"  name='idlemari' id='idlemari' />
								<input type="text" value="<?php echo $data[0]->no_lemari;?>"  name='nolemari' id='nolemari' />
							</div>
						</div>
						</div>


						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Keterangan</label>
							<div class="small-12 columns">
							  <textarea placeholder=""  id='ketlemari' name='ketlemari' ><?php echo $data[0]->keterangan;?></textarea>
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
						  <a href="" data-role="deletelemari" class="button postfix alert">Ya, hapus data lemari dan data odner yang ada di dalam data lemari ini !</a>
						</div>
						<div class="small-12 columns">
						  <a href="" data-role="cancellemari" class="button postfix">Batal</a>
						</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
