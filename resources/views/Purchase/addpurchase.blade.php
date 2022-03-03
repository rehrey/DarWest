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

                                                    <svg width="24px" height="24px" viewBox="0 0 16 16"
                                                        class="bi bi-list" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
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
                                        <li class="breadcrumb-item active" aria-current="page">Add Purchase</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!--end::Subheader-->
                        <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="container-fluid addproduct-main">

                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="card card-custom gutter-b bg-transparent shadow-none border-0">
                                            <div class="card-header align-items-center   border-bottom-dark px-0">
                                                <div class="card-title mb-0">
                                                    <h3 class="card-label mb-0 font-weight-bold text-body">Add Purchase
                                                    </h3>
                                                </div>
                                                <div class="icons d-flex">
                                                    {{-- <a href="#">
                                                        <span
                                                            class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
                                                            <svg width="15px" height="15px" viewBox="0 0 16 16"
                                                                class="bi bi-printer-fill" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                                            </svg>
                                                        </span>

                                                    </a> --}}

                                                    {{-- <a href="#" class="ml-2">
                                                        <span
                                                            class="icon  h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
                                                            <svg width="15px" height="15px" viewBox="0 0 16 16"
                                                                class="bi bi-file-earmark-text-fill" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zM4.5 8a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                                                            </svg>
                                                        </span>

                                                    </a> --}}

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="card card-custom gutter-b bg-white border-0">
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-group row">
                                                
                                                        <div class="col-md-6">
                                                            <label class="text-body">Select Supplier</label>
                                                            <fieldset class="form-group mb-3">
                                                                <select
                                                                    class="js-example-basic-single js-states form-control bg-transparent"
                                                                    name="supplier">
                                                                   @foreach ($suppliers as $supplier)
                                                                   <option >{{ $supplier->name }}</option>                                                                       
                                                                   @endforeach

                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="text-body">Purchase Status</label>
                                                            <fieldset class="form-group mb-3">
                                                                <select
                                                                    class="js-example-basic-single js-states form-control bg-transparent"
                                                                    name="status">
                                                                    <option value="WY">Received</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="text-body">Payment Method</label>
                                                            <fieldset class="form-group mb-3">
                                                                <select
                                                                    class="js-example-basic-single js-states form-control bg-transparent"
                                                                    name="payment_method">
                                                                    @foreach ( $paymentmethods as $paymentmethod)
                                                                   
                                                                    <option>{{ $paymentmethod->name }}</option>

                                                                    @endforeach
                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="text-body">Attach Document</label>
                                                            <fieldset class="form-group mb-3 border-dark rounded p-1">
                                                                <input type="file" class="d-block w-100" id="img"
                                                                    name="img" accept="image/*">
                                                            </fieldset>
                                                        </div>
                                                        

                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="card card-custom gutter-b bg-white border-0">
                                            <div class="card-body overflow-hidden">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="text-body">Select Medicine</label>
                                                        <fieldset class="form-group mb-3 d-flex">
                                       
                                                            <select
                                                                    class="js-example-basic-single js-states form-control bg-transparent medicine_id"
                                                                    name="status">
                                                                    @foreach ( $medicines as $medicine)
                                                                   
                                                                    <option value="{{ $medicine->id }}">{{ $medicine->name }}</option>
        
                                                                    @endforeach
                                                                </select>

                                                            <button class="btn-secondary btn ml-2 white pt-1 pb-1 d-flex align-items-center justify-content-center med_purchase">ADD</button>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped  text-body">
                                                                <thead>
                                                                    <tr class="">
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            Name</th>
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            Batch Number</th>
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            Expiry Date</th>
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            Stock </th>
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            Box Size</th>
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            Box Quantity</th>
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            Buy Price</th>
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            Sale Price</th>
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            Subtotal</th>
                                                                        <th class="border-0  header-heading text-right"
                                                                            scope="col">Clear</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody class="purchaseArray">
                                                                    {{-- <tr class="">

                                                                        <td class="" name="medicine">Mackbook</td>
                                                                        <td class=" text-center">
                                                                            <input type="number" class="form-control"
                    
                                                                                placeholder="Batch ID" value="0" name="batch_no">
                                                                        </td>
                                                                        <td class=" text-center">
                                                                            <input type="date" name="date" class="form-control datepicker mb-3" name="batch_no">
                                                                        </td>
                                                                        <td class=" ">
                                                                            300
                                                                        </td>
                                                                        <td class=" text-center">
                                                                            <input type="number" class="form-control"
                                                                                id="basicInput1"
                                                                                placeholder="Enter Buying price" value="100" name="box_size">
                                                                        </td>
                                                                        <td class=" text-center">
                                                                            <input type="number" class="form-control"
                                                                                id="basicInput1"
                                                                                placeholder="Enter Buying price" value="2" name="box_qty">
                                                                        </td>
                                                                        <td class="  text-center">
                                                                            <input type="text" class="form-control"
                                                                                id="basicInput3"
                                                                                placeholder="Enter Purchased Quantity" value="200" name="buy_price">
                                                                        </td>
                                                                        <td class="">192.00</td>
                                                                        <td class="" name="subtotal_price">192.00</td>
                                                                        <td class="text-right">
                                                                            <a href="#" class="confirm-delete"
                                                                                title="Delete">
                                                                                <i class="fas fa-trash-alt"></i>
                                                                            </a>
                                                                        </td>

                                                                    </tr> --}}
                                                                    
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr class="">
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            Total</th>
                                                                        
                                                                        <th class="border-0  header-heading" scope="col">
                                                                        </th> 
                                                                        <th class="border-0  header-heading" scope="col">
                                                                        </th> 
                                                                        <th class="border-0  header-heading" scope="col">
                                                                        </th> 
                                                                        <th class="border-0  header-heading" scope="col">
                                                                        </th>
                                                                        <th class="border-0  header-heading" scope="col">25.04
                                                                        </th>
                                                                        
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            256.04</th>
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            192.0</th>
                                                                        <th class="border-0  header-heading" scope="col">
                                                                            192.0</th>
                                                                        <th class="border-0  header-heading text-right"
                                                                            scope="col">
                                                                        </th>

                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="card card-custom gutter-b bg-white border-0">
                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <label class="text-body">Note</label>
                                                        <div id="editor" class="bg-transparent text-dark">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-12 col-md-3">
                                                        <div>
                                                            <table class="table right-table mb-0">

                                                                <tbody>
                                                                    <tr
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <th
                                                                            class="border-0 font-size-h5 mb-0 font-size-bold text-dark">

                                                                            Subtotal

                                                                        </th>
                                                                        <td
                                                                            class="border-0 justify-content-end d-flex text-black-50 font-size-base">
                                                                            $750</td>

                                                                    </tr>
                                                                    <tr
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <th
                                                                            class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                                                            Paid 
                                                                        </th>
                                                                        <td
                                                                            class="border-0 justify-content-end d-flex text-black-50 font-size-base">
                                                                            <input type="text" name="text" class="form-control bg-white"  placeholder="Enter Paid Amount">
                                                                        </td>

                                                                    </tr>
                                                                    <tr
                                                                        class="d-flex align-items-center justify-content-between item-price">
                                                                        <th
                                                                            class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                                                            Due
                                                                        </th>
                                                                        <td
                                                                            class="border-0 justify-content-end d-flex text-dark font-size-base">
                                                                            $8100</td>
                                                                    </tr>
                                                                    <tr
                                                                        class="d-flex align-items-center justify-content-between item-price">
                                                                        <th
                                                                            class="border-0 font-size-h5 mb-0 font-size-bold text-dark">
                                                                            <a type="submit" class="btn-secondary btn ml-2 white pt-1 pb-1">Submit</a>
                                                                        </th>
                                                                        <td
                                                                            class="border-0 justify-content-end d-flex text-dark font-size-base">
                                                                            <a type="reset" class="btn-secondary btn ml-2 white pt-1 pb-1">Cancel</a>
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

                    </div>


                    @include('Layouts.footer')


                    @include('Layouts.themes')
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->


                    <div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">


                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                @section('js')


                    <script src="./assets/js/slick.min.js"></script>
                    <script src="./assets/api/editor/classic.ckeditor.js"></script>
                    <script src="./assets/api/editor/inline.ckeditor.js"></script>
                    <script src="./assets/api/editor/classic.ckeditor.js"></script>

                    <script src="./assets/api/dropzone/dropzone.js"></script>
                    <script  src="./assets/api/daterange-picker/moment.min.js"></script>
                    <script  src="./assets/api/daterange-picker/daterangepicker.min.js"></script>


                    <script src="./assets/api/select2/select2.min.js"></script>
                    <script src="./assets/api/multiple-select/multiple-select.min.js"></script>
                    <script src="./assets/js/sweetalert.js"></script>
                    <script src="./assets/js/sweetalert1.js"></script>
                    <script src="./assets/js/script-slick.js"></script>

                    <script>
                        jQuery(document).ready(function() {
                            jQuery('.js-example-basic-single').select2();
                        });
                        jQuery('.addproduct-js').slick('refresh');
                        jQuery(document).ready(function() {
                            jQuery('.js-Select').select2();
                        });
                        jQuery('.addproduct-js').slick('refresh');
                        jQuery(document).ready(function() {
                            jQuery('.js-example-basic-single').select2();

                        });
                        jQuery(document).ready(function() {
                            jQuery('.js-example-basic-multiple').select2();
                        });
                        jQuery(document).ready(function() {
                            jQuery('.js-size-multiple').select2();
                        });



                        jQuery(document).ready(function() {
                            jQuery('#myTable').DataTable();
                        });

                        jQuery(function() {
                            jQuery('.single-select').multipleSelect({
                                filter: true,
                                filterAcceptOnEnter: true
                            })
                        });
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .then(editor => {
                                console.log(editor);
                            })
                            .catch(error => {
                                console.error(error);
                            });
