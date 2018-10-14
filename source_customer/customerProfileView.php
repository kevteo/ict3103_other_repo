<?php
include("../source_include/header.php");

$title = "My Bank | Customer";
$output = str_replace('%Title%', $title, $output);
echo $output;

include("customerHeaderProfile.php");


// If Submit Modify Profile Form
if (isset($_POST['editProfile'])) {
      $user = unserialize($_SESSION['user']);
      $name = $_POST['fullName'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $salary = $_POST['account_type'];

      $model->modifyProfile($user->userID, $name, $address, $email, $password, $salary);
}

$user = $model->getProfile();
   
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
                     My Profile
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
                           <ul class="m-portlet__nav">
                              <li class="m-portlet__nav-item m-portlet__nav-item--last">
                                 <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="customerProfileEdit.php" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                    <i class="la la-gear"></i>
                                    </a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                           <form class="m-form m-form--fit m-form--label-align-right">
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
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $user->name; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    NRIC
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $user->nric; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Email
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $user->email; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Phone No.
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $user->mobileNumber; ?>" disabled>
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
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $user->address; ?>" disabled>
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
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $user->username; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Salary Range
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $user->salary; ?>" disabled>
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