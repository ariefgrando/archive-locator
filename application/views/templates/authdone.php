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

<style>



	/*
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {

		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr {
			display: block;
		}

		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr {
			position: absolute;
			/*top: -9999px;*/
			left: -9999px;
		}

		tr { border: 1px solid #ccc; }

		td {
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 50%;
		}

		td:before {
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%;
			padding-right: 10px;
			white-space: nowrap;
		}

		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "No. Surat"; }
		td:nth-of-type(2):before { content: "Tgl. Surat"; }
		td:nth-of-type(3):before { content: "Perihal"; }
		td:nth-of-type(4):before { content: "Lokasi Arsip"; }
		td:nth-of-type(5):before { content: "Ket. Lokasi"; }
		td:nth-of-type(6):before { content: "Ket. Arsip"; }
		/*td:nth-of-type(7):before { content: "Date of Birth"; }
		td:nth-of-type(8):before { content: "Dream Vacation City"; }
		td:nth-of-type(9):before { content: "GPA"; }
		td:nth-of-type(10):before { content: "Arbitrary Data"; }*/
	}

	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body {
			padding: 0;
			margin: 0;
			width: 320px; }
		}

	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body {
			width: 495px;
		}
	}

	</style>


            <link rel="stylesheet" href="<?php echo base_url();?>public/css/foundation.css"/>
			<link rel="stylesheet" href="<?php echo base_url();?>public/css/icono.min.css"/>
			<link rel="stylesheet" href="<?php echo base_url();?>public/font-awesome/css/font-awesome.css"/>
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
                                        <li class="has-dropdown">
                                            <a href="#">Admin Tools</a>
                                            <ul class="dropdown">
                                                <li>
                                                    <label>Pengaturan Sistem</label>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a class="" href="#"><i class="icono-sliders" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Pengaturan Lemari</a>
                                                    <ul class="dropdown">
                                                        <li>
                                                            <a href="<?php echo base_url();?>admin/dashboard/wardrobe"><i class="icono-list" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Data Lemari</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url();?>admin/dashboard/newwardrobe"><i class="icono-plus" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Tambah Data Lemari</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icono-cross" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Hapus Data Lemari</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a class="" href="#"><i class="icono-folder" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Pengaturan Odner</a>
                                                    <ul class="dropdown">
														<li>
                                                            <a href="<?php echo base_url();?>admin/dashboard/listodner"><i class="icono-book" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Data Odner</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo base_url();?>admin/dashboard/newodner"><i class="icono-plus" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Tambah Data Odner</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="icono-cross" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Hapus Data Odner</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    <label>Pengaturan User</label>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icono-user" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Data User</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>admin/dashboard/newuser"><i class="icono-plusCircle" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Tambah User</a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="icono-crossCircle" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Hapus User</a>
                                                </li>
												</li>
											</ul>
											</li>
											<li class="divider"></li>
											<li class='has-dropdown'>
												<a href="<?php echo base_url();?>user/proses/rekamdata">Pengaturan Arsip</a>
													<ul class="dropdown">
														<li class="">
															<a class="" href="<?php echo base_url();?>user/U_Dashboard/archives"><i class="icono-file" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Data Arsip</a>
														</li>
														<li class="">
															<a class="" href="<?php echo base_url();?>user/entrance"><i class="icono-search" style='color:#fff;'></i>&nbsp;&nbsp;&nbsp;Cari Arsip</a>
														</li>
													</ul>
											</li>
											<li class="divider"></li>
											<li>
												<a href="<?php echo base_url();?>user/proses/rekamdata">Rekam Data</a>
											</li>

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
					<script src="<?php echo base_url();?>public/js/jquery.fullscreen-popup.js"></script>
					<script src="<?php echo base_url();?>public/js/jquery-ui.min.js"></script>
					<script src="<?php echo base_url();?>public/js/jquery.blockUI.js"></script>
					<script src="<?php echo base_url();?>public/js/foundation.min.js"></script>
					<script>
						$(document).foundation();
					</script>
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