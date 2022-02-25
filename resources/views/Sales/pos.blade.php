@extends('Layouts.posMasterpage')
@section('title', 'Dar West')
@section('contents')

<!--begin::Body-->
<body id="tc_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed">

   <header class="pos-header bg-white">
	   <div class="container-fluid">
		   <div class="row align-items-center">
			   <div class="col-xl-4 col-lg-4 col-md-6">
				   <div class="greeting-text">
					<a href="{{URL::to('medicine')}}" class="btn btn-primary white">
                        Back
                    </a>
				   </div>
			
			   </div>
			   <div class="col-xl-4 col-lg-5 col-md-6  clock-main">
				<div class="clock">
				  <div class="datetime-content">
					<ul>
						<li id="hours"></li>
						<li id="point1">:</li>
						<li id="min"></li>
						<li id="point">:</li>
						<li id="sec"></li>
					</ul>
				  </div>
				 <div class="datetime-content">
					<div id="Date"  class=""></div>
				 </div>
				
				</div>
				
			   </div>
			   <div class="col-xl-4 col-lg-3 col-md-12  order-lg-last order-second">

				<div class="topbar justify-content-end">
				 <div class="dropdown mega-dropdown">
					 <div id="id2" class="topbar-item "  data-toggle="dropdown" data-display="static">
						 <div class="btn btn-icon w-auto h-auto btn-clean d-flex align-items-center py-0 mr-3">
						 
							 <span class="symbol symbol-35 symbol-light-success">
								 <span class="symbol-label bg-primary  font-size-h5 ">
								 
									 <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="#fff" class="bi bi-calculator-fill" viewBox="0 0 16 16">
										 <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5zm0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zM7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-1z"/>
									   </svg>
								 </span>
							 </span>
						 </div>
					 </div>
 
					 <div class="dropdown-menu dropdown-menu-right calu" style="min-width: 248px;">
						 <div class="calculator">
							 <div class="input" id="input"></div>
							 <div class="buttons">
							   <div class="operators">
								 <div>+</div>
								 <div>-</div>
								 <div>&times;</div>
								 <div>&divide;</div>
							   </div>
								<div class="d-flex justify-content-between">
								 <div class="leftPanel">
									 <div class="numbers">
									   <div>7</div>
									   <div>8</div>
									   <div>9</div>
									 </div>
									 <div class="numbers">
									   <div>4</div>
									   <div>5</div>
									   <div>6</div>
									 </div>
									 <div class="numbers">
									   <div>1</div>
									   <div>2</div>
									   <div>3</div>
									 </div>
									 <div class="numbers">
									   <div>0</div>
									   <div>.</div>
									   <div id="clear">C</div>
									 </div>
								   </div>
								   <div class="equal" id="result">=</div>
								</div>
							 </div>
						   </div>
					 </div>
 
				 </div>
			 
					<div class="topbar-item folder-data">
					 <div class="btn btn-icon  w-auto h-auto btn-clean d-flex align-items-center py-0 mr-3"  data-toggle="modal" data-target="#folderpop"
					 >
						 <span class="badge badge-pill badge-primary">5</span>
						 <span class="symbol symbol-35  symbol-light-success">
							 <span class="symbol-label bg-warning font-size-h5 ">
								 <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" fill="#ffff"  viewBox="0 0 16 16">
									 <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"></path>
								   </svg>
							 </span>
						 </span>
					 </div>
				 
					</div>
			 
				 <div class="dropdown">
					 <div class="topbar-item" data-toggle="dropdown" data-display="static">
						 <div class="btn btn-icon w-auto h-auto btn-clean d-flex align-items-center py-0">
						 
							 <span class="symbol symbol-35 symbol-light-success">
								 <span class="symbol-label font-size-h5 ">
									 <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										 <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
									 </svg>
								 </span>
							 </span>
						 </div>
					 </div>
 
					 <div class="dropdown-menu dropdown-menu-right" style="min-width: 150px;">
 
 
						 <a href="#" class="dropdown-item">
							 <span class="svg-icon svg-icon-xl svg-icon-primary mr-2">
								 <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power">
									 <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
									 <line x1="12" y1="2" x2="12" y2="12"></line>
								 </svg>
							 </span>
							 Logout
						 </a>
					 </div>
 
				 </div>
				</div>
		 
				</div>
		   </div>
	   </div>
   </header>
   <div class="contentPOS">
	    <div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 order-xl-first order-last">
					<div class="card card-custom gutter-b bg-white border-0">
						<div class="card-body">
							<div class="d-flex justify-content-between colorfull-select">
								<div class="selectmain">
									<select class="arabic-select w-150px bag-primary">
										<option value="1">Category</option>
										<option value="2">Pain Killer</option>
										<option value="2">Ointment</option>
									</select>
								</div>
							
								<div class="selectmain">
									<select class="arabic-select w-150px bag-secondary">
										<option value="1">Type</option>
										<option value="2">Anti Biotic</option>
										<option value="2">Anti Allegy</option>
									</select>
								</div>
							
							</div>
						</div>	
							<div class="product-items">
								<div class="row">
									<div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
										<div class="productCard">
											<div class="productThumb">
												<img class="img-fluid" src="./assets/images/carousel/element-banner2-right.jpg" alt="ix">
											</div>
											<div class="productContent">
												<a href="#">
													Men Polo Shirt (M) -MPS[2545-P]
												</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
										<div class="productCard">
											<div class="productThumb">
												<img class="img-fluid" src="./assets/images/carousel/element-banner2-right.jpg" alt="ix">
											</div>
											<div class="productContent">
												<a href="#">
													Men Polo Shirt (M) -MPS[2545-P]
												</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
										<div class="productCard">
											<div class="productThumb">
												<img class="img-fluid" src="./assets/images/carousel/element-banner2-right.jpg" alt="ix">
											</div>
											<div class="productContent">
												<a href="#">
													Men Polo Shirt (M) -MPS[2545-P]
												</a>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
										<div class="productCard">
											<div class="productThumb">
												<img class="img-fluid" src="./assets/images/carousel/element-banner2-right.jpg" alt="ix">
											</div>
											<div class="productContent">
												<a href="#">
													Men Polo Shirt (M) -MPS[2545-P]
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						
					
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 col-md-8">
				     <div class="">
						<div class="card card-custom gutter-b bg-white border-0 table-contentpos">
							<div class="card-body">
								<div>
									<div class="selectmain">
										<label class="text-dark d-flex">Choose a Customer 
											<span class="badge badge-secondary white rounded-circle"  data-toggle="modal" data-target="#choosecustomer">
											<svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_122" x="0px" y="0px" width="1000px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
												<g>
												<rect x="234.362" y="128" width="43.263" height="256"></rect>
												<rect x="128" y="234.375" width="256" height="43.25"></rect>
												</g>
												</svg>
											</span>
										
										</label>
                        <!--<select class="arabic-select select-down ">-->
										<select class="form-control">
											<option value="1">walk in customer</option>
										</select>
									</div>

								</div>
							</div>	
						</div>

                        {{-- ---new order--- --}}
						<div class="card card-custom gutter-b bg-white border-0 table-contentpos">
							<div class="card-body" >
								<div class="form-group row mb-0">
									<div class="col-md-12">
										<label >Select Medicine</label>
										<fieldset class="form-group mb-0 d-flex barcodeselection">
											<select class="form-control w-25" id="exampleFormControlSelect1">
												<option>By Name</option>
												<option>By Category</option>
												<option>By Type</option>
											  </select>
											<input list="medicine" type="text" class="form-control border-dark" id="basicInput1" placeholder="">
											<datalist id="medicine">
												<option value="Chrome">
												<option value="Firefox">
												<option value="Internet Explorer">
												<option value="Opera">
												<option value="Safari">
												<option value="Microsoft Edge">
											  </datalist>
										</fieldset>
									</div>
								</div>	
							</div>	
								<div class="table-datapos">
									<div class="table-responsive" id="printableTable">
										<table id="orderTable" class="display" style="width:100%">
											<thead>
												<tr>
													<th>Name</th>
													<th>Quantity</th>
													<th>Discount</th>
													<th>Subtotal</th>
													<th class=" text-right no-sort"></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>
														<input type="number" value="10" class="form-control border-dark w-100px" id="basicInput2" placeholder="">
													</td>
													<td>000</td>
													<td>000</td>
													<td>
														<div class="card-toolbar text-right">
														<a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>Tiger Nixon</td>
													<td>
														<input type="number" value="10" class="form-control border-dark w-100px" id="basicInput3" placeholder="">
													</td>
													<td>000</td>
													<td>000</td>
													<td>
														<div class="card-toolbar text-right">
														<a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td>Tiger Nixon</td>
													<td>
														<input type="number" value="10" class="form-control border-dark w-100px" id="basicInput4" placeholder="">
													</td>
													<td>000</td>
													<td>000</td>
													<td>
														<div class="card-toolbar text-right">
														<a href="#" class="confirm-delete" title="Delete"><i class="fas fa-trash-alt"></i></a>
														</div>
													</td>
												</tr>
											
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-body" >
									<div class="form-group row mb-0">
										<div class="col-md-12 btn-submit d-flex justify-content-end">
											<button type="submit" class="btn btn-danger mr-2 confirm-delete" title="Delete">
												<i class="fas fa-trash-alt mr-2"></i>
												Cancel Order
											</button>
											<button type="submit" class="btn btn-secondary white">
												<svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-folder-fill svg-sm mr-2" viewBox="0 0 16 16">
													<path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
												  </svg>
												Draft Order
											</button>
										</div>
									</div>	
								</div>
								
							
						</div>	
					 </div>	
				 </div>
                 {{-- --shopping cart--- --}}
				 <div class="col-xl-3 col-lg-4 col-md-4">
					 <div class="card card-custom gutter-b bg-white border-0">
						<div class="card-body" >
							<div class="shop-profile">
								<div class="media">
									<div class="bg-primary w-100px h-100px d-flex justify-content-center align-items-center">
										<h2 class="mb-0 white">DWP</h2>
									</div>
									<div class="media-body ml-3">
										<h3 class="title font-weight-bold">Dar West Pharmacy</h3>
										<p class="phoonenumber">
											0222807692/0754283124
										</p>
										<p class="adddress">
											Tabata Azimio (Dar West)
										</p>
										<p class="countryname">Tanzania</p>
									</div>
								</div>
							</div>
							<div class="resulttable-pos">
								<table class="table right-table">

									<tbody>
									  <tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
												Total Items
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base">6</td>
										
									  </tr>
									  <tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
												Subtotal
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base" style="padding-bottom: 30px;padding-top: 30px">900/-</td>
										
									  </tr>
									  <tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 ">
											<div class="d-flex align-items-center font-size-h5 mb-0 font-size-bold text-dark">
											Discount
											<span class="badge badge-secondary white rounded-circle ml-2"  data-toggle="modal" data-target="#discountpop">
												<svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_31" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
													<g>
													<rect x="234.362" y="128" width="43.263" height="256"></rect>
													<rect x="128" y="234.375" width="256" height="43.25"></rect>
													</g>
													</svg>
											</span>
										
										</div>
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base">10%</td>
										
									  </tr>
									  {{-- <tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
												Tax
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base">9/-</td>
										
									  </tr> --}}
									 
									  
									  <tr class="d-flex align-items-center justify-content-between item-price">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-primary">
											
												TOTAL
										</th>
										<td class="border-0 justify-content-end d-flex text-primary font-size-base" style="padding-bottom: 30px;padding-top: 30px">81000/-</td>
										
									  </tr>
								
									</tbody>
								  </table>
							 </div>
							 <div class="d-flex justify-content-end align-items-center flex-column buttons-cash" >
								<div style="padding-bottom: 30px;padding-top: 30px"> 
									<a href="#" class="btn btn-primary white mb-2"  data-toggle="modal" data-target="#payment-cashpopup">
										<i class="fas fa-money-bill-wave mr-2"></i>
										Pay With Cash
									</a>
								
								</div>
								<div>
									<a href="#" class="btn btn-outline-secondary " data-toggle="modal" data-target="#payment-otherpopup">
										<i class="fas fa-credit-card mr-2"></i>
										Pay With Card
									</a>
									
								</div>
							 </div>
						</div>	
					 </div>
				 </div>
			</div>
		</div>
   </div>

   {{-- ---- cash payment ----- --}}
