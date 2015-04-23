<div class="row">

	<div class="large-4 small-12 columns">
		<div class="panel">
			<!-- Log in Form -->
				<?php echo form_open('user/auth/'); ?>
				<div class="row">
					<div class="large-12 columns">
					  <div class="row collapse prefix-radius">

						<div class="small-12 columns" style='text-align:center;'>
						  <?php echo "<i class='icono-meh' style='color:#000;'></i><br/><b>".$this->session->userdata("nama")."</b>";?>
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
						<div class="large-12 columns">
							<strong><i class='icono-textAlignCenter' style='color:#296AD4;'></i>&nbsp;&nbsp;Daftar Arsip</strong><hr>
						</div>

						<div class="large-12 columns">
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
							echo "<label>No. Surat</label>";
							echo "<div class='small-12 columns'>";
							  echo "<input type='text' placeholder='' name='tgl_surat' value='".$value->no_surat."'/>";
							echo "</div>";
						  echo "</div>";
						echo "</div>";

						echo "<div class='large-12 columns'>";
						  echo "<div class='row collapse'>";
							echo "<label>Tgl. Surat</label>";
							echo "<div class='small-12 columns'>";
							  echo "<input type='text' placeholder='' name='tgl_surat' value='".$value->tgl_surat."'/>";
							echo "</div>";
						  echo "</div>";
						echo "</div>";

						echo "<div class='large-12 columns'>";
						  echo "<div class='row collapse'>";
							echo "<label>Perihal Surat</label>";
							echo "<div class='small-12 columns'>";
							  echo "<input type='text' placeholder='' name='tgl_surat' value='".$value->perihal_surat."'/>";
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
							echo "<label>No. Odner</label>";
							echo "<div class='small-12 columns'>";
							  echo "<input type='text' placeholder='' name='tgl_surat' value='".$value->no_odner."'/>";
							echo "</div>";
						  echo "</div>";
						echo "</div>";


						//echo "<div class='large-12 columns'>";
						//  echo "<div class='row collapse'>";
						//	echo "<label>&nbsp;&nbsp;</label>";
						//	echo "<div class='small-12 columns'>";
						//	  echo "&nbsp;&nbsp;";
						//	echo "</div>";
						//  echo "</div>";
						//echo "</div>";

								//echo "<div class='large-2 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo "ID";
								//echo "</div>";
								//echo "<div class='large-10 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo ":&nbsp;&nbsp;".$value->id;
								//echo "</div>";
								//echo "<div class='large-2 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo "No. Surat";
								//echo "</div>";
								//echo "<div class='large-10 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo ":&nbsp;&nbsp;".$value->no_surat;
								//echo "</div>";
								//echo "<div class='large-2 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo "Tgl. Surat";
								//echo "</div>";
								//echo "<div class='large-10 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo ":&nbsp;&nbsp;".$value->tgl_surat;
								//echo "</div>";
								//echo "<div class='large-2 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo "Perihal";
								//echo "</div>";
								//echo "<div class='large-10 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo ":&nbsp;&nbsp;".$value->perihal_surat;
								//echo "</div>";
								//echo "<div class='large-2 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo "No. Lemari";
								//echo "</div>";
								//echo "<div class='large-10 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo ":&nbsp;&nbsp;".$value->no_lemari;
								//echo "</div>";
								//echo "<div class='large-2 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo "No. Odner";
								//echo "</div>";
								//echo "<div class='large-10 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo ":&nbsp;&nbsp;".$value->no_odner;
								//echo "</div>";
								//echo "<div class='large-2 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo "&nbsp;&nbsp;";
								//echo "</div>";
								//echo "<div class='large-10 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo "&nbsp;";
								//echo "</div>";
								//echo "<div class='large-2 columns' style='font-family:tahoma; font-size:14px;'>";
								//echo "&nbsp;&nbsp;";
								//echo "</div>";

								if($this->session->userdata("hak_akses")=="*"){

									echo "<div class='large-12 columns'>";
									  echo "<div class='row collapse'>";
										echo "<label>&nbsp;&nbsp;</label>";
										echo "<div class='small-12 columns'>";
										  echo "<a href='".base_url()."user/u_dashboard/pindaharsip/".$value->id."'><i class='icono-signOut' style='color:#296AD4;'></i>&nbsp;&nbsp;Pindahkan Arsip</a>&nbsp;&nbsp;&nbsp;<a href='".base_url()."user/u_dashboard/hapusarsip/".$value->id."'><i class='icono-cross' style='color:#296AD4;'></i>&nbsp;Hapus Arsip</a>";
										echo "</div>";
									  echo "</div>";
									echo "</div>";


									//echo "<div class='small-10 columns' style='font-family:tahoma; font-size:14px;'>";
									//echo "<a href='".base_url()."user/u_dashboard/pindaharsip/".$value->id."'><i class='icono-signOut' style='color:#296AD4;'></i>&nbsp;&nbsp;Pindahkan Arsip</a>&nbsp;&nbsp;&nbsp;<a href='".base_url()."user/u_dashboard/hapusarsip/".$value->id."'><i class='icono-cross' style='color:#296AD4;'></i>&nbsp;Hapus Arsip</a>";
									//echo "</div>";

								}elseif($this->session->userdata("hak_akses")=="1"){

									echo "<div class='large-12 columns'>";
									  echo "<div class='row collapse'>";
										echo "<label>&nbsp;&nbsp;</label>";
										echo "<div class='small-12 columns'>";
										  echo "<a href='".base_url()."user/u_dashboard/pindaharsip'><i class='icono-signOut' style='color:#296AD4;'></i>&nbsp;&nbsp;Pindahkan Arsip</a>";
										echo "</div>";
									  echo "</div>";
									echo "</div>";


									//echo "<div class='small-10 columns' style='font-family:tahoma; font-size:14px;'>";
									//echo "<a href='".base_url()."user/u_dashboard/pindaharsip'><i class='icono-signOut' style='color:#296AD4;'></i>&nbsp;&nbsp;Pindahkan Arsip</a>";
									//echo "</div>";
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
						</div>

						<div class="large-12 columns">
						  <div class="row collapse">
							<label></label>
							<div class="small-12 columns">
							  &nbsp;
							</div>
						  </div>
						</div>

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
