<?php
    include("../source_include/header.php");
	
    $title = "My Bank | Customer";
    $output = str_replace('%Title%', $title, $output);
    echo $output;

	include("customerHeader.php");
	
	//backend
	$user = unserialize($_SESSION['user']);
	$totalBalance = $model->getCustomerDetails($user->userID);
	
	
	
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
									Dashboard
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

											<?
											}
										else{ ?>
											<?php
											//echo "is not success" . $isSuccess; 
											//echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>";
											//echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'></button>";
											//echo "Sorry. Something went wrong"; 
											//echo "</div>";

											}
									  ?>
								<!--end:: end alertbox-->
							   
							   <!--begin::Section-->
								<div class="m-section">
									<div class="m-section__content">
										<table class="table table-striped m-table">
											<thead>
												<tr>
											
													<th>
														Account
													</th>
													<th>
														Balance
													</th>
											
												</tr>
											</thead>
											<tbody>
												<tr>
												
													<td>
														<?php echo $user->account; ?>
													</td>
													<td>
														<?php echo $user->balance; ?>
													</td>
								
												</tr>
							
											</tbody>
										</table>
									</div>
								</div>
								<!--end::Section-->
							   
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