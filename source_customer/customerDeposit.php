<?php
    include("../source_include/header.php");
	
    $title = "My Bank | Customer";
    $output = str_replace('%Title%', $title, $output);
    echo $output;

	include("customerHeader.php");
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
									Deposit
								</h3>
							</div>
						</div>
					</div>
					<!-- end: Subheader -->
					<div class="m-content">
						<!--begin::Section-->
						<div class="row">
							<div class="col-lg-12">
						
						<!--begin::Portlet-->
								<div class="m-portlet">
									<!--begin::Form-->
									<form class="m-form">
										<div class="m-portlet__body">
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label for="example_input_full_name">
														Account No. : 198 - 34567 - 2
													</label>
												</div>
											
												<div class="form-group m-form__group">
													<label>
														Deposit Amount:
													</label>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon2">
																$
															</span>
														</div>
														<input type="text" class="form-control m-input" placeholder="99.9">
													</div>
												</div>
												
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions">
												<button type="reset" class="btn btn-primary">
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

<?php include("../source_include/footer.php"); ?>