// In your Javascript (external .js resource or <script> tag)
    
		
    jQuery(document).ready(function() {
				jQuery('.js-example-basic-single').select2();
			});
			jQuery(document).ready(function() {
				jQuery('.js-example-basic-multiple').select2();
			});
			jQuery(function() {
				jQuery('input[name="daterange"]').daterangepicker({
					opens: 'left'
				}, function(start, end, label) {
					console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
				});
			});
			jQuery(function() {
				jQuery('input[name="birthday"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1901,
			maxYear: parseInt(moment().format('YYYY'),10)
		  }, 
		  function(start, end, label) {
			var years = moment().diff(start, 'years');
			
		  });
		});
		jQuery(function() {
			jQuery('input[name="daterange"]').daterangepicker({
			opens: 'left'
		  }, function(start, end, label) {
			console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
		  });
		});
		
		jQuery(function() {
			jQuery('input[name="datetimes"]').daterangepicker({
			timePicker: true,
			startDate: moment().startOf('hour'),
			endDate: moment().startOf('hour').add(32, 'hour'),
			locale: {
			  format: 'M/DD hh:mm A'
			}
		  });
		});
		
		
		jQuery(function() {
		
		var start = moment().subtract(29, 'days');
		var end = moment();
		
		function cb(start, end) {
			jQuery('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		}
		
		jQuery('#reportrange').daterangepicker({
			startDate: start,
			endDate: end,
			ranges: {
			   'Today': [moment(), moment()],
			   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
			   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			   'This Month': [moment().startOf('month'), moment().endOf('month')],
			   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			}
		}, cb);
		
		cb(start, end);
		
		});
		jQuery(function() {
		
			jQuery('input[name="datefilter"]').daterangepicker({
			autoUpdateInput: false,
			locale: {
				cancelLabel: 'Clear'
			}
		});
		
		jQuery('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
			jQuery(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
		});
		
		jQuery('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
			jQuery(this).val('');
		});
		
		});



// $(document).ready(function () {
    $(document).on('change','.medicine_id',function(){
        var medicine_id=$(this).val();

        
            $(".med_purchase").click(function () {

                

                console.log('shinanoganz1');   
        $.ajax({
        type:'get', //request type "Get" or "Post"
        url:'{!! URL::to('fetch_saleprice') !!}', //URL to load the data
        data:{'id':medicine_id,
                'name':}, //Id of trigger drop down menu Imooo
        success:function(data){
            var medicine=data;
            console.log(medicine);
            if(medicine.length==0){ //if check if data variable is empty
                op+='';
            }
            else{
            //    var op = '<tr class=""> '+
            //     '<td class="" name="medicine">Mackbook</td> '+
            //     '<td class="" name="medicine">Mackbook</td> '+
            //     '<td class="" name="medicine">Mackbook</td> '+
            //     '<td class="" name="medicine">Mackbook</td> '+
            //     '<td class="" name="medicine">Mackbook</td> '+
            //     '<td class="" name="medicine">Mackbook</td> '+
            //     '<td class="" name="medicine">Mackbook</td> '+
            //     '<td class="" name="medicine">Mackbook</td> '+
            //     '<td class="" name="medicine">Mackbook</td> '+
            //     '<td class="" name="medicine">Mackbook</td> '+
            //     '</tr>';
            for(var i=0;i<medicine.length;i++) {
                var op='<tr class=""> <td class="" name="medicine">' + medicine[i].name +'</td> '+
                '<td class=" text-center"><input type="number" class="form-control" placeholder="Batch ID" value="0" name="batch_no"> </td> '+
                '<td class=" text-center"> <input type="date" name="date" class="form-control datepicker mb-3" name="batch_no"></td> '+
                '<td class=" "> 0 </td> <td class=" text-center"> <input type="number" class="form-control" id="basicInput1" placeholder="Enter Buying price" value="100" name="box_size"> </td> '+
                '<td class=" text-center">  <input type="number" class="form-control" id="basicInput1" placeholder="Enter Buying price" value="2" name="box_qty"> '+
                '</td> <td class="  text-center"> <input type="text" class="form-control"  id="basicInput3" placeholder="Enter Purchased Quantity" value="200" name="buy_price"> </td> '+
                '<td class="">192.00</td> <td class="" name="subtotal_price">192.00</td> '+
                '<td class="text-right"> <a href="#" class="confirm-delete" title="Delete"> <i class="fas fa-trash-alt"></i> </a> </td> '+
                '</tr>';
                }
            // $('.purchaseArray').html(" ");
            $('.purchaseArray').append(op);
            console.log('shinanoganz2');  
                }
        },
        error:function(){

        },
            });
       
    });
     


                                </script>
                @stop
</body>
<!--end::Body-->



@endsection
