@extends('Layouts.Masterpage')
@section('title', 'Dar West')
@section('contents')


<body id="tc_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed">

	@include('Layouts.mobheader')

	<!--end::Header Mobile-->
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<div>
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="tc_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="tc_brand">
						<!--begin::Logo-->
						
						@include('Layouts.desklogo')

						<!--end::Logo-->
	
	
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					@include('Layouts.sidemenu')
					<!--end::Aside Menu-->
				</div>
			</div>
			<!--begin::Aside-->
		
			<div class="aside-overlay"></div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="tc_wrapper">
				<!--begin::Header-->
				<div id="tc_header" class="header header-fixed">
					<!--begin::Container-->
					<div class="container-fluid d-flex align-items-stretch justify-content-between">
						<!--begin::Header Menu Wrapper-->
						<div class="header-menu-wrapper header-menu-wrapper-left" id="tc_header_menu_wrapper">
							<!--begin::Header Menu-->
							<div id="tc_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
								<!--begin::Header Nav-->
								<ul class="menu-nav">

										<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active p-0"
										data-menu-toggle="click" aria-haspopup="true">
										<!--begin::Toggle-->
										<div class="btn  btn-clean btn-dropdown mr-0 p-0" id="tc_aside_toggle">
											<span class="svg-icon svg-icon-xl svg-icon-primary">

												<svg width="24px" height="24px" viewBox="0 0 16 16" class="bi bi-list"
													fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd"
														d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
												</svg>
											</span>
										</div>
										<!--end::Toolbar-->
									</li>

								</ul>
								<!--end::Header Nav-->
							</div>
							<!--end::Header Menu-->
						</div>
						<!--end::Header Menu Wrapper-->
						<!--begin::Topbar-->
						<div class="topbar">
							<div class="posicon d-lg-block d-none">
								<a href="pos.html" class="btn btn-primary white mr-2">POS</a>
							</div>
							<div class="topbar-item">
								<div class="quick-search quick-search-inline ml-20 mr-1 w-300px"
									id="kt_quick_search_inline">
									<!--begin::Form-->
									<form method="get" class="quick-search-form">
										<div class="input-group rounded bg-light">
											<div class="input-group-prepend">
												<span class="input-group-text">
													<span class="svg-icon svg-icon-lg">
														<svg width="20px" height="20px" viewBox="0 0 16 16"
															class="bi bi-search" fill="currentColor"
															xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd"
																d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
															<path fill-rule="evenodd"
																d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
														</svg>
													</span>
												</span>
											</div>
											<input type="text" class="form-control h-45px" placeholder="Search...">

										</div>
									</form>
									<!--end::Form-->
									<!--begin::Search Toggle-->
									<div id="kt_quick_search_toggle" data-toggle="dropdown" data-offset="0px,1px"></div>
									<!--end::Search Toggle-->
									<!--begin::Dropdown-->
									<div
										class="dropdown-menu dropdown-menu-left dropdown-menu-lg dropdown-menu-anim-up">
										<div class="quick-search-wrapper scroll ps" data-scroll="true" data-height="350"
											data-mobile-height="200" style="height: 350px; overflow: hidden;">
											<div class="ps__rail-x" style="left: 0px; bottom: 0px;">
												<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
												</div>
											</div>
											<div class="ps__rail-y" style="top: 0px; right: 0px;">
												<div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">
												</div>
											</div>
										</div>
									</div>
									<!--end::Dropdown-->
								</div>
							</div>
							<!--begin::Languages-->
							<div class="dropdown">

								<div class="topbar-item" data-toggle="dropdown" data-display="static">
									<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
										<img class="h-20px w-20px rounded-sm"
											src="assets/images/svg/flags/226-united-states.svg" alt="" />
									</div>
								</div>

								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item">
										<span class="symbol symbol-20 mr-3">
											<img class="h-20px w-20px rounded-sm"
												src="assets/images/svg/flags/226-united-states.svg" alt="" />
										</span>
										English
									</a>

								</div>

							</div>
							<!--end::Languages-->


							<!--begin::Quick Actions-->
							<div class="dropdown">

								<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
									<div id="kt_open_fullscreen" class="btn btn-icon btn-clean btn-dropdown mr-1" title="fullscreen"
										onclick="openFullscreen();">
										<span class="svg-icon svg-icon-xl svg-icon-primary">

											<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-fullscreen"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd"
													d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z" />
											</svg>



										</span>

									</div>

									<div id="kt_close_fullscreen" class="btn btn-icon btn-clean btn-dropdown mr-1"
										onclick="closeFullscreen();" style="display: none;">
										<span class="svg-icon svg-icon-xl svg-icon-primary">
											<svg width="20px" height="20px" viewBox="0 0 16 16"
												class="bi bi-fullscreen-exit" fill="currentColor"
												xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd"
													d="M5.5 0a.5.5 0 0 1 .5.5v4A1.5 1.5 0 0 1 4.5 6h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5zm5 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 10 4.5v-4a.5.5 0 0 1 .5-.5zM0 10.5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 6 11.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zm10 1a1.5 1.5 0 0 1 1.5-1.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4z" />
											</svg>
										</span>
									</div>
								</div>



							</div>
							<!--end::Quick Actions-->



							<!--begin::Quick panel-->
							<div class="topbar-item">
								<div class="btn btn-icon btn-clean  mr-1" id="tc_quick_panel_toggle">
									<span class="svg-icon svg-icon-xl svg-icon-primary">

										<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-people"
											fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd"
												d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
										</svg>
									</span>
									<span class="badge badge-pill badge-secondary">5</span>
								</div>
							</div>
							<!--end::Quick panel-->


							<!--begin::Notifications-->
							<div class="dropdown">

								<div class="topbar-item" data-toggle="dropdown" data-display="static">
									<div class="btn btn-icon btn-clean btn-dropdown mr-1">
										<div class="svg-icon svg-icon-xl svg-icon-primary" title="Notification">

											<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-bell"
												fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
												<path fill-rule="evenodd"
													d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
											</svg>
											<div class="lds-ripple">
												<div></div>
												<div></div>
											</div>
										</div>
										<span class="badge badge-pill badge-primary">5</span>
									</div>
								</div>

								<div class="dropdown-menu p-0 m-0 dropdown-menu-right w-300px">
									<form>

										<div class="d-flex flex-column p-3 border-bottom rounded-top">

											<h4
												class="d-flex justify-content-between align-items-center mb-0 rounded-top">
												<span class="font-size-h5 ">Notifications</span>
												<a href="#" class="btn btn-sm btn-primary-hover py-1 px-2">
													Clear
												</a>
											</h4>

										</div>

										<div class="nav nav-hover scrollbar-1 ">

											<a href="#" class="nav-item border-bottom">
												<div class="nav-link">
													<div class="nav-icon mr-3">
														<i class="fas fa-cog text-primary"></i>
													</div>
													<div class="nav-text">
														<div class="font-weight-bold">New report has been received</div>
														<div class="text-muted">23 hrs ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="nav-item border-bottom">
												<div class="nav-link">
													<div class="nav-icon mr-3">
														<i class="fas fa-archive text-secondary"></i>
													</div>
													<div class="nav-text">
														<div class="font-weight-bold">New report has been received</div>
														<div class="text-muted">23 hrs ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="nav-item border-bottom">
												<div class="nav-link">
													<div class="nav-icon mr-3">
														<i class="fas fa-plane text-success"></i>
													</div>
													<div class="nav-text">
														<div class="font-weight-bold">New report has been received</div>
														<div class="text-muted">23 hrs ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="nav-item border-bottom">
												<div class="nav-link">
													<div class="nav-icon mr-3">
														<i class="fas fa-plane text-success"></i>
													</div>
													<div class="nav-text">
														<div class="font-weight-bold">New report has been received</div>
														<div class="text-muted">23 hrs ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="nav-item border-bottom">
												<div class="nav-link">
													<div class="nav-icon mr-3">
														<i class="fas fa-plane text-success"></i>
													</div>
													<div class="nav-text">
														<div class="font-weight-bold">New report has been received</div>
														<div class="text-muted">23 hrs ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="nav-item border-bottom">
												<div class="nav-link">
													<div class="nav-icon mr-3">
														<i class="fas fa-plane text-success"></i>
													</div>
													<div class="nav-text">
														<div class="font-weight-bold">New report has been received</div>
														<div class="text-muted">23 hrs ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="nav-item border-bottom">
												<div class="nav-link">
													<div class="nav-icon mr-3">
														<i class="fas fa-plane text-success"></i>
													</div>
													<div class="nav-text">
														<div class="font-weight-bold">New report has been received</div>
														<div class="text-muted">23 hrs ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="nav-item border-bottom">
												<div class="nav-link">
													<div class="nav-icon mr-3">
														<i class="fas fa-plane text-success"></i>
													</div>
													<div class="nav-text">
														<div class="font-weight-bold">New report has been received</div>
														<div class="text-muted">23 hrs ago</div>
													</div>
												</div>
											</a>
											<a href="#" class="nav-item border-bottom">
												<div class="nav-link">
													<div class="nav-icon mr-3">
														<i class="fas fa-daimond text-success"></i>
													</div>
													<div class="nav-text">
														<div class="font-weight-bold">New report has been received</div>
														<div class="text-muted">23 hrs ago</div>
													</div>
												</div>
											</a>
										</div>
										<div class="d-flex flex-column p-3 rounded-top">

											<h4 class="d-flex justify-content-center mb-0  rounded-top">
												<a href="#" class="font-size-base text-primary">View All</a>

											</h4>

										</div>

									</form>
								</div>

							</div>
							<!--end::Notifications-->



							<!--begin::user-->
							<div class="dropdown">

								<div class="topbar-item" data-toggle="dropdown" data-display="static">
									<div class="btn btn-icon w-auto btn-clean d-flex align-items-center pr-1 pl-3">
										<span class="text-dark-50 font-size-base d-none d-xl-inline mr-3">Angilina
											Deo</span>
										<span class="symbol symbol-35 symbol-light-success">
											<span class="symbol-label font-size-h5 ">
												<svg width="20px" height="20px" viewBox="0 0 16 16"
													class="bi bi-person-fill" fill="currentColor"
													xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd"
														d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
												</svg>
											</span>
										</span>
									</div>
								</div>

								<div class="dropdown-menu dropdown-menu-right" style="min-width: 150px;">

									<a href="#" class="dropdown-item">
										<span class="svg-icon svg-icon-xl svg-icon-primary mr-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round"
												class="feather feather-user">
												<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
												<circle cx="12" cy="7" r="4"></circle>
											</svg>
										</span>
										Edit Profile
									</a>

									<a href="#" class="dropdown-item">
										<span class="svg-icon svg-icon-xl svg-icon-primary mr-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
												viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
												stroke-linecap="round" stroke-linejoin="round"
												class="feather feather-power">
												<path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
												<line x1="12" y1="2" x2="12" y2="12"></line>
											</svg>
										</span>
										Logout
									</a>
								</div>

							</div>
							<!--end::user-->


						</div>
						<!--end::Topbar-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
						</div>
					</div>
					<!--end::Subheader-->
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="row">
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle-primary">

												<div class="card-body">
													<h3 class="text-body font-weight-bold">Orders</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 mr-3"><span
																	class="counter" data-target="400">0</span></span>

														</div>
														<div class="text-black-50 mt-3">Compare to last year (2019)</div>
													</div>

												</div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle theme-circle-secondary">

												<div class="card-body">
													<h3 class="text-body font-weight-bold">Products</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 mr-3"><span
																	class="counter" data-target="600">0</span></span>

														</div>
														<div class="text-black-50 mt-3">Compare to last year (2019)</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle-success">

												<div class="card-body">
													<h3 class="text-body font-weight-bold">Users</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 mr-3"><span
																	class="counter" data-target="1000">0</span></span>

														</div>
														<div class="text-black-50 mt-3">Compare to last year (2019)</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-3">
											<div class="card card-custom gutter-b bg-white border-0 theme-circle theme-circle-info">

												<div class="card-body">
													<h3 class="text-body font-weight-bold">Sales</h3>
													<div class="mt-3">
														<div class="d-flex align-items-center">
															<span class="text-dark font-weight-bold font-size-h1 mr-3">$<span
																	class="counter" data-target="6800">0</span></span>
															<span
																class="font-weight-bold font-size-h4 text-danger">8.2</span>
															<span class="svg-icon text-danger">
																<svg width="20px" height="20px" viewBox="0 0 16 16"
																	class="bi bi-arrow-up-short" fill="currentColor"
																	xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd"
																		d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z" />
																</svg>
															</span>
														</div>
														<div class="text-black-50 mt-3">Compare to last year (2019)</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6  col-xl-8">
											<div class="card card-custom gutter-b bg-white border-0">
												<div class="card-header align-items-center  border-0">
													<div class="card-title mb-0">
														<h3 class="card-label text-body font-weight-bold mb-0">Users
														</h3>
													</div>
													
												</div>
												<div class="card-body pt-3">
													<div id="chart-4">
													</div>
												</div>
											</div>
										</div>

										
										<div class="col-lg-6 col-xl-4">
											<div class="card card-custom gutter-b bg-white border-0">
												<div class="card-header align-items-center  border-0">
													<div class="card-title mb-0">
														<h3 class="card-label text-body font-weight-bold mb-0">Last Update
														</h3>
													</div>
													<div class="card-toolbar">
														<button class="btn p-0" type="button" id="dropdownMenuButton1"
															data-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false">
															<span class="svg-icon">
																<svg width="20px" height="20px" viewBox="0 0 16 16"
																	class="bi bi-three-dots text-body" fill="currentColor"
																	xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd"
																		d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
																</svg>
															</span>
														</button>
														<div class="dropdown-menu dropdown-menu-right"
															aria-labelledby="dropdownMenuButton1">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
												<div class="card-body px-0">
													<ul class="list-group scrollbar-1" style="height: 300px;">
													  <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between py-2">
														<div class="list-left d-flex align-items-center">
															<span class="d-flex align-items-center justify-content-center rounded svg-icon w-45px h-45px bg-primary text-white mr-2">
																<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-lightning-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
																  </svg>
															  </span>
														  <div class="list-content">
															<span class="list-title text-body">Total Products</span>
															<small class="text-muted d-block">1.2k New Products</small>
														  </div>
														</div>
														<span>10.6k</span>
													  </li>
													  <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between py-2">
														<div class="list-left d-flex align-items-center">
															<span class="d-flex align-items-center justify-content-center rounded svg-icon w-45px h-45px bg-secondary text-white mr-2">
																<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-bar-chart-line-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
																  </svg>
															  </span>
														  <div class="list-content">
															<span class="list-title text-body">Total Sales</span>
															<small class="text-muted d-block">39.4k New Sales</small>
														  </div>
														</div>
														<span>26M</span>
													  </li>
													  <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between py-2">
														<div class="list-left d-flex align-items-center">
															<span class="d-flex align-items-center justify-content-center rounded svg-icon w-45px h-45px bg-success text-white mr-2">
																<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-credit-card-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4z"/>
																	<path fill-rule="evenodd" d="M0 7v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H3z"/>
																  </svg>
															  </span>
														  <div class="list-content">
															<span class="list-title text-body">Total Revenue</span>
															<small class="text-muted d-block">43.5k New Revenue</small>
														  </div>
														</div>
														<span>15.89M</span>
													  </li>
													  
													  <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between py-2">
														<div class="list-left d-flex align-items-center">
															<span class="d-flex align-items-center justify-content-center rounded svg-icon w-45px h-45px bg-warning text-white mr-2">
																<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-lightning-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
																  </svg>
															  </span>
														  <div class="list-content">
															<span class="list-title text-body">Total Users</span>
															<small class="text-muted d-block">New Users</small>
														  </div>
														</div>
														<span>1.2k</span>
													  </li>
													  <li class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between py-2">
														<div class="list-left d-flex align-items-center">
															<span class="d-flex align-items-center justify-content-center rounded svg-icon w-45px h-45px bg-info text-white mr-2">
																<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-lightning-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
																  </svg>
															  </span>
														  <div class="list-content">
															<span class="list-title text-body">Total Visits</span>
															<small class="text-muted d-block">New Visits</small>
														  </div>
														</div>
														<span>4.6k</span>
													  </li>
													</ul>
												  </div>
											  </div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-lg-6 col-xl-4">
											<div class="card card-custom gutter-b bg-white border-0">
												<div class="card-header align-items-center  border-0">
													<div class="card-title mb-0">
														<h3 class="card-label font-weight-bold mb-0 text-body">Activity
														</h3>
													</div>
													<div class="card-toolbar">
														<button class="btn p-0" type="button" id="dropdownMenuButton2"
															data-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false">
															<span class="svg-icon">
																<svg width="20px" height="20px" viewBox="0 0 16 16"
																	class="bi bi-three-dots text-body" fill="currentColor"
																	xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd"
																		d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
																</svg>
															</span>
														</button>
														<div class="dropdown-menu dropdown-menu-right"
															aria-labelledby="dropdownMenuButton2">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
												<div class="card-body">
													<div class="timeline timeline-6 mt-3">
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bold text-black-50 ">08:42</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-warning icon-xl"></i>
															</div>
															<div class="font-weight-mormal timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bold text-black-50">10:00</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-success icon-xl"></i>
															</div>
															<div class="timeline-content d-flex">
																<span class="font-weight-bolder text-body pl-3">AEOL meeting</span>
															</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bold text-black-50 ">14:37</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-xl"></i>
															</div>
															<div class="timeline-content font-weight-bold text-body pl-3">Make deposit 
															<a href="#" class="text-primary">USD 700</a>. to ESL</div>
															
														</div>
														
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bold text-black-50 ">16:50</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-xl"></i>
															</div>
															<div class="timeline-content font-weight-mormal text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bold text-black-50">21:03</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-xl"></i>
															</div>
															<div class="timeline-content font-weight-bold text-body pl-3">New order placed 
															<a href="#" class="text-primary">#XF-2356</a>.</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bold text-black-50">23:07</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-info icon-xl"></i>
															</div>
															<div class="timeline-content font-weight-mormal text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>
														</div>
														<div class="timeline-item align-items-start">
															<div class="timeline-label font-weight-bold text-black-50">16:50</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-primary icon-xl"></i>
															</div>
															<div class="timeline-content font-weight-mormal text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
														</div>
														
														<div class="timeline-item align-items-start">								
															<div class="timeline-label font-weight-bold text-black-50">21:03</div>
															<div class="timeline-badge">
																<i class="fa fa-genderless text-danger icon-xl"></i>
															</div>
															<div class="timeline-content font-weight-bold text-body pl-3">New order placed 
															<a href="#" class="text-primary">#XF-2356</a>.</div>
														</div>

													</div>
												</div>
											</div>


										</div>
										<div class="col-lg-6 col-xl-8">
											<div class="card card-custom gutter-b bg-white border-0">
												<div class="card-header align-items-center  border-0">
													<div class="card-title mb-0">
														<h3 class="card-label font-weight-bold mb-0 text-body">Weekly Sales
														</h3>
													</div>
													
												</div>
												<div class="card-body pt-3">
													<div id="chart-3">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										
										<div class="col-lg-6 col-xl-8">
											<div class="card card-custom gutter-b bg-white border-0" >
												<div class="card-header align-items-center  border-0">
													<div class="card-title mb-0">
														<h3 class="card-label mb-0 font-weight-bold text-body">New Orders
														</h3>
													</div>
													<div class="card-toolbar">
														<button class="btn p-0" type="button" id="dropdownMenuButton3"
															data-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false">
															<span class="svg-icon">
																<svg width="20px" height="20px" viewBox="0 0 16 16"
																	class="bi bi-three-dots text-body" fill="currentColor"
																	xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd"
																		d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
																</svg>
															</span>
														</button>
														<div class="dropdown-menu dropdown-menu-right"
															aria-labelledby="dropdownMenuButton3">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
												<div class="card-body" >
													<div >
														<div class="kt-table-content table-responsive">
															<table id="myTable" class="table ">
																
																<thead class="kt-table-thead text-body">
																	<tr>
																		<th class="kt-table-cell">Order ID</th>
																		<th class="kt-table-cell">Customer Name</th>
																		<th class="kt-table-cell">Amount</th>
																		<th class="kt-table-cell">
																			<div class="text-right">Status</div>
																		</th>
																	</tr>
																</thead>
																<tbody class="kt-table-tbody text-dark">
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center">
																				<span
																					class="ml-2">Clayton Bates</span></div>
																		</td>
																		
																		<td class="kt-table-cell">$137.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Gabriel Frazier</span>
																			</div>
																		</td>
																		<td class="kt-table-cell">$322.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center">
																				<span
																					class="ml-2">Debra Hamilton</span></div>
																		</td>
																		<td class="kt-table-cell">$543.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-info">Pending</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Stacey Ward</span></div>
																		</td>
																		<td class="kt-table-cell">$876.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-danger">Rejected</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Troy Alexander</span></div>
																		</td>
																		<td class="kt-table-cell">$241.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Clayton Bates</span></div>
																		</td>
																		
																		<td class="kt-table-cell">$137.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Gabriel Frazier</span>
																			</div>
																		</td>
																		<td class="kt-table-cell">$322.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Debra Hamilton</span></div>
																		</td>
																		<td class="kt-table-cell">$543.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-info">Pending</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Stacey Ward</span></div>
																		</td>
																		<td class="kt-table-cell">$876.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-danger">Rejected</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Troy Alexander</span></div>
																		</td>
																		<td class="kt-table-cell">$241.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Clayton Bates</span></div>
																		</td>
																		
																		<td class="kt-table-cell">$137.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Gabriel Frazier</span>
																			</div>
																		</td>
																		<td class="kt-table-cell">$322.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Debra Hamilton</span></div>
																		</td>
																		<td class="kt-table-cell">$543.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-info">Pending</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Stacey Ward</span></div>
																		</td>
																		<td class="kt-table-cell">$876.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-danger">Rejected</span>
																			</div>
																		</td>
																	</tr>
																	<tr class="kt-table-row kt-table-row-level-0">
																		<td class="kt-table-cell">#12425</td>
																		<td class="kt-table-cell">
																			<div class="d-flex align-items-center"><span
																					class="ml-2">Troy Alexander</span></div>
																		</td>
																		<td class="kt-table-cell">$241.00</td>
																		<td class="kt-table-cell">
																			<div class="text-right"><span
																					class="mr-0 text-success">Approved</span>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												
													
												</div>
											</div>


										</div>
										<div class="col-lg-6 col-xl-4">
											<div class="card card-custom gutter-b bg-white border-0">
												<div class="card-header align-items-center  border-0">
													<div class="card-title mb-0">
														<h3 class="card-label mb-0 font-weight-bold text-body">Action Needed
														</h3>
													</div>
													<div class="card-toolbar">
														<button class="btn p-0" type="button" id="dropdownMenuButton4"
															data-toggle="dropdown" aria-haspopup="true"
															aria-expanded="false">
															<span class="svg-icon">
																<svg width="20px" height="20px" viewBox="0 0 16 16"
																	class="bi bi-three-dots text-body" fill="currentColor"
																	xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd"
																		d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
																</svg>
															</span>
														</button>
														<div class="dropdown-menu dropdown-menu-right"
															aria-labelledby="dropdownMenuButton4">
															<a class="dropdown-item" href="#">Action</a>
															<a class="dropdown-item" href="#">Another action</a>
															<a class="dropdown-item" href="#">Something else here</a>
														</div>
													</div>
												</div>
												<div class="card-body pt-4">
													<div class="progress" data-percentage="80">
														<span class="progress-left">
															<span class="progress-bar"></span>
														</span>
														<span class="progress-right">
															<span class="progress-bar"></span>
														</span>
														<div class="progress-value">
															<div class="text-body">
																80%<br>
																<span>completed</span>
															</div>
														</div>
													</div>
													<div class="pt-0">
														<p class="text-center font-weight-normal text-body">Notes: Current sprint requires stakeholders 
														<br>to approve newly amended policies</p>
														<a href="#" class="btn btn-secondary text-white font-weight-bold w-100 py-3">Generate Report</a>
													</div>
												</div>
												
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						
					</div>
					
				</div>

				@include('Layouts.footer')
				
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->



	




	
	
</body>
<!--end::Body-->

@endsection