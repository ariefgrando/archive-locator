<div class="row">

	<div class="large-4 small-12 columns">
		<div class="panel">
			<!-- Log in Form -->
				<?php echo form_open('user/auth/'); ?>
				<div class="row">
					<div class="large-12 columns">
					  <div class="row collapse prefix-radius">

						<div class="small-4 columns">
						  <span class="prefix">Username</span>
						</div>
						<div class="small-8 columns">
						  <input type="text" placeholder="" name='username'>
						</div>

						<div class="small-4 columns">
						  <span class="prefix">Password</span>
						</div>
						<div class="small-8 columns">
						  <input type="password" placeholder="" name='password'>
						</div>
						<?php
							if(isset($msg)){
								echo "<div class='small-12 columns' style='text-align:center;'>";
								  echo $msg;
								echo "</div>";

							}
						?>

						<div class="small-12 columns">
						  <a href="#" data-role="submit" class="button postfix">Log in</a>
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
			<!--div class="large-4 small-6 columns">
				<img src="http://placehold.it/500x500&amp;text=Thumbnail">
				<div class="panel">
					<h5>Item Name</h5>
					<h6 class="subheader">$000.00</h6>
				</div>
			</div-->
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