<div class="modal fade text-left" id="payment-cashpopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h3 class="modal-title" id="myModalLabel11">Payment</h3>
			<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
			  <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
			  </svg>
			</button>
		  </div>
		  <div class="modal-body">
			<table class="table right-table">
				<tbody>
				  <tr class="d-flex align-items-center justify-content-between">
					<th class="border-0 px-0 font-size-lg mb-0 font-size-bold text-primary">
					
							Total Amount to Pay :
						 
					</th>
					<td class="border-0 justify-content-end d-flex text-primary font-size-lg font-size-bold px-0 font-size-lg mb-0 font-size-bold text-primary">
					
							$722
						
					</td>
				  </tr>
				  <tr class="d-flex align-items-center justify-content-between">
					<th class="border-0 px-0 font-size-lg mb-0 font-size-bold text-primary">
					
							Payment Mode :
						 
					</th>
					<td class="border-0 justify-content-end d-flex text-primary font-size-lg font-size-bold px-0 font-size-lg mb-0 font-size-bold text-primary">
					
						   Cash
					
					</td>
					
				  </tr>
				</tbody>
			</table>	  
			<form>
				<div class="form-group row">
					<div class="col-md-12">
						<label  class="text-body">Received Amount</label>
						<fieldset class="form-group mb-3">
							<input type="text" name="number"  class="form-control"  value="$1000" placeholder="Enter Amount ">
						</fieldset>
						<div class="p-3 bg-light-dark d-flex justify-content-between border-bottom">
							<h5 class="font-size-bold mb-0">Amount to Return :</h5>
							<h5 class="font-size-bold mb-0">-$20</h5>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label  class="text-body">Note (If any)</label>
						<fieldset class="form-label-group ">
							<textarea class="form-control fixed-size" id="horizontalTextarea" rows="5" placeholder="Enter Note"></textarea>
							
						</fieldset>
					</div>
				</div>
				<div class="form-group row justify-content-end mb-0">
					<div class="col-md-6  text-right">
						<a href="#" class="btn btn-primary">Submit</a>
					</div>
				</div>
			</form>
		  </div>
		</div>
	</div>	  	  
