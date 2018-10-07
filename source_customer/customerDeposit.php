<?php
    include("../source_include/header.php");
	
    $title = "My Bank | Customer";
    $output = str_replace('%Title%', $title, $output);

	include("customerHeaderFund.php");

	//Backend
	$user = unserialize($_SESSION['user']);
	$isSuccess=NULL;
	
	if(isset($_POST['deposit']) ){
	$isSuccess = $model->deposit ($_POST['deposit']);
	}

	
	//Problem: when user resubmit is not working.
	//if(isset($_POST['deposit']) ){
		//if is new  - To prevent user reload and call deposit function
		//if(!isset($_SESSION['reload'])){
			//$_SESSION['reload'] =true; 
			//$isSuccess = $model->deposit ($_POST['deposit']);
		//}
	//}
	//else{
	//	if(isset($_SESSION['reload'])){
		//	 unset($_SESSION['reload']); 
	//	}
	//}
	
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
								
								<!--begin:: Alertbox-->
										<?php 
									  if(isset($_POST['deposit']) && $isSuccess ){	

											?>
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
													You have successfully deposit. 
											</div>

											<?php
											}
										else if(isset($_POST['deposit']) && !$isSuccess){ ?>
											<?php
											echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>";
											echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'></button>";
											echo "Sorry. Something went wrong"; 
											echo "</div>";

											}
									  ?>
								<!--end:: end alertbox-->
									<!--begin::Form-->
									<form class="m-form" class="" action="" method="post">
										<div class="m-portlet__body">
											<div class="m-form__section m-form__section--first">
												<div class="form-group m-form__group">
													<label for="example_input_full_name">
														Account No. : <?php echo $user->account?>
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
														<input type="number" class="form-control m-input" placeholder="99.9" min=0 name="deposit" step=".01">
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

<?php include("../source_include/footer.php"); ?>