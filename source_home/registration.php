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
							<a href="#">
								<img src="../img/logo/logo_inverse.png">
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
								</div>
								<!--end: Message container -->
        <!--begin: Form Wizard Head -->
								<div class="m-wizard__head m-portlet__padding-x">
									<!--begin: Form Wizard Progress -->
									<div class="m-wizard__progress">
										<div class="progress">
											<div class="progress-bar" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<!--end: Form Wizard Progress -->  
            <!--begin: Form Wizard Nav -->
									<div class="m-wizard__nav">
										<div class="m-wizard__steps">
											<div class="m-wizard__step m-wizard__step--current"  m-wizard-target="m_wizard_form_step_1">
												<a href="#"  class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-placeholder"></i>
													</span>
												</a>
												<div class="m-wizard__step-info">
													<div class="m-wizard__step-title">
														1. Personal Information
													</div>
													<div class="m-wizard__step-desc">
														Please Tell Us More About You
													</div>
												</div>
											</div>
											<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_2">
												<a href="#" class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-layers"></i>
													</span>
												</a>
												<div class="m-wizard__step-info">
													<div class="m-wizard__step-title">
														2. Account Setup
													</div>
													<div class="m-wizard__step-desc">
														Please Fill In Account Information
													</div>
												</div>
											</div>
											<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_3">
												<a href="#" class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-layers"></i>
													</span>
												</a>
												<div class="m-wizard__step-info">
													<div class="m-wizard__step-title">
														3. Confirmation
													</div>
													<div class="m-wizard__step-desc">
														Please Check Information Entered
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end: Form Wizard Nav -->
								</div>
								<!--end: Form Wizard Head -->  
        <!--begin: Form Wizard Form-->
								<div class="m-wizard__form">
									<!--
                1) Use m-form--label-align-left class to alight the form input lables to the right
                2) Use m-form--state class to highlight input control borders on form validation
                -->
				
									<!-- FORM STARTS HERE, Pls work with same id -->
									
									<form class="m-form m-form--label-align-left- m-form--state-" id="m_form">
										<!--begin: Form Body -->
										<div class="m-portlet__body">
											<!--begin: Form Wizard Step 1-->
											<div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
												<div class="row">
													<div class="col-xl-8 offset-xl-2">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Client Details
																</h3>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	* Name:
																</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="name" class="form-control m-input" placeholder="" value="Nick Stone">
																	<span class="m-form__help">
																		Please enter your first and last names
																	</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	* NRIC:
																</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="name" class="form-control m-input" placeholder="" value="S9638937E">
																	<span class="m-form__help">
																		Please enter your Singapore NRIC
																	</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	* Email:
																</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="email" name="email" class="form-control m-input" placeholder="" value="nick.stone@gmail.com">
																	<span class="m-form__help">
																		We'll never share your email with anyone else
																	</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	* Phone
																</label>
																<div class="col-xl-9 col-lg-9">
																	<div class="input-group">
																		<div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-phone"></i>
																			</span>
																		</div>
																		<input type="text" name="" class="form-control m-input" placeholder="" value="81222222">
																	</div>
																	<span class="m-form__help">
																		Enter your 8 digit contact number
																	</span>
																</div>
															</div>
														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Mailing Address
																	<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i>
																</h3>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	* Address Line 1:
																</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="address1" class="form-control m-input" placeholder="" value="Ang Mo Kio Avenue 6"
																	<span class="m-form__help">
																		Street address
																	</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	Address line 2:
																</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="address1" class="form-control m-input" placeholder="" value="Block 123 #12-22"
																	<span class="m-form__help">
																		Block/ Unit Number
																	</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	* Postal Code:
																</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="address2" class="form-control m-input" placeholder="" value="540123">
																	<span class="m-form__help">
																		6 Digit Postal Code
																	</span>
																</div>
															
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end: Form Wizard Step 1-->
                    <!--begin: Form Wizard Step 2-->
											<div class="m-wizard__form-step" id="m_wizard_form_step_2">
												<div class="row">
													<div class="col-xl-8 offset-xl-2">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Account Details
																</h3>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">
																		* Username:
																	</label>
																	<input type="text" name="account_username" class="form-control m-input" placeholder="" value="nick.stone">
																	<span class="m-form__help">
																		Your username will be used for login
																	</span>
																</div>
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">
																		* Password:
																	</label>
																	<input type="password" name="account_password" class="form-control m-input" placeholder="" value="qwerty">
																	<span class="m-form__help">
																		Please use letters and at least one number and symbol
																	</span>
																</div>
															</div>
														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Account Settings
																</h3>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">
																		* Account Type:
																	</label>
																	<div class="m-radio-inline">
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" name="account_group" checked="" value="2">
																			Savings Account
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" name="account_group" value="2">
																			Investment Account
																			<span></span>
																		</label>
																	</div>
																	<span class="m-form__help">
																		Please select account type
																	</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end: Form Wizard Step 2--> 
                    <!--begin: Form Wizard Step 3-->
											<div class="m-wizard__form-step" id="m_wizard_form_step_3">
												<div class="row">
													<div class="col-xl-8 offset-xl-2">
														<!--begin::Section-->
														<div class="tab-content m--margin-top-40">
															<div class="tab-pane active" id="m_form_confirm_1" role="tabpanel">
																<div class="m-form__section m-form__section--first">
																	<div class="m-form__heading">
																		<h4 class="m-form__heading-title">
																			Client Details
																		</h4>
																	</div>
																	<div class="form-group m-form__group m-form__group--sm row">
																		<label class="col-xl-3 col-lg-3 col-form-label">
																			Name:
																		</label>
																		<div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				Nick Stone
																			</span>
																		</div>
																	</div>
																	<div class="form-group m-form__group m-form__group--sm row">
																		<label class="col-xl-3 col-lg-3 col-form-label">
																			Email:
																		</label>
																		<div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				nick.stone@gmail.com
																			</span>
																		</div>
																	</div>
																	<div class="form-group m-form__group m-form__group--sm row">
																		<label class="col-xl-3 col-lg-3 col-form-label">
																			Phone
																		</label>
																		<div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				81222222
																			</span>
																		</div>
																	</div>
																</div>
																<div class="m-separator m-separator--dashed m-separator--lg"></div>
																<div class="m-form__section">
																	<div class="m-form__heading">
																		<h4 class="m-form__heading-title">
																			Address
																			<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i>
																		</h4>
																	</div>
																	<div class="form-group m-form__group m-form__group--sm row">
																		<label class="col-xl-3 col-lg-3 col-form-label">
																			Address Line 1:
																		</label>
																		<div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				Line 1
																			</span>
																		</div>
																	</div>
																	<div class="form-group m-form__group m-form__group--sm row">
																		<label class="col-xl-3 col-lg-3 col-form-label">
																			Address Line 2:
																		</label>
																		<div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				Line 2
																			</span>
																		</div>
																	</div>
																	<div class="form-group m-form__group m-form__group--sm row">
																		<label class="col-xl-3 col-lg-3 col-form-label">
																			Postal Code:
																		</label>
																		<div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				540123
																			</span>
																		</div>
																	</div>
																	
															</div>
															<div class="tab-pane" id="m_form_confirm_2" role="tabpanel">
																<div class="m-form__section m-form__section--first">
																	<div class="m-form__heading">
																		<h4 class="m-form__heading-title">
																			Account Details
																		</h4>
																	</div>
																	<div class="form-group m-form__group m-form__group--sm row">
																		<label class="col-xl-3 col-lg-3 col-form-label">
																			Username:
																		</label>
																		<div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				everything is hardcoded
																			</span>
																		</div>
																	</div>
																	<div class="form-group m-form__group m-form__group--sm row">
																		<label class="col-xl-3 col-lg-3 col-form-label">
																			Password:
																		</label>
																		<div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				*********
																			</span>
																		</div>
																	</div>
																</div>
																<div class="m-separator m-separator--dashed m-separator--lg"></div>
																<div class="m-form__section">
																	<div class="m-form__heading">
																		<h4 class="m-form__heading-title">
																			Account Details
																		</h4>
																	</div>
																	<div class="form-group m-form__group m-form__group--sm row">
																		<label class="col-xl-3 col-lg-3 col-form-label">
																			Account Type:
																		</label>
																		<div class="col-xl-9 col-lg-9">
																			<span class="m-form__control-static">
																				Savings Account
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Section-->
                                <!--end::Section-->
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="form-group m-form__group m-form__group--sm row">
															<div class="col-xl-12">
																<div class="m-checkbox-inline">
																	<label class="m-checkbox m-checkbox--solid m-checkbox--brand">
																		<input type="checkbox" name="accept" value="1">
																		Click here to indicate that you have read and agree to the terms presented in the Terms and Conditions agreement
																		<span></span>
																	</label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end: Form Wizard Step 3-->
										</div>
										<!--end: Form Body -->
                <!--begin: Form Actions -->
										<div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
											<div class="m-form__actions">
												<div class="row">
													<div class="col-lg-2"></div>
													<div class="col-lg-4 m--align-left">
														<a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
															<span>
																<i class="la la-arrow-left"></i>
																&nbsp;&nbsp;
																<span>
																	Back
																</span>
															</span>
														</a>
													</div>
													<div class="col-lg-4 m--align-right">
														<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
															<span>
																<i class="la la-check"></i>
																&nbsp;&nbsp;
																<span>
																	Submit
																</span>
															</span>
														</a>
														<a href="#" class="btn btn-warning m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
															<span>
																<span>
																	Save & Continue
																</span>
																&nbsp;&nbsp;
																<i class="la la-arrow-right"></i>
															</span>
														</a>
													</div>
													<div class="col-lg-2"></div>
												</div>
											</div>
										</div>
										<!--end: Form Actions -->
									</form>
								</div>
								<!--end: Form Wizard Form-->
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
		<script src="../js/forms/validation/form-controls.js" type="text/javascript"></script>
		<script src="../js/forms/validation/form-widgets.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
	</body>
	<!-- end::Body -->
</html>