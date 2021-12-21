<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ asset('admin_assets/html/ltr/vertical-menu-template-semi-dark/index.html')}}"><span class="brand-logo">
                        <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                            <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                        <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                        <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                        <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                        <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg></span>
                    <h2 class="brand-text">THL</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item">
                <a class="d-flex align-items-center {{ Route::is('home')  ? 'active' : '' }}" href="{{ route('home') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span>
                </a>
            </li>
            <li class="nav-item {{ Route::is('project.index') || Route::is('project.create')  ? 'has-sub open' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather="shopping-bag"></i><span class="menu-title text-truncate" data-i18n="Invoice">Projects</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('project.create')  ? 'active' : '' }}" href="{{ route('project.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Project Add</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('project.index')  ? 'active' : '' }}" href="{{ route('project.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Projects List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Route::is('customers.list') || Route::is('customer.create')  ? 'has-sub open' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Invoice">Customers</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('customers.list')  ? 'active' : '' }}" href="{{ route('customers.list') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Customers List</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('customer.create')  ? 'active' : '' }}" href="{{ route('customer.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Customer Add</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Route::is('contractor.list') || Route::is('contractor.create')  ? 'has-sub open' : '' }}">
                <a class="d-flex align-items-center" href="#"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="Invoice">Contractors</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('contractor.create')  ? 'active' : '' }}" href="{{ route('contractor.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Add Contractor</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('contractor.list')  ? 'active' : '' }}" href="{{ route('contractor.list') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List Contractors</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item {{ Route::is('supplier.list') || Route::is('supplier.create')  ? 'has-sub open' : '' }}">
                <a class="d-flex align-items-center" href="#"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="Invoice">Suppliers</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('supplier.create')  ? 'active' : '' }}" href="{{ route('supplier.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Add Supplier</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('supplier.list')  ? 'active' : '' }}" href="{{ route('supplier.list') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List Suppliers</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Route::is('designer.list') || Route::is('designer.create')  ? 'has-sub open' : '' }}">
                <a class="d-flex align-items-center" href="#"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="Invoice">Designers</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('designer.create')  ? 'active' : '' }}" href="{{ route('designer.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Add Designer</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('designer.list')  ? 'active' : '' }}" href="{{ route('designer.list') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List Designers</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  {{ Route::is('purchase.create') || Route::is('purchase.index')  ? 'has-sub open' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather="briefcase"></i><span class="menu-title text-truncate" data-i18n="Invoice">Purchase</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('purchase.create')  ? 'active' : '' }}" href="{{ route('purchase.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Add Purchase</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('purchase.index')  ? 'active' : '' }}" href="{{ route('purchase.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Purchase List</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item  {{ Route::is('installment.index')  ? 'has-sub open' : '' }}">
                <a class="d-flex align-items-center" href="#"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Invoice">Installment</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('installment.index')  ? 'active' : '' }}" href="{{ route('installment.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Installment</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Route::is('voucher.money.receipt') || Route::is('voucher.debit.voucher')  ? 'has-sub open' : '' }}">
                <a class="d-flex align-items-center" href="#"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="Invoice">Voucher</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('voucher.money.receipt')  ? 'active' : '' }}" href="{{ route('voucher.money.receipt') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Money Receipt</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center {{ Route::is('voucher.debit.voucher')  ? 'active' : '' }}" href="{{ route('voucher.debit.voucher') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Debit Voucher</span>
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
</div>
<!-- END: Main Menu-->