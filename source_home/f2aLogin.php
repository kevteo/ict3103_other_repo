<?php
//* Git Commit 1 : Login Backend
require_once('../model/Model.php');
require_once('../validation/Validation.php');
$model = Model::getInstance();
$isF2AValid=-1;
if(isset($_POST['cancel'])){
	$url = "Location: login.php?logout=1";
	echo $url;
	header($url);
}
else if (isset($_POST['f2a'])){
	$user = unserialize($_SESSION['user']);
	$userID =  $user->userID;
	$f2a = $_POST['f2a'];

	$isF2AValid =$model->isF2AValid($userID,$f2a);

	if($isF2AValid){
		redirect($user);
	}
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
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(../img/bg/bg-registration.jpg);">
					<div class="m-content">
						<!--Begin::Main Portlet-->
						<div class="m-portlet m-portlet--full-height">
							<!--begin: Portlet Head-->
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
							<!--end: Portlet Head-->
    <!--begin: Form Wizard-->
							<div class="m-wizard m-wizard--2 m-wizard--success" id="m_wizard">
								<!--begin: Message container -->
								<div class="m-portlet__padding-x">
									<!-- Here you can put a message or alert -->
                                    <br><br><br>
                                   
								<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													2FA Login
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Notification-->
									<?php 
									if($isF2AValid==false){

									

									
									?>
									<div class="alert alert-danger alert-dismissible" style="margin:20px;">
										<a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
										Invalid PIN
									</div>

									<?php 
									}
									?>
									<!-- end::Notification-->
									<!--begin::Form-->
									<form class="m-form"  class="" action="" method="post">
										<div class="m-portlet__body">
											<div class="m-form__section m-form__section--first">
		
												<div class="form-group m-form__group">
													<label for="example_input_full_name">
														2FA:
													</label>
													<input type="number" class="form-control m-input" placeholder="6-Digit PIN" name="f2a">
													<span class="m-form__help">
														Input the 6-digit Secure PIN
													</span>
												</div>
												
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<button type="submit" class="btn btn-success">
													Submit
												</button>
												<button type="submit" class="btn btn-secondary" name="cancel">
													Cancel
												</button>
											</div>
										</div>
									</form>
									<!--end::Form-->
                                    <div style="margin-bottom: 15%;"></div>
							
							</div>
								</div>
								<!--end: Message container -->
        <!--begin: Form Wizard Head -->
								<div class="m-wizard__head m-portlet__padding-x">
									<!--begin: Form Wizard Progress -->



							</div>
							<!--end: Form Wizard-->
						</div>
						<!--End::Main Portlet-->
					</div>
					
					
					
					
				</div>
			</div>
		<!-- end:: Page -->

		
		
    	<!--begin::Base Scripts -->
		<script src="../vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="../base/scripts.bundle.js" type="text/javascript"></script>
		<script src="../js/forms/wizard/wizard.js" type="text/javascript"></script>
		<script src="../js/forms/widgets/select2.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
	</body>
	<!-- end::Body -->
</html>