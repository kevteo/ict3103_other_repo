<?php
include('../model/Model.php');
$model = Model::getInstance();
if (isset($_POST['reactivate'])) {
	if ($model->requestToggleActive()) {
		echo "<script>alert('Request for reactivation sent!')</script>";
	} else {
		echo "<script>alert('Account already active!')</script>";
	}
	echo "<script>window.location.replace('login.php');</script>";
}

?>
<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
	<meta charset="utf-8" />

	<!-- begin::Title -->
	<title>
			My Bank
		</title>
	
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

<!-- end::Body -->
	<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	
	<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid  m-error-6" style="background-image: url(../img/bg/bg.png);">
				<div class="m-error_container">
					<div class="m-error_subtitle m--font-dark">
						<h1>
							Sorry...
						</h1>
					</div>
					<br>
					<br>
					<p class="m--font-light" style="background: rgba(0, 0, 0, 0.5);">
						Your account has been deactivated due to inactivity.
						<br>
						Would you like to send a request to reactivate your account? 
					</p>
					<form action="" method="post" id='reactivateForm'>
						<button onclick="javascript:$('#reactivateForm').submit()" type="reset" class="btn btn-outline-success m-btn m-btn--outline-2x " id='reactivate'>
															Reactivate
						<input type='hidden' name="reactivate">
					</form>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		
    	<!--begin::Base Scripts -->
		<script src="../vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="../base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
	</body>
	<!-- end::Body -->
</html>