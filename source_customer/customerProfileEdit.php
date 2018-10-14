<?php
include("../source_include/header.php");

$title = "My Bank | Customer";
$output = str_replace('%Title%', $title, $output);
echo $output;

include("customerHeaderProfile.php");

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
                           <form class="m-form m-form--fit m-form--label-align-right" action="customerProfileView.php" method="post" id="editProfileForm">
                              <div class="m-portlet__body">
                                 <div class="form-group m-form__group m--margin-top-10 m--hide">
                                    <div class="alert m-alert m-alert--default" role="alert">
                                       The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
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
                                       <input class="form-control m-input" type="text" value="<?php echo $user->name ;?>" name="fullName">
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    NRIC
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="text" value="<?php echo $user->nric ;?>" style="background: transparent; border: none;" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Email
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="text" value="<?php echo $user->email ;?>" name="email">
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Phone No.
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="text" value="<?php echo $user->mobileNumber; ?>" name="phoneNum">
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
                                       <input class="form-control m-input" type="text" value="Ang Mo Kio Avenue 6" name="address">
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
                                       <input class="form-control m-input" type="text" value="<?php echo $user->username ;?>" style="background: transparent; border: none;" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Password
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="password" value="<?php echo $user->password ;?>" name="password">
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Salary Range
                                    </label>
                                    <div class="col-7">
                                       <select  name="account_type" class="form-control m-input" placeholder="" id="salary">
                                          <option value="Below 2000" <?php if ($user->salary == "Below 2000") echo "selected=selected"  ;?> > 
                                             Below $2000
                                          </option>
                                          <option value="2000-3000" <?php if ($user->salary == "2000-3000") echo "selected=selected"  ;?> > 
                                             $2000 - $3000
                                          </option>
                                          <option value="3000-4000" <?php if ($user->salary == "3000-4000") echo "selected=selected"  ;?> > 
                                             $3000 - $4000
                                          </option>
                                          <option value="4000-5000" <?php if ($user->salary == "4000-5000") echo "selected=selected"  ;?> > 
                                             $4000 - $5000
                                          </option>
                                          <option value="5000-6000" <?php if ($user->salary == "5000-6000") echo "selected=selected"  ;?> > 
                                             $5000 - $6000
                                          </option>
                                          <option value="Above 6000" <?php if ($user->salary == "Above 6000") echo "selected=selected"  ;?> > 
                                             Above $6000
                                          </option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="m-portlet__foot m-portlet__foot--fit">
                                 <div class="m-form__actions">
                                    <div class="row">
                                       <div class="col-4"></div>
                                       <div class="col-8">
                                          <a href="javascript:$('#editProfileForm').submit()" class="btn btn-primary">
															Save Changes
														</a>
                                          &nbsp;&nbsp;
                                          <a href="customerProfileView.php" class="btn btn-danger">
                                          Back
                                          </a>
                                       </div>
                                   
                              </div>
							  </div>
							  </div>
                           <input type="hidden" name="editProfile">
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