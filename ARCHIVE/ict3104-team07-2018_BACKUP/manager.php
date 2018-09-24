<?php
    include("header.php");
	
    $title = "My Bank | Manager";
    $output = str_replace('%Title%', $title, $output);
    echo $output;

	include("managerHeader.php");
	?>
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- begin: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Manager
								</h3>
							</div>
						</div>
					</div>
					<!-- end: Subheader -->
					<div class="m-content">
						<!--begin::Section-->
						<div class="row">
        <div class="card-header" style="width:100%">
          <i class="fa fa-table" ></i> Customers 
		  <div style="float: right;margin-right:10px;">
		  <a class="btn btn-primary btn-sm" href="managerEditStatus.php" > <i class="fa fa-fw fa-edit"></i> Edit</a>
		  <a class="btn btn-primary btn-sm" href="backup.php" > <i class="fa fa-fw fa-print"></i> Print</a>
		  </div>
		  </div>

		
          <div class="table-responsive">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
				  <th>NRIC</th>
				  <th>Email</th>
                  <th>Status</th>
				  <th>Balance</th>
                </tr>
              </thead>
              <tbody>
			  
			  <?php 
			  if(isset($_GET["cancelJob"])){$i =1;}
			  else{$i=0;}
			  $start =0;
			  for ($x=$i;$x<=4;$x++) {
				  $start+=1;
				  ?>
			  
                <tr>
				<td><?php echo $customers[$x]['name']?></td>
				<td><?php echo $customers[$x]['nric']?></td>
			
				<td><?php echo $customers[$x]['email']?></td>
				<?php if($customers[$x]['status'] == "active"){ ?>
						<td title="low"><span class='badge badge-pill badge-success'>Active</span></td>

				<?php }
					else { ?>
						<td title="high"><span class='badge badge-pill badge-danger'>Inactive</span></td>
				<?php }?>
				<td><?php echo "$".$customers[$x]['balance']?></td>
                </tr>
			  <?php }?>
			  
			  
                
	
              </tbody>
            </table>
          </div>
       
        <div class="card-footer small text-muted"  style="width=100%">Updated today at 8:05 AM</div>

						</div>
						
						<!--end::Section-->
					</div>
				</div>
			</div>
			<!-- end::Body -->

<?php include("footer.php"); ?>