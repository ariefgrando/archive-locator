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
							<strong><i class="icono-list" style='color:#296AD4;'></i>&nbsp;&nbsp;Data Lemari</strong><hr>
						</div>

						<?php

							// Show data
							foreach ($query as $value) {

								echo "<div class='large-12 columns'>";
								  echo "<div class='row collapse'>";
									echo "<label>ID</label>";
									echo "<div class='small-12 columns'>";
									  echo "<input type='text' placeholder='' name='tgl_surat' value='".$value->id."'/>";
									echo "</div>";
								  echo "</div>";
								echo "</div>";

								echo "<div class='large-12 columns'>";
								  echo "<div class='row collapse'>";
									echo "<label>No. Lemari</label>";
									echo "<div class='small-12 columns'>";
									  echo "<input type='text' placeholder='' name='tgl_surat' value='".$value->no_lemari."'/>";
									echo "</div>";
								  echo "</div>";
								echo "</div>";

								echo "<div class='large-12 columns'>";
								  echo "<div class='row collapse'>";
									echo "<label>Keterangan</label>";
									echo "<div class='small-12 columns'>";
									  echo "<input type='text' placeholder='' name='tgl_surat' value='".$value->keterangan."'/>";
									echo "</div>";
								  echo "</div>";
								echo "</div>";


									if($this->session->userdata("hak_akses")=="*"){

										echo "<div class='large-12 columns'>";
										  echo "<div class='row collapse'>";
											echo "<label>&nbsp;&nbsp;</label>";
											echo "<div class='small-12 columns'>";
											  echo "<a href='".base_url()."admin/dashboard/updatewardrobe/".$value->id."'><i class='icono-signOut' style='color:#296AD4;'></i>&nbsp;&nbsp;Update Data Lemari</a>&nbsp;&nbsp;&nbsp;<a href='".base_url()."admin/dashboard/deletewardrobe/".$value->id."'><i class='icono-cross' style='color:#296AD4;'></i>&nbsp;Hapus Data Lemari</a>";
											echo "</div>";
										  echo "</div>";
										echo "</div>";

									}

								echo "<div class='large-12 columns'>";
								  echo "<div class='row collapse'>";
									echo "<label>&nbsp;&nbsp;</label>";
									echo "<div class='small-12 columns'>";
									  echo "&nbsp;&nbsp;";
									echo "</div>";
								  echo "</div>";
								echo "</div>";

							}
						?>



						<div class="large-12 columns">
						  <div class="row collapse">
							<label></label>
							<div class="large-12 column">
								<ul class="tsc_pagination">
									<!-- Show pagination links -->
									<?php foreach ($links as $link) {
										echo "<li>". $link."</li>";
									} ?>
								</ul>
							</div>
						  </div>
						</div>
						
						<?php
								echo "<div class='large-12 columns'>";
								  echo "<div class='row collapse'>";
									echo "<label>&nbsp;&nbsp;</label>";
									echo "<div class='small-12 columns'>";
									  echo "&nbsp;&nbsp;";
									echo "</div>";
								  echo "</div>";
								echo "</div>";
						?>

						<div class="small-12 columns">
						  <a href="<?php echo base_url();?>admin/dashboard/newwardrobe" class="button postfix">Tambah Data Lemari Baru</a>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>

</div>