</div>

	
   {{-- ---- payment using other payment methods ----- --}}
<div class="modal fade text-left" id="payment-otherpopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h3 class="modal-title" id="myModalLabel11">other Payment</h3>
			<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
			  <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
			  </svg>
			</button>
		  </div>
		  <div class="modal-body">
			<table class="table right-table">
				<tbody>
				  <tr class="d-flex align-items-center justify-content-between">
					<th class="border-0 px-0 font-size-lg mb-0 font-size-bold text-primary">
					
							Total Amount to Pay :
						 
					</th>
					<td class="border-0 justify-content-end d-flex text-primary font-size-lg font-size-bold px-0 font-size-lg mb-0 font-size-bold text-primary">
					
							$722
						
					</td>
				  </tr>
				  <tr class="d-flex align-items-center justify-content-between">
					<th class="border-0 px-0 font-size-lg mb-0 font-size-bold text-primary">
					
							Payment Mode :
						 
					</th>
					<td class="border-0">
					
                        <fieldset class="form-group mb-0" >
                            <select class="form-control w-100">
                                <option>Choose Payment Method</option>
                                <option>Lipa No Tigo</option>
                                <option>Lipa No Mpesa</option>
                              </select>
                            
                        </fieldset>
					
					</td>
					
				  </tr>
				</tbody>
			</table>	  
			<form>
				<div class="form-group row">
					<div class="col-md-12">
						<label  class="text-body">Received Amount</label>
						<fieldset class="form-group mb-3">
							<input type="text" name="number"  class="form-control"  value="$1000" placeholder="Enter Amount ">
						</fieldset>
						<div class="p-3 bg-light-dark d-flex justify-content-between border-bottom">
							<h5 class="font-size-bold mb-0">Amount to Return :</h5>
							<h5 class="font-size-bold mb-0">-$20</h5>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label  class="text-body">Note (If any)</label>
						<fieldset class="form-label-group ">
							<textarea class="form-control fixed-size" id="horizontalTextarea" rows="5" placeholder="Enter Note"></textarea>
							
						</fieldset>
					</div>
				</div>
				<div class="form-group row justify-content-end mb-0">
					<div class="col-md-6  text-right">
						<a href="#" class="btn btn-primary">Submit</a>
					</div>
				</div>
			</form>
		  </div>
		</div>
	</div>	  	  
