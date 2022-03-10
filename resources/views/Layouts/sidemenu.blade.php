                     <!--begin::Aside Menu-->
                     <div class="aside-menu-wrapper flex-column-fluid overflow-auto h-100" id="tc_aside_menu_wrapper">
                        <!--begin::Menu Container-->
                        <div id="tc_aside_menu" class="aside-menu  mb-5" data-menu-vertical="1" data-menu-scroll="1"
                            data-menu-dropdown-timeout="500">
                            <!--begin::Menu Nav-->
                            <div id="accordion">
                                <ul class="nav flex-column">
                                    <li class="nav-item active" class="onclick">
                                        <a href="{{URL::to('dashboard')}}" class="nav-link">
                                            <span class="svg-icon nav-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                </svg>
                                            </span>
                                            <span class="nav-text">
                                                Dashboard
                                            </span>
                                        </a>
        
        
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse"  href="javascript:void(0)" data-target="#catalog" role="button"
                                        aria-expanded="false" aria-controls="catalog">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-boxes font-size-h4"></i>
                                            </span>
                                            <span class="nav-text">Medicine Catalog</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse" id="catalog" data-parent="#accordion">
                                            <div id="accordion1">
                                                <ul class="nav flex-column">
                                                    
                                                    <li class="nav-item">
                                                        <a href="product-barcode.html" class="nav-link sub-nav-link">
                                                            <span class="svg-icon nav-icon d-flex justify-content-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                  </svg>
                                                            </span>
                                                            <span class="nav-text">Medicine Bar code Label</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{URL::to('category')}}" class="nav-link sub-nav-link">
                                                            <span class="svg-icon nav-icon d-flex justify-content-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                  </svg>
                                                            </span>
                                                            <span class="nav-text">Medicine Category</span>
                                                        </a>
                                                    </li>
            
                                                    <li class="nav-item">
                                                        <a href="{{URL::to('type')}}" class="nav-link sub-nav-link">
                                                            <span class="svg-icon nav-icon d-flex justify-content-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                  </svg>
                                                            </span>
                                                            <span class="nav-text">Medicine Type</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{URL::to('unit')}}" class="nav-link sub-nav-link">
                                                            <span class="svg-icon nav-icon d-flex justify-content-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                  </svg>
                                                            </span>
                                                            <span class="nav-text">Medicine Unit</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a  class="nav-link sub-nav-link" data-toggle="collapse" href="#catalogProduct" role="button"
                                                        aria-expanded="false" aria-controls="catalogProduct">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                            <span class="nav-text">Medicine Management</span>
                                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                                        </a>
                                                        <div class="collapse nav-collapse" id="catalogProduct" data-parent="#accordion1">
                                                            <ul class="nav flex-column">
                                                                
                                                                <li class="nav-item">
                                                                    <a href="{{URL::to('medicine')}}" class="nav-link mini-sub-nav-link">
                                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                              </svg>
                                                                        </span>
                                                                        <span class="nav-text">Add Medicine</span>
                                                                    </a>
                                                                </li>
                        
                                                            
                                                            </ul>
                                                        </div>	
                                                    </li>
                                                
                                                   
                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                   

                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse" href="#catalogstock" role="button"
                                        aria-expanded="false" aria-controls="catalogstock">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-chart-line font-size-h4"></i>
                                            </span>
                                            <span class="nav-text">Product Stock</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse" id="catalogstock"  data-parent="#accordion">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="#"  class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Add Stock</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#"  class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Stock Transfer</span>
                                                    </a>
                                                </li>
                                            
                                            
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse" href="#catalogPurchase" role="button"
                                        aria-expanded="false" aria-controls="catalogPurchase">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-money-check-alt font-size-h4"></i>
                                            </span>
                                            <span class="nav-text">Purchase</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse" id="catalogPurchase"  data-parent="#accordion">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="{{URL::to('purchaselist')}}"  class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">List</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{URL::to('purchase')}}"  class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Add Purchase</span>
                                                    </a>
                                                </li>
                                            
                                            
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse" href="#order" role="button"
                                        aria-expanded="false" aria-controls="order">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-clipboard-check font-size-h4" ></i>
                                            </span>
                                            <span class="nav-text">Sell / Orders</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse" id="order"  data-parent="#accordion">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="order-list.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">List</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="order-detail.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Order Detail</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="add-sale.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Add Sale</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{URL::to('pos')}}"  class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">POS</span>
                                                    </a>
                                                </li>
                                            
                                            
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse" href="#Quotations" role="button"
                                        aria-expanded="false" aria-controls="Quotations">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-quote-right font-size-h4"></i>
                                            </span>
                                            <span class="nav-text">Quotations</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse" id="Quotations"  data-parent="#accordion">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="quotations-list.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">All Quotations</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="quotations-add.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Add Quotation</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse" href="#Returns" role="button"
                                        aria-expanded="false" aria-controls="Returns">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-undo-alt font-size-h4"></i>
                                            </span>
                                            <span class="nav-text">Returns</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse" id="Returns" data-parent="#accordion">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="sale-return.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Sale Returns</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="Return-add.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Add Returns</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="purchase-return.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Purchase Returns</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="purchase-return-add.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Add Return Purchase</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse" href="#People" role="button"
                                        aria-expanded="false" aria-controls="People">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-user-friends font-size-h4"></i>
                                            </span>
                                            <span class="nav-text">People</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse show" id="People" data-parent="#accordion">
                                            <div id="accordion2">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                    <a class="nav-link sub-nav-link" data-toggle="collapse" href="#admins" role="button" aria-expanded="false" aria-controls="catalogProduct">
                                                    <span class="svg-icon nav-icon d-flex justify-content-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                                          </svg>
                                                    </span>
                                                        <span class="nav-text">Admins</span>
                                                        <i class="fas fa-chevron-right fa-rotate-90"></i>
                                                    </a>
                                                    <div class="collapse nav-collapse" id="admins" data-parent="#accordion1">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a href="admin-list.html" class="nav-link mini-sub-nav-link">
                                                                
                                                                    <span class="nav-text">List</span>
                                                                </a>
                                                            </li>
                    
                                                            <li class="nav-item">
                                                                <a href="roles-permission.html" class="nav-link mini-sub-nav-link">
                                                                    <span class="nav-text">Roles/Permisssions</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>	
                                                </li>
                                                    <li class="nav-item">
                                                        <a href="{{URL::to('biller')}}" class="nav-link sub-nav-link">
                                                            <span class="svg-icon nav-icon d-flex justify-content-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                  </svg>
                                                            </span>
                                                            <span class="nav-text">Billers</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{URL::to('supplier')}}"  class="nav-link sub-nav-link" onclick="active">
                                                            <span class="svg-icon nav-icon d-flex justify-content-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                  </svg>
                                                            </span>
                                                            <span class="nav-text">Supplier</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{URL::to('customer')}}" class="nav-link sub-nav-link ">
                                                            <span class="svg-icon nav-icon d-flex justify-content-center">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                  </svg>
                                                            </span>
                                                            <span class="nav-text">Customer</span>
                                                        </a>
                                                    </li>
                                                    
                                                </ul> 
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse" href="#account" role="button"
                                        aria-expanded="false" aria-controls="account">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-file-invoice-dollar font-size-h4"></i>
                                            </span>
                                            <span class="nav-text">Accounts</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse" id="account" data-parent="#accordion">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="accounts-list.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">List</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="accounts-balance-sheet.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Balance Sheet</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="accounts-trial-balance.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Trial Balance</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="accounts-cashFlow.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Cash Flow</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="accounts-payment-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Payment Account Report</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse" href="#expenses" role="button"
                                        aria-expanded="false" aria-controls="expenses">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-money-bill font-size-h4"></i>
                                            </span>
                                            <span class="nav-text">Expenses</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse" id="expenses" data-parent="#accordion">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="{{URL::to('expense')}}" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Expenses List</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse" href="#reports" role="button"
                                        aria-expanded="false" aria-controls="reports">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-chart-line font-size-h4"></i>
                                            </span>
                                            <span class="nav-text">Reports</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse" id="reports" data-parent="#accordion">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="profit-loss-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Profit / Loss</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="purchase-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Purchase Report</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="sale-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Sale Report</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="supplier-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Supplier Report</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="customer-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Customer Report</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="stock-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Stock Report</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="stock-adjustment-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Stock Adjustment Report</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="outOfStock-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Out of Stock Report</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="stock-alert-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Stock Alert Report</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="expense-report.html" class="nav-link sub-nav-link">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                        <span class="nav-text">Expense Report</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a  class="nav-link" data-toggle="collapse" href="#setting" role="button"
                                        aria-expanded="false" aria-controls="setting">
                                            <span class="svg-icon nav-icon">
                                                <i class="fas fa-cogs font-size-h4"></i>
                                            </span>
                                            <span class="nav-text">Settings</span>
                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                        </a>
                                        <div class="collapse nav-collapse" id="setting" data-parent="#accordion">
                                            <div id="accordion3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a  class="nav-link sub-nav-link"  data-toggle="collapse" href="#settingA" role="button"
                                                        aria-expanded="false" aria-controls="settingA">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                            <span class="nav-text">App Settings</span>
                                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                                        </a>
                                                        <div class="collapse nav-collapse" id="settingA" data-parent="#accordion3">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a href="app-setting.html#general" class="nav-link mini-sub-nav-link">
                                                                    
                                                                        <span class="nav-text">General</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="{{URL::to('location')}}" class="nav-link mini-sub-nav-link">
                                                                        
                                                                        <span class="nav-text">Location</span>
                                                                    </a>
                                                                </li>
                                                                {{-- <li class="nav-item">
                                                                    <a href="currency.html" class="nav-link sub-nav-link">
                                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                              </svg>
                                                                        </span>
                                                                        <span class="nav-text">Currency</span>
                                                                    </a>
                                                                </li> --}}
                                                                <li class="nav-item">
                                                                    <a href="{{URL::to('paymentmethod')}}" class="nav-link mini-sub-nav-link">
                                                                        
                                                                        <span class="nav-text">Payment Methods</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="Tax.html" class="nav-link mini-sub-nav-link">
                                                                        
                                                                        <span class="nav-text">Tax Settings</span>
                                                                    </a>
                                                                </li>
                                                                
                                                                <li class="nav-item">
                                                                    <a href="app-setting.html#log-sign" class="nav-link mini-sub-nav-link">
                                                                    
                                                                        <span class="nav-text">Login/Signup</span>
                                                                    </a>
                                                                </li>
                        
                                                            
                                                            </ul>
                                                        </div>	
                                                    </li>
                                                    <li class="nav-item">
                                                        <a  class="nav-link sub-nav-link" data-toggle="collapse" href="#settingB" role="button"
                                                        aria-expanded="false" aria-controls="settingB">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                            <span class="nav-text">Bussiness Setting</span>
                                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                                        </a>
                                                        <div class="collapse nav-collapse" id="settingB" data-parent="#accordion3">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a href="bussiness-setting.html#general"  class="nav-link mini-sub-nav-link">
                                                                    
                                                                        <span class="nav-text">General</span>
                                                                    </a>
                                                                </li>
                        
                                                                <li class="nav-item">
                                                                    <a href="bussiness-setting.html#pos" class="nav-link mini-sub-nav-link">
                                                                    
                                                                        <span class="nav-text">POS</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="bussiness-setting.html#email" class="nav-link mini-sub-nav-link">
                                                                    
                                                                        <span class="nav-text">Email SMTP Settings</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="bussiness-setting.html#sms" class="nav-link mini-sub-nav-link">
                                                                        
                                                                        <span class="nav-text">SMS Setting</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="bussiness-setting.html#emailtemp" class="nav-link mini-sub-nav-link">
                                                                    
                                                                        <span class="nav-text">Email Templates</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="bussiness-setting.html#notification" class="nav-link mini-sub-nav-link">
                                                                        
                                                                        <span class="nav-text">Notifications Setting</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="bussiness-setting.html#invoice" class="nav-link mini-sub-nav-link">
                                                                        
                                                                        <span class="nav-text">Invoice Setting</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="bussiness-setting.html#barcodes" class="nav-link mini-sub-nav-link">
                                                                        
                                                                        <span class="nav-text">Bar Code Setting</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>	
                                                    </li>
                                                    <li class="nav-item">
                                                        <a  class="nav-link sub-nav-link" data-toggle="collapse" href="#settingW" role="button"
                                                        aria-expanded="false" aria-controls="settingW">
                                                        <span class="svg-icon nav-icon d-flex justify-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                              </svg>
                                                        </span>
                                                            <span class="nav-text">Website Settings</span>
                                                            <i class="fas fa-chevron-right fa-rotate-90"></i>
                                                        </a>
                                                        <div class="collapse nav-collapse" id="settingW" data-parent="#accordion3">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a href="website-setting.html#themeColor" class="nav-link mini-sub-nav-link">
                                                                    
                                                                        <span class="nav-text">Theming / Colors</span>
                                                                    </a>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>	
                                                    </li>
                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                            
                                </ul>
                              </div>
                            <!--end::Menu Nav-->
                        </div>
                        <!--end::Menu Container-->
                    </div>
                    <!--end::Aside Menu-->