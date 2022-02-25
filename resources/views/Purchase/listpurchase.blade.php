@extends('Layouts.Masterpage')
@section('title', 'Dar West')


@section('contents')

<body id="tc_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed">
  
	<!--begin::Header Mobile-->
	@include('Layouts.mobheader')
	<!--end::Header Mobile-->

	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<!--begin::Aside-->
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
						@include('Layouts.topmenu')
						<!--end::Topbar-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="tc_content">
                    
                    @include('Layouts.alerts')

					<!--begin::Subheader-->
					<div class="subheader py-2 py-lg-6 subheader-solid">
						<div class="container-fluid">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-white mb-0 px-0 py-2">
									<li class="breadcrumb-item " aria-current="page">purchase</li>
									<li class="breadcrumb-item active" aria-current="page">List</li>
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
								<div class="col-lg-12 col-xl-12">
									<div class="card card-custom gutter-b bg-transparent shadow-none border-0" >
										<div class="card-header align-items-center   border-bottom-dark px-0">
											<div class="card-title mb-0">
												<h3 class="card-label mb-0 font-weight-bold text-body">Purchase List
												</h3>
											</div>
											<div class="icons d-flex">
												
												<a  href="{{URL::to('purchase')}}" class="btn ml-2 p-0" 
														id="kt_notes_panel_toggle" data-toggle="tooltip" title="" data-placement="right"
																			data-original-title="Check out more demos" >
															<span class="bg-secondary h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center  rounded-circle shadow-sm ">
															
																<svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-plus white" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
																  </svg>
															</span>
														
														</a>
														<a href="#" onclick="printDiv()" class="ml-2">
															<span class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
																<svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-printer-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	<path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z"/>
																	<path fill-rule="evenodd" d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
																	<path fill-rule="evenodd" d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
																  </svg>
															</span>
														
														</a>
												<a href="#" class="ml-2" >
													<span class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
														<svg width="15px" height="15px" viewBox="0 0 16 16" class="bi bi-file-earmark-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zM4.5 8a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
														  </svg>
													</span>
												
												</a>
											
											</div>
										</div>
									
									</div>


								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-xl-12">
									<div class="card card-custom gutter-b bg-white border-0" >
										<div class="card-body">
											<div >
												<div class="table-responsive" id="printableTable">
													<table id="orderTable" class="display" style="width:100%">
														<thead>
															<tr>
																<th>Date</th>
																<th>PO Number</th>
																<th>Supplier</th>
																<th>Purchase Status</th>
																<th>Grand Total</th>
																<th>Paid</th>
																<th>Due</th>
																<th>Payment Status</th>
																<th class=" no-sort text-right">Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>2011/04/25</td>
																<td>r-20201102-093644</td>
																<td>David</td>
																<td>	<div class="mr-0 text-success">Recieved
																	</div></td>
																<td>352.00</td>
																<td>0.00</td>
																<td>352.00</td>
																<td><div class="mr-0 text-info">Pending
																	</div></td>
																<td>
																	<div class="card-toolbar text-right">
																		<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<span class="svg-icon">
																				<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																				</svg>
																			</span>
																		</button>
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton8"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																		<a class="dropdown-item" href="purchase-add.html">Edit</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>2011/07/25</td>
																<td>r-20201102-093644</td>
																<td>bakum</td>
																<td>
																	<div class="mr-0 text-success">Recieved
																	</div>
																</td>
																<td>352.00</td>
																<td>0.00</td>
																<td>352.00</td>
																<td><div class="mr-0 text-info">Pending
																	</div></td>
															
														
															
																<td>
																	<div class="card-toolbar text-right">
																		<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton9" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<span class="svg-icon">
																				<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																				</svg>
																			</span>
																		</button>
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton9"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<a class="dropdown-item" href="purchase-add.html">Edit</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
																		</div>
																</td>
															</tr>
															<tr>
																<td>2011/04/25</td>
																<td>r-20201102-093644</td>
																<td>David</td>
																<td>	<div class="mr-0 text-success">Recieved
																	</div></td>
																<td>352.00</td>
																<td>0.00</td>
																<td>352.00</td>
																<td><div class="mr-0 text-info">Pending
																	</div></td>
																<td>
																	<div class="card-toolbar text-right">
																		<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton11" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<span class="svg-icon">
																				<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																				</svg>
																			</span>
																		</button>
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton11"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																		<a class="dropdown-item" href="purchase-add.html">Edit</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td>2011/07/25</td>
																<td>r-20201102-093644</td>
																<td>bakum</td>
																<td>
																	<div class="mr-0 text-success">Recieved
																	</div>
																</td>
																<td>352.00</td>
																<td>0.00</td>
																<td>352.00</td>
																<td><div class="mr-0 text-info">Pending
																	</div></td>
															
														
															
																<td>
																	<div class="card-toolbar text-right">
																		<button class="btn p-0 shadow-none" type="button" id="dropdowneditButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<span class="svg-icon">
																				<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-three-dots text-body" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																					<path fill-rule="evenodd" d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
																				</svg>
																			</span>
																		</button>
																		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdowneditButton7"  style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<a class="dropdown-item" href="purchase-add.html">Edit</a>
																			<a class="dropdown-item confirm-delete" title="Delete" href="#">Delete</a>
																		</div>
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
							</div>
						
						</div>
						
					</div>
					
				</div>
            
                @include('Layouts.footer')
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->


    @include('Layouts.themes')


	<div id="kt_contact_panel" class="offcanvas offcanvas-right kt-color-panel p-5">
		<fieldset class="form-group">
			<form id="myform" novalidate="novalidate">
				<label class="form-label" for="firstname">First Name</label>
				<input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="Name">

			</form>
		</fieldset>
		<fieldset class="form-group">
			<form id="myform1" novalidate="novalidate">
				<label class="form-label" for="lastname">Last Name</label>
				<input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="Name">
			</form>
		</fieldset>
		<fieldset class="form-group">
			<form id="myform2" novalidate="novalidate">
				<label class="form-label" for="email">E-Mail</label>
				<input type="text" class="form-control" id="email" placeholder="Enter Email" name="Name">
			</form>
		</fieldset>
	</div>	

	<iframe name="print_frame" width="0" height="0"  src="about:blank"></iframe>

    @section('js')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script src="./assets/js/plugin.bundle.min.js"></script> -->
    
	<script src="./assets/api/quill/quill.min.js"></script>
	<script src="./assets/api/datatable/jquery.dataTables.min.js"></script>
	
	<script src="./assets/js/sweetalert.js"></script>
	<script src="./assets/js/sweetalert1.js"></script>
	<script>
		var options = {
	  debug: 'info',
	  modules: {
		toolbar: '#toolbar'
	  },
	  placeholder: 'Compose an epic...',
	  readOnly: true,
	  theme: 'snow'
	};
	var editor = new Quill('#editor', options);
	
	
	jQuery(document).ready( function () {
		jQuery('#myTable2').dataTable( {
		
	  
		"pagingType": "simple_numbers",
		"order": [],
		"columnDefs": [ {
		  "targets"  : 'no-sort',
		  "orderable": false,
		}]
	});
	});
	
	jQuery(document).ready(function() {
		jQuery('#orderTable').DataTable({
			"pagingType": "simple_numbers",
	  
		"columnDefs": [ {
		  "targets"  : 'no-sort',
		  "orderable": false,
		}]
		});
	} );
	</script>
    @stop
</body>
<!--end::Body-->


@endsection