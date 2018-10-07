

<!-- begin::Header -->
			<header id="m_header" class="m-grid__item		m-header "  m-minimize="minimize" m-minimize-mobile="minimize" m-minimize-offset="10" m-minimize-mobile-offset="10" >
				<div class="m-header__top">
					<div class="m-container m-container--fluid m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Brand -->
							<div class="m-stack__item m-brand m-stack__item--left">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="" class="m-brand__logo-wrapper">
											<img alt="" src="../img/logo/logo_inverse.png" class="m-brand__logo-default"/>
											<img alt="" src="../img/logo/logo_inverse.png" class="m-brand__logo-inverse"/>
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
							<?php include("../source_include/profileCustomerTopbar.php"); ?>
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
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="index.html" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Dashboard
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
														<a  href="customerDashboard.php" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-graphic-2"></i>
															<span class="m-menu__link-text">
																Dashboard
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
										
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs"  m-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="javascript:;" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Funds
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
														<a  href="customerTransfer.php" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-analytics"></i>
															<span class="m-menu__link-text">
																Transfer 
															</span>
														</a>
													</li>
													<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
														<a  href="customerDeposit.php" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-notes"></i>
															<span class="m-menu__link-text">
																Deposit
															</span>
														</a>
													</li>
													<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
														<a  href="customerWithdraw.php" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-notes"></i>
															<span class="m-menu__link-text">
																Withdraw
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
										
										<li class="m-menu__item  m-menu__item--active  m-menu__item--active-tab  m-menu__item--submenu m-menu__item--tabs"  m-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="javascript:;" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Profile
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
														<a  href="profile.php" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-analytics"></i>
															<span class="m-menu__link-text">
																Profile
															</span>
														</a>
													</li>
												</ul>
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