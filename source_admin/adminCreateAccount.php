<?php
    include("../source_include/header.php");
	
    $title = "My Bank | Admin";
    $output = str_replace('%Title%', $title, $output);
    echo $output;

	include("adminHeader.php");
	?>
	<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- begin: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Account Creation Application
								</h3>
							</div>
						</div>
					</div>
					<br>
						<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Application ID: 12
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<label class="col-lg-2 col-form-label">
													Full Name:
												</label>
												<div class="col-lg-4">
													<input type="text" class="form-control m-input" placeholder="Jack Wills" disabled>
													<span class="m-form__help">
													</span>
												</div>
												<label class="col-lg-2 col-form-label">
													Contact Number:
												</label>
												<div class="col-lg-4">
													<input type="number" class="form-control m-input" placeholder="82222222" disabled>
													<span class="m-form__help">
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-lg-2 col-form-label">
													NRIC:
												</label>
												<div class="col-lg-4">
													<input type="text" class="form-control m-input" placeholder="S9645345E" disabled>
													<span class="m-form__help">
													</span>
												</div>
												<label class="col-lg-2 col-form-label">
													Email:
												</label>
												<div class="col-lg-4">
													<input type="email" class="form-control m-input" placeholder="customer@gmail.com" disabled>
													<span class="m-form__help">
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-lg-2 col-form-label">
													Address:
												</label>
												<div class="col-lg-4">
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input" placeholder="Ang Mo Kio Avenue 4" disabled>
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-map-marker"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
													</span>
												</div>
												<label class="col-lg-2 col-form-label">
													Postcode:
												</label>
												<div class="col-lg-4">
													<div class="m-input-icon m-input-icon--right">
														<input type="text" class="form-control m-input" placeholder="123456" disabled>
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-bookmark-o"></i>
															</span>
														</span>
													</div>
													<span class="m-form__help">
													</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-lg-2 col-form-label">
													Account Type:
												</label>
												<div class="col-lg-4">
													<div class="m-radio-inline">
														<label class="m-radio m-radio--solid">
															<input type="radio" name="" checked value="1" disabled>
															Savings
															<span></span>
														</label>
														<label class="m-radio m-radio--solid">
															<input type="radio" name="" value="2" disabled>
															Investment
															<span></span>
														</label>
													</div>
													<span class="m-form__help">
													</span>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-4"></div>
													<div class="col-lg-4">
														<button type="" class="btn btn-primary">
															Create
														</button>
														<a href="../source_home/home.php" class="btn btn-danger">
															Close
														</a>
													</div>
													<div class="col-lg-4"></div>
												</div>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Portlet-->
				</div>
			</div>
			<!-- end::Body -->

<?php include("../source_include/footer.php"); ?>