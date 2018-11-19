<?php
include("../source_include/header.php");

$title = "My Bank | Customer";
$output = str_replace('%Title%', $title, $output);
echo $output;

include("managerHeader.php");

//New
if(isset($_GET['type']) && isset($_GET['transactionID'])){
      $user = unserialize($_SESSION['user']);
      $currentUserName=$user->username;
      $type= $_GET['type'];
      $transactionID= $_GET['transactionID'];
      
      if($type=="transfer"){
            $transaction = $model->getCustomerTransactionsDetailsTransfer($transactionID);
      }
      else{
             $transaction = $model->getCustomerTransactionsDetails($transactionID);

      }
      
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
                     Transaction Details
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
                                          1. Transaction
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Username
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $transaction['username']; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Date
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $transaction['datetime']; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Type
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php  echo $transaction['type']; ?>" disabled>
                                    </div>
                                 </div>
                                 <div class="form-group m-form__group row">
                                    <label for="example-text-input" class="col-2 col-form-label">
                                    Amount
                                    </label>
                                    <div class="col-7">
                                       <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php  echo $transaction['amount']; ?>" disabled>
                                    </div>
                                 </div>
                                
                                <!-- part 2-->
                                 <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

                                  <?php if($type=="transfer"){ ?>
                                
                                <div class="form-group m-form__group row">
                                   <div class="col-10 ml-auto">
                                      <h3 class="m-form__section">
                                         2. Transfer Details
                                      </h3>
                                   </div>
                                </div>

                                  <div class="form-group m-form__group row">
                                   <label for="example-text-input" class="col-2 col-form-label">
                                   From
                                   </label>
                                   <div class="col-7">
                                      <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $transaction['userFrom']; ?>" disabled>
                                   </div>
                                </div>
                                <div class="form-group m-form__group row">
                                   <label for="example-text-input" class="col-2 col-form-label">
                                   Account
                                   </label>
                                   <div class="col-7">
                                      <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $transaction['userFromAccount']; ?>" disabled>
                                   </div>
                                </div>
                                <div class="form-group m-form__group row">
                                   <label for="example-text-input" class="col-2 col-form-label">
                                   To
                                   </label>
                                   <div class="col-7">
                                      <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $transaction['userTo']; ?>" disabled>
                                   </div>
                                </div>
                                <div class="form-group m-form__group row">
                                   <label for="example-text-input" class="col-2 col-form-label">
                                   Account
                                   </label>
                                   <div class="col-7">
                                      <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $transaction['userToAccount']; ?>" disabled>
                                   </div>
                                </div>

                                <!-- 3-->
                                <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                <div class="form-group m-form__group row">
                                   <div class="col-10 ml-auto">
                                      <h3 class="m-form__section">
                                         3. Surcharge
                                      </h3>
                                   </div>
                                </div>

                                  <div class="form-group m-form__group row">
                                   <label for="example-text-input" class="col-2 col-form-label">
                                   Surcharge
                                   </label>
                                   <?php
                                     $amount="$0";
                                   if($transaction['amount']<5){
                                         //only deduct if transfer from own account
                                         $amount = "-$0.50";
                                   }
                                   ?>
                                   <div class="col-7">
                                      <input style="background: transparent; border: none;" class="form-control m-input" type="text" value="<?php echo $amount; ?>" disabled>
                                      <span class="m-form__help">
                                   Additional charge of SGD 0.50 if the transfer amount less than $SGD 5.00 for the admin fee
						</span>
                                   </div>
                              
                                </div>

                                <?php } ?>
                             
                              

                              
                                 

                                 <!-- Last-->
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