<?php
//* Git Commit 1 : Login Backend
require_once('../model/Model.php');
$model = Model::getInstance();


if (isset($_POST['name'])){
	echo isset($_POST['name']);
	echo "Finally";
}

if
(
isset($_POST['name']) && isset($_POST['nric']) &&
isset($_POST['mobileNumber']) && isset($_POST['email']) &&
isset($_POST['address1']) && isset($_POST['address2']) &&
isset($_POST['postalcode'] ) && isset($_POST['address'] )
) 
{
	$name = $_POST['name'];
	$nric = $_POST['nric'];
	$mobile =  $_POST['mobileNumber'];
	$email = $_POST['email'];
	$account = $_POST['account'];
	$address= $_POST['address1'].",".$_POST['address2'].",".$_POST['postalcode'];
	$registerUser = new User("customer", $name, $nric,$mobile,$email,$address,$account);
	
	echo "success";
	//$isSuccess = $modal->register($registerUser);
	
}
else{
	echo "something went wrong";
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
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
				
							<div class="m-portlet__head" style="background-image: url(../img/bg/bg-registration.jpg);">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<div>
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<div>
												<br>
							<a href="login.php">
								<img src="../img/logo/logo.png">
							</a>
						</div>
						<br>
						</div>
								</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="Get help with filling up this form">
												<i class="flaticon-info m--icon-font-size-lg3"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
					<!-- end: Subheader -->
					<div class="m-content">
						<!--begin::Section-->
						<div class="row">
							<div class="col-lg-12">
						
						<!--begin::Portlet-->
								<div class="m-portlet">
								
								<!--begin:: Alertbox-->
										<?php 
									  if(isset($_POST['account']) && $isSuccess ){	

											?>
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
													You have successfully register. 
											</div>

											<?
										}
										else if (!$isSuccess){ ?>
											<?php
											//echo "is not success" . $isSuccess; 
											//echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>";
											//echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'></button>";
											//echo "Your balance is not enough"; 
											//echo "</div>";

											}
									  ?>
								<!--end:: end alertbox-->
									<!--begin::Form-->
									<form class="m-form" class="" action="" method="post">
										<div class="m-portlet__body">
										<hr>
										<h3>Personal Information</h3>
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label>
														Name:
													</label>
													<div class="input-group">
														<input type="text" class="form-control m-input" name="name">
													</div>
												</div>
											</div>
											
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label>
														Nric:
													</label>
													<div class="input-group">
														<input type="text" class="form-control m-input" name="nric">
													</div>
											</div>
											</div>
											
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label>
														Email:
													</label>
													<div class="input-group">
														<input type="email" class="form-control m-input" name="email">
													</div>
											</div>
											</div>
											
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label>
														Phone:
													</label>
													<div class="input-group">
														<input type="number" class="form-control m-input" name="mobilenumber">
													</div>
											</div>
											</div>
											<hr>
											<h3>Mailing Address</h3>
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label>
														Address Line1:
													</label>
													<div class="input-group">
														<input type="number" class="form-control m-input" name="address1">
													</div>
												</div>
											</div>
											
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label>
														Address Line2:
													</label>
													<div class="input-group">
														<input type="number" class="form-control m-input" name="address2">
													</div>
												</div>
											</div>
											
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label>
														Postal Code:
													</label>
													<div class="input-group">
														<input type="number" class="form-control m-input" name="postalcode">
													</div>
												</div>
											</div>
											
											<hr>
											<h3>Account</h3>
												<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label>
														Account Number:
													</label>
													<div class="input-group">
														<input type="number" class="form-control m-input" name="account">
													</div>
												</div>
											</div>
											
											
											
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions">
												<button type="submit" class="btn btn-primary">
													Confirm
												</button>
												<button type="reset" class="btn btn-danger">
													Cancel
												</button>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Portlet-->
						</div>
						</div>
						
						<!--end::Section-->
					</div>
				</div>
			</div>
			<!-- end::Body -->
			</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="../vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="../base/scripts.bundle.js" type="text/javascript"></script>
		<script src="../js/forms/wizard/wizard.js" type="text/javascript"></script>
		<script src="../js/forms/validation/form-controls.js" type="text/javascript"></script>
		<script src="../js/forms/validation/form-widgets.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
	</body>
	<!-- end::Body -->
</html>