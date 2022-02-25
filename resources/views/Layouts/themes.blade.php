<ul class="sticky-toolbar nav flex-column bg-primary">

    <li class="nav-item" id="kt_demo_panel_toggle" data-toggle="tooltip" title="" data-placement="right" data-original-title="Check out more demos">
        <a class="btn btn-sm btn-icon text-white" href="#">
            <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-gear fa-spin" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"></path>
                <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"></path>
            </svg>
        </a>
    </li>
</ul>
    
    <div id="kt_color_panel" class="offcanvas offcanvas-right kt-color-panel p-5">
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-3">
            <h4 class="font-size-h4 font-weight-bold m-0">Theme Config
            </h4>
            <a href="#" class="btn btn-sm btn-icon btn-light btn-hover-primary" id="kt_color_panel_close">
                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </a>
        </div>
        <hr>
        <div class="offcanvas-content">
            <!-- Theme options starts -->
            <div id="customizer-theme-layout" class="customizer-theme-layout">

                <h5 class="mt-1">Theme Layout</h5>
                <div class="theme-layout">
                    <div class="d-flex justify-content-start">
                        <div class="my-3">
                            <div class="btn-group btn-group-toggle">
                                <label class="btn btn-primary p-2 active">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-light" checked="">
                                    Light
                                </label>
                                <label class="btn btn-primary p-2">
                                    <input type="radio" name="layoutOptions" value="false" id="radio-dark"> Dark
                                </label>

                            </div>

                        </div>

                    </div>
                </div>
                <hr>
                <h5 class="mt-1">RTL Layout</h5>
                <div class="rtl-layout">
                    <div class="d-flex justify-content-start">
                        <div class="my-3 btn-rtl">
                            <div class="toggle">
                                <span class="circle"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <!-- Theme options starts -->
            <div id="customizer-theme-colors" class="customizer-theme-colors">
                <h5>Theme Colors</h5>
                <ul class="list-inline unstyled-list d-flex">
                    <li class="color-box mr-2">
                        <div id="color-theme-default" class="d-flex rounded w-20px h-20px" style="background-color: #ae69f5d9;">
                        </div>
                    </li>
                    <li class="color-box mr-2">
                        <div id="color-theme-blue" class="d-flex rounded w-20px h-20px" style="background-color: blue;">
                        </div>
                    </li>
                    <li class="color-box mr-2">
                        <div id="color-theme-red" class="d-flex rounded w-20px h-20px" style="background-color: red;">
                        </div>
                    </li>
                    <li class="color-box mr-2">
                        <div id="color-theme-green" class="d-flex rounded w-20px h-20px" style="background-color: green;">
                        </div>
                    </li>
                    <li class="color-box mr-2">
                        <div id="color-theme-yellow" class="d-flex rounded w-20px h-20px" style="background-color: #ffc107;">
                        </div>
                    </li>
                    <li class="color-box mr-2">
                        <div id="color-theme-navy-blue" class="d-flex rounded w-20px h-20px" style="background-color: #000080;">
                        </div>
                    </li>

                </ul>
                <hr>
            </div>


        </div>
    </div>	