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
					
					<!-- end: Subheader -->
					<div class="m-content">
						<!--begin::Section-->
						<div class="row">
						 <div class="col-xl-12">
						
					
					<!--begin: Datatable -->
                            <div class="admin_create_table" id="admin_create_table"></div>
                            <!--end: Datatable -->
						
						
						</div>
						
						<!--end::Section-->
					</div>
						
						</div>
				</div>
			</div>
			<!-- end::Body -->
			
			<script>

	

        function createUser(user, nric) {
			console.log(user);
			console.log(nric);
			var url = 'adminCreateAccount.php?user=' + user + '&nric=' + nric;
			$(location).attr('href', url);
        }
		</script>

<?php include("../source_include/footer.php"); ?>