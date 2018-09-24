<?php
require_once('../model/Model.php');
$model = Model::getInstance();

if (isset($_POST['username'])) {
	$user = $model->login($_POST['username'], $_POST['password']);
	
	var_dump($user);
	
	if ($user) {
		$user = unserialize($_SESSION['user']);
		echo $user->role;
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
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								<div class="m-login__logo">
									<a href="#">
										<img src="../img/logo/logo_inverse.png">
									</a>
								</div>
								
								<!--begin::Login Form -->
								
								<div class=""> 
									<form class="" action="" method="post">
										<div class="form-group m-form__group">
											<input class="form-control m-input" type="text" placeholder="Username" name="username" autocomplete="off">
										</div>
										<div class="form-group m-form__group">
											<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
										</div>
										<div class="row m-login__form-sub">
											<div class="col m--align-left">
												<label class="m-checkbox m-checkbox--focus">
													<input type="checkbox" name="remember">
													Remember me
													<span></span>
												</label>
											</div>
										</div>
										<br>
										<div class="m-login__form-action text-center">
									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
										Sign In
									</button>
								</div>
										
										
									</form>
								</div>
								
									<!--end::Login Form -->
							</div>
						</div>
						
						<div class="m-stack__item m-stack__item--center">
						
						
							<div class="m-login__account">
								<span class="m-login__account-msg">
									Don't have an account yet ?
								</span>
								&nbsp;&nbsp;
								<a href="../source_home/registration.php" id="m_login_signup" class="m-link m-link--focus m-login__account-link">
									Sign Up
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content" style="background-image: url(../img/bg/bg.jpg)">
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="../vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="../base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Login Javascript -->
		
		<!--end::Login Javascript -->
	</body>
	<!-- end::Body -->
</html>