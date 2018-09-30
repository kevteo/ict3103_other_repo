<?php
    include("../source_include/header.php");
	
    $title = "My Bank | Manager";
    $output = str_replace('%Title%', $title, $output);
    echo $output;

	include("managerHeader.php");
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
									Accounts Pending Approval
								</h3>
							</div>
						</div>
					</div>
					
					<!-- end: Subheader -->
					<div class="m-content">
						<!--begin::Section-->
						<div class="row">
						 <div class="col-xl-12">
						
					
					<!--begin: Datatable -->
                            <div class="manager_approve_table" id="manager_approve_table"></div>
                            <!--end: Datatable -->
						
						
						</div>
						
						<!--end::Section-->
					</div>
						
						</div>
				</div>
			</div>
			<!-- end::Body -->
			
			<script>

	

        function approveUser(user, username, nric) {
			var url = 'managerApproveAccount.php?user=' + user + '&nric=' + nric + '&username=' + username;
			$(location).attr('href', url);
        }
		</script>

<?php include("../source_include/footer.php"); ?>