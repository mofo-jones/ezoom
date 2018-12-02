<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en" class="no-focus">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

	<meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
	<meta name="author" content="pixelcave">
	<meta name="robots" content="noindex, nofollow">

	<meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
	<meta property="og:site_name" content="Codebase">
	<meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<link rel="shortcut icon" href="<?=base_url()?>assets/img/favicons/favicon.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?=base_url()?>assets/img/favicons/favicon-192x192.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/img/favicons/apple-touch-icon-180x180.png">

	<!-- Stylesheets -->
	<!-- Page JS Plugins CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/js/plugins/datatables/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" id="css-main" href="<?=base_url()?>assets/css/codebase.min.css">
	<link rel="stylesheet" id="css-main" href="<?=base_url()?>assets/css/main.css">

</head>

<body>
	<div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed side-trans-enabled">
		<nav id="sidebar">
			<!-- Sidebar Scroll Container -->
			<div id="sidebar-scroll">
				<!-- Sidebar Content -->
				<div class="sidebar-content">
					<!-- Side Header -->
					<div class="content-header content-header-fullrow px-15">
						<!-- Mini Mode -->
						<div class="content-header-section sidebar-mini-visible-b">
							<!-- Logo -->
							<span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
								<span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
							</span>
							<!-- END Logo -->
						</div>
						<!-- END Mini Mode -->

						<!-- Normal Mode -->
						<div class="content-header-section text-center align-parent sidebar-mini-hidden">
							<!-- Close Sidebar, Visible only on mobile screens -->
							<!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
							<button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
								<i class="fa fa-times text-danger"></i>
							</button>
							<!-- END Close Sidebar -->

							<!-- Logo -->
							<div class="content-header-item">
								<a class="link-effect font-w700" href="index.html">
									<i class="si si-fire text-primary"></i>
									<span class="font-size-xl text-dual-primary-dark">Kode</span><span class="font-size-xl text-primary">Storm</span>
								</a>
							</div>
							<!-- END Logo -->
						</div>
						<!-- END Normal Mode -->
					</div>
					<!-- END Side Header -->

					<!-- Side User -->
					<div class="content-side content-side-full px-10 align-parent">
						<!-- Visible only in mini mode -->
						<div class="sidebar-mini-visible-b align-v animated fadeIn">
							<img class="img-avatar img-avatar32" src="/ks/public/admin/assets/img/avatars/avatar15.jpg" alt="">
						</div>
						<!-- END Visible only in mini mode -->

						<!-- Visible only in normal mode -->
						<div class="sidebar-mini-hidden-b text-center">
							<ul class="list-inline mt-10">
								<li class="list-inline-item">
									<a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#"><?=$this->session->user->name?></a>
								</li>
								<li class="list-inline-item">
									<a class="link-effect text-dual-primary-dark" href="<?=base_url()?>index.php/login/logout">
										<i class="si si-logout"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- END Visible only in normal mode -->
					</div>
					<!-- END Side User -->

					<!-- Side Navigation -->
					<div class="content-side content-side-full">
						<ul class="nav-main">
							<li class="open">
								<a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-cup"></i><span class="sidebar-mini-hide">Menu</span></a>
								<ul>
									<li>
										<a href="<?=base_url()?>index.php/categorias">Categorias</a>
									</li>
									<li>
										<a href="<?=base_url()?>index.php/produtos">Produtos</a>
									</li>
									
								</ul>
							</li>
					</div>
					<!-- END Side Navigation -->
				</div>
				<!-- Sidebar Content -->
			</div>
			<!-- END Sidebar Scroll Container -->
		</nav>
		<!-- END Sidebar -->

		<!-- Header -->
		<header id="page-header">
			<!-- Header Content -->
			<div class="content-header">
				<!-- Left Section -->
				<div class="content-header-section">

				</div>
				<!-- END Left Section -->
			</div>
			<!-- END Header Content -->

			<!-- Header Search -->
			<div id="page-header-search" class="overlay-header">
				<div class="content-header content-header-fullrow">
					<form action="be_pages_generic_search.html" method="post">
						<div class="input-group">
							<span class="input-group-btn">
								<!-- Close Search Section -->
								<!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
								<button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
									<i class="fa fa-times"></i>
								</button>
								<!-- END Close Search Section -->
							</span>
							<input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-secondary">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<!-- END Header Search -->

			<!-- Header Loader -->
			<!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
			<div id="page-header-loader" class="overlay-header bg-primary">
				<div class="content-header content-header-fullrow text-center">
					<div class="content-header-item">
						<i class="fa fa-sun-o fa-spin text-white"></i>
					</div>
				</div>
			</div>
			<!-- END Header Loader -->
		</header>
		<!-- END Header -->

		<main id="main-container">
			<!-- Page Content -->
			<div class="content">
