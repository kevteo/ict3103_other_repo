
<?php
    include("header.php");
	
    $title = "My Bank | Customer";
    $output = str_replace('%Title%', $title, $output);
    echo $output;
?>
	        
    	<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- begin::Header -->
			<header id="m_header" class="m-grid__item		m-header "  m-minimize="minimize" m-minimize-mobile="minimize" m-minimize-offset="10" m-minimize-mobile-offset="10" >
				<div class="m-header__top">
					<div class="m-container m-container--fluid m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Brand -->
							<div class="m-stack__item m-brand m-stack__item--left">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="customer.php" class="m-brand__logo-wrapper">
											<img alt="" src="assets/demo/demo8/media/img/logo/logo_inverse.png" class="m-brand__logo-default"/>
											<img alt="" src="assets/demo/demo8/media/img/logo/logo_inverse.png" class="m-brand__logo-inverse"/>
										</a>
									</div>
									<div class="m-stack__item m-stack__item--middle m-brand__tools">
										<!-- begin::Responsive Header Menu Toggler-->
										<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>
										<!-- end::Responsive Header Menu Toggler-->
			<!-- begin::Topbar Toggler-->
										<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
											<i class="flaticon-more"></i>
										</a>
										<!--end::Topbar Toggler-->
									</div>
								</div>
							</div>
							<!-- end::Brand -->		
							
							<!-- begin::Topbar -->
							<div class="m-stack__item m-stack__item--right m-header-head" id="m_header_nav">
								<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
									<div class="m-stack__item m-topbar__nav-wrapper">
										<ul class="m-topbar__nav m-nav m-nav--inline">
											
											<!---------------------------------------- Profile Section ------------------------------------------->
											
											<span class="welcome-text">
													Welcome
											</span>
											<li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
												<a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-topbar__userpic">
														<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
													</span>
													
													<span class="m-nav__link-icon m-topbar__usericon  m--hide">
														<span class="m-nav__link-icon-wrapper">
															<i class="flaticon-user-ok"></i>
														</span>
													</span>
													<span class="m-topbar__username m--hide">
														Nick
													</span>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__header m--align-center">
															<div class="m-card-user m-card-user--skin-light">
																<div class="m-card-user__pic">
																	<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
																</div>
																<div class="m-card-user__details">
																	<span class="m-card-user__name m--font-weight-500">
																		Lee Manager
																	</span>
																	<a href="profile.php" class="">
																		View Profile
																	</a>
																</div>
															</div>
														</div>
														<div class="m-dropdown__body">
															<div class="m-dropdown__content">
																<ul class="m-nav m-nav--skin-light">
																	<li class="m-nav__section m--hide">
																		<span class="m-nav__section-text">
																			Section
																		</span>
																	</li>
																	
																	<li class="m-nav__separator m-nav__separator--fit"></li>
																	<li class="m-nav__item">
																		<a href="login.php" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																			Logout
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end::Topbar -->

							
						</div>
					</div>
				</div>
				
				<!---------------------------------------------------Section------------------------------------->
				<div class="m-header__bottom">
					<div class="m-container m-container--fluid m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Horizontal Menu -->
							<div class="m-stack__item m-stack__item--fluid m-header-menu-wrapper">
								<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
									<i class="la la-close"></i>
								</button>
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item    m-menu__item--active-tab  m-menu__item--submenu m-menu__item--tabs"  m-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="index.html" class="m-menu__link m-menu__toggle" href="#panel1">
												<span class="m-menu__link-text">
													Dashboard
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											
<!------------------------------------------------------------------------------ The Tab ------------------------------------------>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">

											</div>
											
<!------------------------------------------------------------------------------ The Tab ------------------------------------------>
											</li>

											
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs"  m-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="transfer.php" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Transfer
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												
											</div>
										</li>
										
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs"  m-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="transfer.php" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Deposit
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												
											</div>
										</li>
									
									</ul>
								</div>
							</div>
							<!-- end::Horizontal Menu -->
						</div>
					</div>
				</div>
			</header>
			<!-- end::Header -->		
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Dashboard
								</h3>
		

								

							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<!--Begin::Section-->
						<div class="row">
						
						<!------------------------------------- Content Area ---------------------------------> 
        <div class="card-header" style="width:100%">
          <i class="fa fa-table" ></i> Accounts
		  <div style="float: right;margin-right:10px;">
		  </div>
		  </div>

		
          <div class="table-responsive">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Account</th>
				  <th>Balance</th>
                </tr>
              </thead>
              <tbody>
			  <td>123-456-312-0</td>
			  <td>$8000</td>
			  <td></td>
	
              </tbody>
            </table>
          </div>
      

						<!------------------------------------- Content Area ---------------------------------> 
						</div>
						
						<!--End::Section-->
					</div>
				</div>
			</div>
			<!-- end::Body -->

<?php include("footer.php"); ?>