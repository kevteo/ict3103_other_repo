<?php
include("../source_include/header.php");

$title = "My Bank | Manager";
$output = str_replace('%Title%', $title, $output);
echo $output;

include("managerHeader.php");


if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $user = $model->getCustomerDetails($user_id);
    //var_dump($user);
    $username = $user['username'];
    $name = $user['name'];
    $nric = $user['nric'];
    $mobileNumber = $user['mobileNumber'];
    $email = $user['email'];
    $address = $user['address'];
    $account = $user['account'];
    $salary = $user['salary'];
    $balance = $user['balance'];
    $lastActive=$user['lastActive'];
    
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
                     User Profile
                  </h3>
               </div>
            </div>
         </div>
         <!-- end: Subheader -->
         <div class="m-content">
            <div class="row">
            <div class="col-xl-12 col-lg-12">
                  <div class="m-portlet m-portlet--full-height m-portlet--tabs   m-portlet--rounded">
                     <div class="m-portlet__head">
                        <div class="m-portlet__head-tools">
                        
                        </div>
                     </div>

                           <form class="m-form m-form--fit m-form--label-align-right" action="managerEditCustomerDetailsCompleted.php?user_id=<?php echo $_GET['user_id'] ?>" method="post" id="editCustProfileForm">
                              <div class="m-portlet__body">
                                 <div class="form-group m-form__group m--margin-top-10 m--hide">
                                    <div class="alert m-alert m-alert--default" role="alert">
                                    </div>
                                 </div>
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
                                       <input class="form-control m-input" type="text" value="<?php echo $name; ?>" required>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    NRIC
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $nric; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Email
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="email" value="<?php echo $email; ?>" name="email" required> 
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Phone No.
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $mobileNumber; ?>" disabled>
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
                                       <input class="form-control m-input" type="text" value="<?php echo $address; ?>" name="address" required>
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
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $username; ?>" disabled>
                                    </div>
                                 </div>

                                    <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Account
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $account; ?>" disabled>
                                    </div>
                                 </div>

                                     <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Balance
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $balance; ?>" disabled>
                                    </div>
                                 </div>


                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Salary Range
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $salary; ?>" disabled>
                                    </div>
                                 </div>
								  <div class="m-portlet__foot m-portlet__foot--fit">
                                 <div class="m-form__actions">
                                    <div class="row">
                                       <div class="col-4"></div>
                                       <div class="col-8">
									   <a href="javascript:$('#editCustProfileForm').submit()" class="btn btn-primary">
															Save Changes
														</a>
                                          &nbsp;&nbsp;
                                          <a href="managerDashboard.php" class="btn btn-danger">
                                          Back
                                          </a>
                                       </div>
                                   
                              </div>
							  </div>
							  </div>
                              </div>
							  <input type="hidden" name="editCustProfile">
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