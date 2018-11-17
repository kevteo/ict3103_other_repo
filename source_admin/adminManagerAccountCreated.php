<?php
include("../source_include/header.php");

    $title = "My Bank | Admin";
    $output = str_replace('%Title%', $title, $output);

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
                     Manager Created
                  </h3>
               </div>
            </div>
         </div>
         <!-- end: Subheader -->
         <div class="m-content">
            <div class="row">
               <div class="col-xl-12 col-lg-12">
                  <a href="adminDashboard.php" class="btn btn-danger">
                                          Back
                                          </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--end::Section-->
<!-- end::Body -->
<?php include("../source_include/footer.php"); ?>