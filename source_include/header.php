<?php
require_once('../model/Model.php');
$model = Model::getInstance();
?>

<!DOCTYPE html>
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
	<link href="../vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../base/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../base/custom.css" rel="stylesheet" type="text/css" />
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body  style="background-image: url(../img/bg/pattern-bg.png)"  class="m-page--fluid m-page--loading-enabled m-page--loading m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
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
