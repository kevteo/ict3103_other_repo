<!DOCTYPE html>
<?php include 'commons/global.php' ?>
<html lang="en" >
<!-- begin::Head -->
<head>
	<meta charset="utf-8" />

	<!-- begin::Title -->
	<?php
	$output = '<html><title>%Title%</title><body>';
	?>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Web font -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
	WebFont.load({
		google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700","Asap+Condensed:500"]},
		active: function() {
			sessionStorage.fonts = true;
		}
	});
	</script>
	
	<!--begin::Stylesheets -->
	<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/demo/demo8/base/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/demo/demo8/base/custom.css" rel="stylesheet" type="text/css" />
	
	<!--begin::Javascripts -->
	<link href="external/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<script src="external/datatables/jquery.dataTables.js"></script>
	<script src="external/datatables/dataTables.bootstrap4.js"></script>

</head>
<!-- end::Head -->

<!-- begin::Body -->
<body  style="background-image: url(assets/app/media/img/bg/bg-8.png)"  class="m-page--fluid m-page--loading-enabled m-page--loading m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
		<!-- begin::Page loader -->
		<div class="m-page-loader m-page-loader--base">
			<div class="m-blockui">
				<span>
					Please wait...
				</span>
				<span>
					<div class="m-loader m-loader--brand"></div>
				</span>
			</div>
		</div>
		
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- end::Page Loader -->