</div>



{{-- ---add customer ------- --}}
<div class="modal fade text-left" id="choosecustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel13" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg " role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h3 class="modal-title" id="myModalLabel13">Add Customer</h3>
			<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
			  <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
			  </svg>
			</button>
		  </div>
		  <div class="modal-body">
			<form id="myform" method="post" action="#">
                @csrf
                <div class="row">
                    <div class="col-12">

                        <div class="form-group">
                            <label class="text-dark">Name</label>
                            <input type="text" name="name" class="form-control check_customer" id="check_customer_name">
                            <small class="form-text text-muted">please enter Customer Name</small>
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Email</label>
                            <input type="email" name="email" class="form-control check_customer" id="check_customer_email">
                            <small class="form-text text-muted">please enter Email</small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Phone Number</label>
                            <input type="text" name="phone" class="form-control">
                            <small class="form-text text-muted">please enter Phone Number</small>
                        </div>

                        <div class="form-group">
                            <label class="text-dark">Address</label>
                            <input type="text" name="address" class="form-control">
                            <small class="form-text text-muted">please enter address </small>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Region</label>
                            <input type="text" name="region" class="form-control">
                            <small class="form-text text-muted">please enter region </small>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="add_btn_customer">Add Customer</button>
            </form>
		  </div>
		</div>
	</div>	  	  
