<?php
include("../source_include/header.php");

    $title = "My Bank | Admin";
    $output = str_replace('%Title%', $title, $output);

	include("adminHeader.php");
	
	if(isset($_POST['adminCreateManagerAccount'])){
            $fullName = $_POST['fullName'];
            $nric = $_POST['nric'];
            $email = $_POST['email'];
            $phoneNum = $_POST['phoneNum'];
            $address = $_POST['address'];
            $username = $_POST['username'];
            $password = $_POST['password'];
			
            $isSuccess = $model->createManagerAccount($fullName, $nric, $email, $phoneNum, $address, $username, $password);
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
                  <!--<h3 class="m-subheader__title ">
                     Manager Created
                  </h3>-->
               </div>
            </div>
         </div>
         <!-- end: Subheader -->
         <div class="m-content">
            <div class="row">
               <div class="col-xl-12 col-lg-12">
                 <div class="m-portlet m-portlet--full-height m-portlet--tabs   m-portlet--rounded">
                      <?php
             
		if (isset($_POST['adminCreateManagerAccount']) && $isSuccess){ 
              
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
                    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'></button>";
                    echo "Manager Created."; 
                    echo "</div>";
		}
                else {
                    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>";
                    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'></button>";
                    echo "Manager not created. Please ensure your username and nric do not exist in the database."; 
                    echo "</div>";
                }
                ?>
                     
                           <form class="m-form m-form--fit m-form--label-align-right" action="adminManagerAccountCreated.php" method="post" id="adminCreateManager">
                              <div class="m-portlet__body">
                                 <div class="form-group m-form__group row">
                                    <div class="col-10 ml-auto">
                                       <h3 class="m-form__section">
                                          1. Personal Details
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Full Name
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $_POST['fullName']; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    NRIC
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $_POST['nric']; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Email
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $_POST['email']; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Phone No.
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $_POST['phoneNum']; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                 <div class="form-group m-form__group row">
                                    <div class="col-10 ml-auto">
                                       <h3 class="m-form__section">
                                          2. Address
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Address
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $_POST['address']; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                 <div class="form-group m-form__group row">
                                    <div class="col-10 ml-auto">
                                       <h3 class="m-form__section">
                                          3. Account Details
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Username
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $_POST['username']; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Password
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="password" value="<?php echo $_POST['password']; ?>" disabled>
                                    </div>
                                 </div>
                              </div>
                              <div class="m-portlet__foot m-portlet__foot--fit">
                                 <div class="m-form__actions">
                                    <div class="row">
                                       <div class="col-4"></div>
                                       <div class="col-8">
                                          <a href="adminDashboard.php" class="btn btn-danger">
                                            Back
                                          </a>
                                       </div>
                                    </div>
				</div>
                              </div>
                           </form> 
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--end::Section-->
<!-- end::Body -->
<?php include("../source_include/footer.php"); ?>