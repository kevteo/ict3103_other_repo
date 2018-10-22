<?php
	include("../source_include/header.php");
	
    $title = "My Bank | Manager";
    $output = str_replace('%Title%', $title, $output);
	echo $output;

	include("managerHeader.php");

	/*Validation*/


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
									User Requests To Update Status
								</h3>
							</div>
						</div>
					</div>
					<!-- end: Subheader -->
					<div class="m-content">
						<!--begin::Section-->
						<div class="row">
						<div class="col-xl-12">
					<!--begin::Notification-->
					<?php
						if (isset($_GET['success']) && isset($_GET['msg']) ) {
							$success = $_GET['success'];
							$msg= $_GET['msg'];
					
							if($success==1){
								?>

							<div class="alert alert-success alert-dismissible">
							<a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
							<?php echo $msg ;?>
							</div>
					<?php
							}
							else if($success==0){
								?>

							<div class="alert alert-danger alert-dismissible">
							<a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
							<?php echo $msg ;?>
							</div>
					<?php 
							}
						
						}
					
					?>
					<!--end::Notification-->
					<!--begin: Datatable -->
                            <div class="manager_userstatusrequest" id="manager_userstatusrequest"></div>
                            <!--end: Datatable -->
						
						
						</div>
						
						
						
						
						</div>
						
						<!--end::Section-->
					</div>
				</div>
			</div>
			<!-- end::Body -->

<?php include("../source_include/footer.php"); ?>