</div>	


{{-- ----all draft order----- --}}
<div class="modal fade text-left" id="folderpop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel14" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg " role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h3 class="modal-title" id="myModalLabel14">Draft Orders</h3>
			<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
			  <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
			  </svg>
			</button>
		  </div>
		  <div class="modal-body pos-ordermain">
			  <div class="row">
				  <div class="col-lg-4">
					  <div class="pos-order">
						<h3 class="pos-order-title" >Order 1</h3>
						<div class="orderdetail-pos">
							<p>
								<strong>Customer Name</strong>
								Sophia Hale
							</p>
							<p>
								<strong>Address</strong>
								9825 Johnsaon Dr.Columbo,MD21044
							</p>
							<p>
								<strong>Payment Status</strong>
								Pending
							</p>
							<p>
								<strong>Total Items</strong>
								10
							</p>
							<p>
								<strong>Amount to Pay</strong>
								$722
							</p>
						</div>
						<div class="d-flex justify-content-end">
							<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
							<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
						</div>
					  </div>
				  </div>
				  <div class="col-lg-4">
					<div class="pos-order">
					  <h3 class="pos-order-title" >Order 1</h3>
					  <div class="orderdetail-pos">
						  <p>
							  <strong>Customer Name</strong>
							  Sophia Hale
						  </p>
						  <p>
							  <strong>Address</strong>
							  9825 Johnsaon Dr.Columbo,MD21044
						  </p>
						  <p>
							  <strong>Payment Status</strong>
							  Pending
						  </p>
						  <p>
							  <strong>Total Items</strong>
							  10
						  </p>
						  <p>
							  <strong>Amount to Pay</strong>
							  $722
						  </p>
					  </div>
					  <div class="d-flex justify-content-end">
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
					  </div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pos-order">
					  <h3 class="pos-order-title" >Order 1</h3>
					  <div class="orderdetail-pos">
						  <p>
							  <strong>Customer Name</strong>
							  Sophia Hale
						  </p>
						  <p>
							  <strong>Address</strong>
							  9825 Johnsaon Dr.Columbo,MD21044
						  </p>
						  <p>
							  <strong>Payment Status</strong>
							  Pending
						  </p>
						  <p>
							  <strong>Total Items</strong>
							  10
						  </p>
						  <p>
							  <strong>Amount to Pay</strong>
							  $722
						  </p>
					  </div>
					  <div class="d-flex justify-content-end">
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
					  </div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pos-order">
					  <h3 class="pos-order-title">Order 1</h3>
					  <div class="orderdetail-pos">
						  <p>
							  <strong>Customer Name</strong>
							  Sophia Hale
						  </p>
						  <p>
							  <strong>Address</strong>
							  9825 Johnsaon Dr.Columbo,MD21044
						  </p>
						  <p>
							  <strong>Payment Status</strong>
							  Pending
						  </p>
						  <p>
							  <strong>Total Items</strong>
							  10
						  </p>
						  <p>
							  <strong>Amount to Pay</strong>
							  $722
						  </p>
					  </div>
					  <div class="d-flex justify-content-end">
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
					  </div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pos-order">
					  <h3 class="pos-order-title" >Order 1</h3>
					  <div class="orderdetail-pos">
						  <p>
							  <strong>Customer Name</strong>
							  Sophia Hale
						  </p>
						  <p>
							  <strong>Address</strong>
							  9825 Johnsaon Dr.Columbo,MD21044
						  </p>
						  <p>
							  <strong>Payment Status</strong>
							  Pending
						  </p>
						  <p>
							  <strong>Total Items</strong>
							  10
						  </p>
						  <p>
							  <strong>Amount to Pay</strong>
							  $722
						  </p>
					  </div>
					  <div class="d-flex justify-content-end">
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
					  </div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pos-order">
					  <h3 class="pos-order-title" >Order 1</h3>
					  <div class="orderdetail-pos">
						  <p>
							  <strong>Customer Name</strong>
							  Sophia Hale
						  </p>
						  <p>
							  <strong>Address</strong>
							  9825 Johnsaon Dr.Columbo,MD21044
						  </p>
						  <p>
							  <strong>Payment Status</strong>
							  Pending
						  </p>
						  <p>
							  <strong>Total Items</strong>
							  10
						  </p>
						  <p>
							  <strong>Amount to Pay</strong>
							  $722
						  </p>
					  </div>
					  <div class="d-flex justify-content-end">
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
					  </div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="pos-order">
					  <h3 class="pos-order-title" >Order 1</h3>
					  <div class="orderdetail-pos">
						  <p>
							  <strong>Customer Name</strong>
							  Sophia Hale
						  </p>
						  <p>
							  <strong>Address</strong>
							  9825 Johnsaon Dr.Columbo,MD21044
						  </p>
						  <p>
							  <strong>Payment Status</strong>
							  Pending
						  </p>
						  <p>
							  <strong>Total Items</strong>
							  10
						  </p>
						  <p>
							  <strong>Amount to Pay</strong>
							  $722
						  </p>
					  </div>
					  <div class="d-flex justify-content-end">
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
						  <a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
					  </div>
					</div>
				</div>
				  
			  </div>
		  </div>
		  <div class="modal-footer border-0">
			  <div class="row">
				  <div class="col-12">
					<a href="#" class="btn btn-primary">Submit</a>
				  </div>
			  </div>
		  </div>
		</div>
	</div>	  	  
