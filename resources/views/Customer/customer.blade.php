@extends('Layouts.Masterpage')
@section('title', 'Dar West')

@section('contents')


<body id="tc_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled           aside-fixed">


        @include('Layouts.mobheader')

        {{-- @include('Layouts.otherheader') --}}

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
                        @include('Layouts.sidemenu')
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
                            @include('Layouts.topmenu')
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
                                        <li class="breadcrumb-item " aria-current="page">People</li>
                                        <li class="breadcrumb-item active" aria-current="page">Customer</li>
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
                                            <div class="col-lg-12 col-xl-12">
                                                <div class="card card-custom gutter-b bg-transparent shadow-none border-0">
                                                    <div class="card-header align-items-center  border-bottom-dark px-0">
                                                        <div class="card-title mb-0">
                                                            <h3 class="card-label mb-0 font-weight-bold text-body">Customer
                                                            </h3>
                                                        </div>
                                                        <div class="icons d-flex">
                                                            {{-- ----Add button------- --}}
                                                            <button class="btn ml-2 p-0" id="kt_notes_panel_toggle"
                                                                data-toggle="tooltip" title="" data-placement="right"
                                                                data-original-title="Check out more demos">
                                                                <span
                                                                    class="bg-secondary h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center  rounded-circle shadow-sm ">

                                                                    <svg width="25px" height="25px" viewBox="0 0 16 16"
                                                                        class="bi bi-plus white" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                                    </svg>
                                                                </span>

                                                            </button>
                                                            {{-- -----print button------ --}}
                                                            <a href="#" onclick="printDiv()" class="ml-2">
                                                                <span
                                                                    class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
                                                                    <svg width="15px" height="15px" viewBox="0 0 16 16"
                                                                        class="bi bi-printer-fill" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z" />
                                                                        <path fill-rule="evenodd"
                                                                            d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                                                        <path fill-rule="evenodd"
                                                                            d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                                                    </svg>
                                                                </span>

                                                            </a>
                                                            {{-- ------export button------ --}}
                                                            <a href="#" class="ml-2">
                                                                <span
                                                                    class="icon h-30px font-size-h5 w-30px d-flex align-items-center justify-content-center rounded-circle ">
                                                                    <svg width="15px" height="15px" viewBox="0 0 16 16"
                                                                        class="bi bi-file-earmark-text-fill"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zM4.5 8a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                </span>

                                                            </a>

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 ">
                                                @include('Layouts.Alerts')

                                                <div class="card card-custom gutter-b bg-white border-0">
                                                    <div class="card-body">
                                                        <div>
                                                            <div class=" table-responsive" id="printableTable">
                                                                <table id="productUnitTable" class="display ">

                                                                    <thead class="text-body">
                                                                        <tr>
                                                                            <th class="">Name</th>
                                                                            <th class="">Email</th>
                                                                            <th class="">Phone Number</th>
                                                                            <th class="">Address</th>
                                                                            <th class="">Region</th>
                                                                            <th class="" hidden>id</th>
                                                                            <th class="no-sort text-right">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="kt-table-tbody text-dark">
                                                                        @foreach ($customers as $customer)
                                                                            <tr class="kt-table-row kt-table-row-level-0">


                                                                                <td>{{ $customer->name }}</td>

                                                                                <td class="">
                                                                                    {{ $customer->email }}
                                                                                </td>

                                                                                <td class="">
                                                                                    {{ $customer->phone }}</td>
                                                                                <td class="">
                                                                                    {{ $customer->address }}</td>
                                                                                <td class="">
                                                                                    {{ $customer->region }}</td>
                                                                                <td hidden>{{ $customer->id }}</td>
                                                                                <td>
                                                                                    <div class="card-toolbar text-right">
                                                                                        <button class="btn p-0 shadow-none"
                                                                                            type="button"
                                                                                            id="dropdowneditButton"
                                                                                            data-toggle="dropdown"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false">
                                                                                            <span class="svg-icon">
                                                                                                <svg width="20px"
                                                                                                    height="20px"
                                                                                                    viewBox="0 0 16 16"
                                                                                                    class="bi bi-three-dots text-body"
                                                                                                    fill="currentColor"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        fill-rule="evenodd"
                                                                                                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </span>
                                                                                        </button>
                                                                                        <div class="dropdown-menu dropdown-menu-right"
                                                                                            aria-labelledby="dropdowneditButton"
                                                                                            style="position: absolute; transform: translate3d(1001px, 111px, 0px); top: 0px; left: 0px; will-change: transform;">

                                                                                            {{-- ----edit button--------- --}}
                                                                                            <a class="dropdown-item"
                                                                                                data-toggle="modal"
                                                                                                data-target="#edit_customer{{ $customer->id }}">Edit</a>

                                                                                            {{-- ----delete button--------- --}}
                                                                                            <a class="dropdown-item"
                                                                                            data-toggle="modal"
                                                                                            data-target="#delete_customer{{ $customer->id }}"
                                                                                                title="Delete"
                                                                                                >Delete</a>
                                                                                        </div>
                                                                                    </div>

                                                                            {{-- ----edit customer form-------- --}}

                                                                                    <div class="modal fade"
                                                                                        id="edit_customer{{ $customer->id }}"
                                                                                        tabindex="-1" role="dialog"
                                                                                        aria-labelledby="exampleModalScrollableTitle"
                                                                                        aria-hidden="true">
                                                                                        <div class="modal-dialog modal-dialog-scrollable"
                                                                                            role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h5 class="modal-title"
                                                                                                        id="exampleModalScrollableTitle">
                                                                                                        Edit Customer</h5>
                                                                                                    <button type="button"
                                                                                                        class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0"
                                                                                                        data-dismiss="modal"
                                                                                                        aria-label="Close">
                                                                                                        <svg width="20px"
                                                                                                            height="20px"
                                                                                                            viewBox="0 0 16 16"
                                                                                                            class="bi bi-x"
                                                                                                            fill="currentColor"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                                                                            </path>
                                                                                                        </svg>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <form id="myform"
                                                                                                        method="POST"
                                                                                                        action="{{ URL::to('upd_customer') }}">
                                                                                                        @csrf
                                                                                                        <div
                                                                                                            class="row">
                                                                                                            <div
                                                                                                                class="col-12">
                                                                                                                <input
                                                                                                                    type="text"
                                                                                                                    value="{{ \base64_encode($customer->id) }}"
                                                                                                                    hidden
                                                                                                                    name="id" />
                                                                                                                <div
                                                                                                                    class="form-group">
                                                                                                                    <label
                                                                                                                        class="text-dark">Name</label>
                                                                                                                    <input
                                                                                                                        type="text"
                                                                                                                        name="name"
                                                                                                                        class="form-control"
                                                                                                                        value="{{ $customer->name }}">
                                                                                                                    <small
                                                                                                                        class="form-text text-muted">please
                                                                                                                        enter
                                                                                                                        Customer
                                                                                                                        Name</small>
                                                                                                                </div>

                                                                                                                <div
                                                                                                                    class="form-group">
                                                                                                                    <label
                                                                                                                        class="text-dark">Email</label>
                                                                                                                    <input
                                                                                                                        type="email"
                                                                                                                        name="email"
                                                                                                                        class="form-control"
                                                                                                                        value="{{ $customer->email }}">
                                                                                                                    <small
                                                                                                                        class="form-text text-muted">please
                                                                                                                        enter
                                                                                                                        Email</small>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="form-group">
                                                                                                                    <label
                                                                                                                        class="text-dark">Phone
                                                                                                                        Number</label>
                                                                                                                    <input
                                                                                                                        type="text"
                                                                                                                        name="phone"
                                                                                                                        class="form-control"
                                                                                                                        value="{{ $customer->phone }}">
                                                                                                                    <small
                                                                                                                        class="form-text text-muted">please
                                                                                                                        enter
                                                                                                                        Phone
                                                                                                                        Number</small>
                                                                                                                </div>

                                                                                                                <div
                                                                                                                    class="form-group">
                                                                                                                    <label
                                                                                                                        class="text-dark">Address</label>
                                                                                                                    <input
                                                                                                                        type="text"
                                                                                                                        name="address"
                                                                                                                        class="form-control"
                                                                                                                        value="{{ $customer->address }}">
                                                                                                                    <small
                                                                                                                        class="form-text text-muted">please
                                                                                                                        enter
                                                                                                                        address
                                                                                                                    </small>
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="form-group">
                                                                                                                    <label
                                                                                                                        class="text-dark">Region</label>
                                                                                                                    <input
                                                                                                                        type="text"
                                                                                                                        name="region"
                                                                                                                        class="form-control"
                                                                                                                        value="{{ $customer->region }}">
                                                                                                                    <small
                                                                                                                        class="form-text text-muted">please
                                                                                                                        enter
                                                                                                                        region
                                                                                                                    </small>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <button
                                                                                                            type="submit"
                                                                                                            class="btn btn-primary">Submit</button>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                     {{-- ----delete customer form-------- --}}

                                                                                    <div class="modal fade"
                                                                                     id="delete_customer{{ $customer->id }}"
                                                                                     tabindex="-1" role="dialog"
                                                                                     aria-labelledby="exampleModalScrollableTitle"
                                                                                     aria-hidden="true">
                                                                                     <div class="modal-dialog modal-dialog-scrollable"
                                                                                         role="document">
                                                                                         <div class="modal-content">
                                                                                             <div class="modal-header">
                                                                                                 <h5 class="modal-title"
                                                                                                     id="exampleModalScrollableTitle">
                                                                                                     Delete Customer</h5>
                                                                                                 <button type="button"
                                                                                                     class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0"
                                                                                                     data-dismiss="modal"
                                                                                                     aria-label="Close">
                                                                                                     <svg width="20px"
                                                                                                         height="20px"
                                                                                                         viewBox="0 0 16 16"
                                                                                                         class="bi bi-x"
                                                                                                         fill="currentColor"
                                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                                         <path
                                                                                                             fill-rule="evenodd"
                                                                                                             d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                                                                         </path>
                                                                                                     </svg>
                                                                                                 </button>
                                                                                             </div>
                                                                                             <div class="modal-body">
                                                                                                 <form id="myform"
                                                                                                     method="POST"
                                                                                                     action="{{ URL::to('upd_customer') }}">
                                                                                                     @csrf
                                                                                                     <div
                                                                                                         class="row">
                                                                                                         <div
                                                                                                             class="col-12">
                                                                                                             <input
                                                                                                                 type="text"
                                                                                                                 value="{{ \base64_encode($customer->id) }}"
                                                                                                                 hidden
                                                                                                                 name="id" />
                                                                                                             <div>
                                                                                                                 <div>
                                                                                                                 <h5 >Are You sure you want to delete Customer {{ $customer->name }}?
                                                                                                                </h5>
                                                                                                                </div>
                                                                                                             </div>

                                                                                                         </div>
                                                                                                     </div>
                                                                                                     <div class="modal-footer">
                                                                                                        
                                                                                                        <a href="{{ URL::to('del_customer',['id'=>\base64_encode($customer->id)]) }}"  class="btn btn-primary">Delete</a>
                                                                                                        
                                                                                                    </div>
                                                                                                 </form>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                        @endforeach
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

                    </div>


                    @include('Layouts.footer')
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>


        </td>

        </tr>
    
        <!--end::Main-->
        
        @include('Layouts.themes')


        {{-- ----add customer form-------- --}}
        <div id="kt_notes_panel" class="offcanvas offcanvas-right kt-color-panel p-5">

            <span id="check_customer_span" style="color:red"></span>

            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-3">
                <h4 class="font-size-h4 font-weight-bold m-0">Add Customer
                </h4>
                <a href="#" class="btn btn-sm btn-icon btn-light btn-hover-primary" id="kt_notes_panel_close">
                    <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                        </path>
                    </svg>
                </a>
            </div>


            <form id="myform" method="post" action="{{ URL::to('add_customer') }}">
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

        <iframe name="print_frame" width="0" height="0" src="about:blank"></iframe>



    @section('js')
        <script src="./assets/api/multiple-select/multiple-select.min.js"></script>
        <script src="./assets/js/sweetalert.js"></script>
        <script src="./assets/js/sweetalert1.js"></script>
        <script src="./assets/js/script.bundle.js"></script>
        <script>
            jQuery(function() {
                jQuery('.english-select').multipleSelect({
                    filter: true,
                    filterAcceptOnEnter: true
                })
            });
            jQuery(function() {
                jQuery('.arabic-select').multipleSelect({
                    filter: true,
                    filterAcceptOnEnter: true
                })
            });
            jQuery(document).ready(function() {
                jQuery('#productUnitTable').dataTable({
                    "pagingType": "simple_numbers",

                    "columnDefs": [{
                        "targets": 'no-sort',
                        "orderable": false,
                    }]
                });
            });

             // my sample ajax for checking if record exist
    $(document).on('keyup','.check_customer',function()
    {
            // var supplier_name=$(this).val();
            var customer_name=document.getElementById('check_customer_name').value;
            var customer_email=document.getElementById('check_customer_email').value;
            // Ajax to load pump price
            console.log(customer_email);
            console.log(customer_name);
            $.ajax({type:'get', url:'{!! URL::to('check_customer') !!}', //URL to load the data
                data:{
                    'name': customer_name,
                    'email':customer_email,
                }, 
                //processData: false,//contentType: false,
                success:function(data){
                    console.log(data);
                    if(data>=1){
                        var span_sms=document.getElementById('check_customer_span');
                        span_sms.innerHTML="* Customer already exist!";
                        document.getElementById("add_btn_customer").disabled = true;
                    }
                    else{
                        var span_sms=document.getElementById('check_customer_span');
                        span_sms.innerHTML=" ";
                        document.getElementById("add_btn_customer").disabled = false;
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
