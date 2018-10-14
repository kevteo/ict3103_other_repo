<?php
    include("../source_include/header.php");
	
    $title = "My Bank | Admin";
    $output = str_replace('%Title%', $title, $output);
    echo $output;

	include("adminHeader.php");

	if (isset($_POST['backup'])) {
		$model->backupData();
	}

	if (isset($_POST['update'])) {
		$model->setInactiveCustomers();
	}

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
									All Accounts
								</h3>
							</div>
						</div>
					</div>
					<!-- end: Subheader -->
					<div class="m-content">
						<!--begin::Section-->
						<div class="row">
						<div class="col-xl-12">
															<form method="post" action="" style="display:inline" id="updateForm">
																<a href="javascript:$('#updateForm').submit()" class="btn btn-success m-btn m-btn--icon m-btn--pill">
																	<span>
																		<i class="fa fa-fw fa-refresh"></i>
																		<span>
																			Update
																		</span>
																	</span>
																</a>
																<input type="hidden" name="update">
															</form>

															<form method="post" action="" style="display:inline" id="backupForm">
																<a href="javascript:$('#backupForm').submit()" class="btn btn-success m-btn m-btn--icon m-btn--pill">
																	<span>
																		<i class="fa fa-fw fa-floppy-o"></i>
																		<span>
																			Back Up
																		</span>
																	</span>
																</a>
																<br><br>
																<input type="hidden" name="backup">
															</form>
					
					<!--begin: Datatable -->
                            <div class="admin_dashboard" id="admin_dashboard"></div>
                            <!--end: Datatable -->
						
						
						</div>
						
						
						
						
						</div>
						
						<!--end::Section-->
					</div>
				</div>
			</div>
			<!-- end::Body -->

<?php include("../source_include/footer.php"); ?>