</div>

 {{-- ---- dicount entering----- --}}
<div class="modal fade text-left" id="discountpop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel122" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h3 class="modal-title" id="myModalLabel122">Add Discount</h3>
			<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
			  <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
			  </svg>
			</button>
		  </div>
		  <div class="modal-body">
			  <div class="row">
				  <div class="col-12">
					<label  class="text-body">Discount</label>
					<fieldset class="form-group mb-3 d-flex">
						<input type="text" name="text" class="form-control bg-white"  placeholder="Enter Discount">
						<a href="javascript:void(0)" class="btn-secondary btn ml-2 white pt-1 pb-1 d-flex align-items-center justify-content-center">Apply</a>
					</fieldset>
					<div class="p-3 bg-light-dark d-flex justify-content-between border-bottom">
						<h5 class="font-size-bold mb-0">Discount Applied of:</h5>
						<h5 class="font-size-bold mb-0">$20</h5>
					</div>
				  </div>
			  </div>
		  </div>
		</div>
	</div>	  	  
</div>	

 {{-- ---- shipping payment ----- --}}
{{-- <div class="modal fade text-left" id="shippingcost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1444" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h3 class="modal-title" id="myModalLabel1444">Add Shipping Cost</h3>
			<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
			  <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
			  </svg>
			</button>
		  </div>
		  <div class="modal-body">
			<form>
				<div class="form-group row">
					<div class="col-md-6">
						<label  class="text-body">Customer</label>
						<fieldset class="form-group mb-3">
							<input type="text" name="text"  class="form-control"  placeholder="Enter Customer " value="David Jones" disabled>
						</fieldset>
					</div>
					<div class="col-md-6">
						<label  class="text-body">Shipping Address</label>
						<fieldset class="form-group mb-3">
							<select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
								<option value="AL">928 Johnsaon Dr Columbo,MD 21044</option>
								  
								<option value="WY">933 Johnsaon Dr Columbo,MD 21044</option>
							  </select>
						</fieldset>
					</div>
				
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<label  class="text-body">Shipping Charges</label>
						<fieldset class="form-group mb-3">
							<input type="number" name="text"  class="form-control"  placeholder="Enter Shipping Charges">
						</fieldset>
					</div>
					<div class="col-md-6">
						<label  class="text-body">Shipping Status</label>
						<fieldset class="form-group mb-3">
							<select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
								<option value="AL">Packed</option>
								  
								<option value="WY">Open</option>
							  </select>
						</fieldset>
					</div>
				
				</div>
				<div class="form-group row">
					<div class="col-md-12">
						<label  class="text-body">Shipping Charges</label>
						<fieldset class="form-label-group ">
							<textarea class="form-control fixed-size"  rows="5" placeholder="Textarea"></textarea>
							
						</fieldset>
					</div>
				</div>
				<div class="form-group row justify-content-end mb-0">
					<div class="col-md-6  text-right">
						<a href="#" class="btn btn-primary">Update Order</a>
					</div>
				</div>
			</form>
		  </div>
		</div>
	</div>	  	  
</div>	 --}}

	
    @include('Layouts.themes')

    @section('js')
	<script src="./assets/js/plugin.bundle.min.js"></script>
	<script src="./assets/js/bootstrap.bundle.min.js"></script>
	<script src="http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
	<script src="./assets/js/sweetalert.js"></script>
	<script src="./assets/js/sweetalert1.js"></script>
	<script src="./assets/js/script.bundle.js"></script>
	<script>
		  jQuery(function() {
			jQuery('.arabic-select').multipleSelect({
		  filter: true,
		  filterAcceptOnEnter: true
		})
	  });
	  jQuery(function() {
			jQuery('.js-example-basic-single').multipleSelect({
		  filter: true,
		  filterAcceptOnEnter: true
		})
	  });
	  jQuery(document).ready(function() {
		jQuery('#orderTable').DataTable({
		  
			"info":     false,
			"paging":   false,
			"searching": false,
	  
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