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
							<strong><i class="icono-user" style='color:#296AD4;'></i>&nbsp;&nbsp;User Baru</strong><hr>
						</div>

						<?php echo form_open('admin/dashboard/submitnewuser'); ?>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Username</label><?php echo form_error('username'); ?>
							<div class="small-12 columns">
							  <input type="text" placeholder="" name="username" />
							</div>
						  </div>
						</div>


						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Password</label>
							<div class="small-12 columns">
							  <input type="password" placeholder="" name="password" />
							</div>
						  </div>
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label>Nama</label><?php echo form_error('nama'); ?>
							<div class="small-12 columns">
							  <input type="text" placeholder="" name="nama" />
							</div>
						  </div>
						</div>

						<div class="large-12 columns">
						  <label>Hak Akses
							<select id='hakakses' name='hakakses'>
								<option value='00' selected>Silakan Pilih Hak Akses User</option>
								<option value='1' >User Biasa</option>
								<option value='99' >Administrator</option>
								<?php
									//foreach($lemari as $value){
									//	echo "<option value='".$value->id."'>".$value->no_lemari."</option>";
									//}
								?>
							</select>
						  </label>
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
						  <a href="" data-role="newuser" class="button postfix">Simpan Data User Baru</a>
						</div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>
