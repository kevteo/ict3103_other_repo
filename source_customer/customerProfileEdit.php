<?php
   include("../source_include/header.php");
   
   $title = "My Bank | Customer";
   $output = str_replace('%Title%', $title, $output);
   echo $output;
   
   include("customerHeaderProfile.php");
   
   
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
                           <form class="m-form m-form--fit m-form--label-align-right">
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
                                       <input class="form-control m-input" type="text" value="Mark Andre">
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    NRIC
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="text" value="S1231232F">
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Email
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="text" value="nic.stone@gmail.com">
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Phone No.
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="text" value="81222222">
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
                                    Address Line 1
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="text" value="Ang Mo Kio Avenue 6">
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Address Line 2
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="text" value="Block 123 #12-22">
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Postal Code
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="text" value="540123">
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
                                       <input class="form-control m-input" type="text" value="nick.stone">
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Password
                                    </label>
                                    <div class="col-7">
                                       <input class="form-control m-input" type="password" value="qwerty">
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Salary Range
                                    </label>
                                    <div class="col-7">
                                       <select  name="account_type" class="form-control m-input" placeholder="" value="1" id="salary">
                                          <option value="1">
                                             < $2000
                                          </option>
                                          <option value="2">
                                             $2000 - $3000
                                          </option>
                                          <option value="3">
                                             $4000 - $5000
                                          </option>
                                          <option value="4">
                                             $5000 - $6000
                                          </option>
                                          <option value="6">
                                             > $6000
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
                                          <a href="customerProfileView.php" class="btn btn-primary">
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