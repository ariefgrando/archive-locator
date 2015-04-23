<!doctype html>
<!--[if IE 9]>
<html class="lt-ie10" lang="en" >
    <![endif]-->
    <html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Archive Locator V.1</title>
            <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
            <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
            <meta name="copyright" content="ZURB, inc. Copyright (c) 2015"/>
            <link rel="stylesheet" href="<?php echo base_url();?>public/css/foundation.css"/>
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/icono.min.css"/>
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/foundation-datepicker.css"/>
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/pagination.css"/>
            <script src="<?php echo base_url();?>public/js/vendor/modernizr.js"></script>
        </head>
        <body>
            <div class="row">
                <div class="large-12 columns">
                    <div class="row">
                        <div class="large-12 columns">
                            <nav class="top-bar" data-topbar>
                                <ul class="title-area">
                                    <li class="name">
                                        <h1>
                                            <a href="<?php echo base_url();?>user/entrance"><i class="icono-codepen"></i>&nbsp;&nbsp;Archive Locator</a>
                                        </h1>
                                    </li>
                                    <li class="toggle-topbar menu-icon">
                                        <a href="#">
                                            <span>menu</span>
                                        </a>
                                    </li>
                                </ul>
                                <section class="top-bar-section">
                                    <ul class="right">
											<li class="divider"></li>
											<li class='has-dropdown'>
												<a href="<?php echo base_url();?>user/proses/rekamdata">Pengaturan Arsip</a>
													<ul class="dropdown">
														<li class="">
															<a class="" href="<?php echo base_url();?>user/U_Dashboard/archives"><i class="icono-file" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Data Arsip</a>
														</li>
														<li class="">
															<a class="" href="#"><i class="icono-search" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Cari Arsip</a>
														</li>
													</ul>
											</li>
											<li class="divider"></li>
											<li>
												<a href="<?php echo base_url();?>user/proses/rekamdata">Rekam Data</a>
											</li>
									</ul>
                                </section>
                            </nav>
                        </div>
                    </div>
						

	      <?php echo $body; ?>

		<footer class="row">
			<div class="large-12 columns">
				<hr>
					<div class="row">
						<div class="large-6 columns">
							<p>©  PT PLN (Persero) Wilayah Sumatera Utara</p>
						</div>
						<div class="large-6 columns">
							<!--ul class="inline-list right">
								<li>
									<a href="#">Link 1</a>
								</li>
								<li>
									<a href="#">Link 2</a>
								</li>
								<li>
									<a href="#">Link 3</a>
								</li>
								<li>
									<a href="#">Link 4</a>
								</li>
							</ul-->
						</div>
					</div>
						</div>
					</footer>
				</div>
			</div>
					<script src="<?php echo base_url();?>public/js/vendor/jquery.js"></script>
					<script src="<?php echo base_url();?>public/js/foundation.min.js"></script>
					<script>
						$(document).foundation();
					</script>
					<script src="<?php echo base_url();?>public/js/vendor/jquery.js"></script>
					<script src="<?php echo base_url();?>public/js/foundation/foundation.js"></script>
					<script src="<?php echo base_url();?>public/js/foundation-datepicker.js"></script>

					<script>
					  $(document).foundation();

					  var doc = document.documentElement;
					  doc.setAttribute('data-useragent', navigator.userAgent);
					</script>
					<script src="<?php echo base_url();?>public/js/script.js"></script>
		</body>
</html>