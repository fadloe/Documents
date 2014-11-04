<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Google maps </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">		body {
				padding-top: 20px;
				padding-bottom: 40px;
				
			}
			/* Custom container */
			.container-narrow {
				margin: 0 auto;
				max-width: 700px;
			}
			.container-narrow > hr {
				margin: 30px 0;
			}
			/* Main marketing message and sign up button */
			.jumbotron {
				margin: 60px 0;
				text-align: center;
			}
			.jumbotron h1 {
				font-size: 72px;
				line-height: 1;
			}
			.jumbotron .btn {
				font-size: 21px;
				padding: 14px 24px;
			}
			/* Supporting marketing content */
			.marketing {
				margin: 60px 0;
			}
			.marketing p + h4 {
				margin-top: 28px;
			}</style>
<script src="http://maps.google.com/maps/api/js?sensor=false"
		type="text/javascript"></script>
	</head>
	<body>
		<div class="container-narrow">
			<div class="masthead">
				<ul class="nav nav-pills pull-right">
					<!-------------start menu ------- -->
					<li>
						<a href="index.php?mod=lokasi&pg=lokasi_form">Input Lokasi</a>
					</li>
					<li>
						<a href="index.php?mod=lokasi&pg=peta_view">Map View </a>
					</li>
					
					<!-------------end of menu ------- -->
				</ul>
				<h2 class="muted">Peta Kampus Jogja  </h2>
			</div>
			<hr>
				<div class="well">
								<?php
$pg = '';
/*
 * PHP Code untuk mendapatkan halaman view masing masing tabel
 */
include('inc/config.php');
if(!isset($_GET['pg'])) {
 include ('lokasi/lokasi_form.php');
	}else {
	$pg = $_GET['pg'];
	$mod = $_GET['mod'];
	include $mod . '/' . $pg . ".php";
}?>
			</div>
							</div>
							</body>
							</html>
