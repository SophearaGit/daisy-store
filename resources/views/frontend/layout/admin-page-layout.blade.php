<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/admin/assets/imgs/theme/favicon.svg">
    <link href="/frontend/admin/assets/css/style.css?v=1.0.0" rel="stylesheet">
    <title>@yield('pageTitle')</title>
    @stack('stylesheets')
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a class="brand-wrap" href="{{ route('home') }}">
                {{-- <img class="logo" src="/frontend/assets/img/logo.jpeg" alt="Evara Dashboard"> --}}
                {{-- button back home --}}
                <button class="btn btn-primary-light btn-icon btn-aside-minimize">
                    {{-- <i class="text-success material-icons md-home mb-1"></i> --}}
                    <span class="text-primary">
                        <strong>
                            Go Back Home
                        </strong>
                    </span>
                </button>
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"><i
                        class="text-muted material-icons md-menu_open"></i></button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active"><a class="menu-link" href="index.html"><i
                            class="icon material-icons md-home"></i><span class="text">Dashboard</span></a></li>
                <li class="menu-item has-submenu"><a class="menu-link" href="page-products-list.html"><i
                            class="icon material-icons md-shopping_bag"></i><span class="text">Products</span></a>
                    <div class="submenu"><a href="page-products-list.html">Product List</a><a
                            href="page-products-grid.html">Product grid</a><a href="page-products-grid-2.html">Product
                            grid 2</a><a href="page-categories.html">Categories</a></div>
                </li>
                <li class="menu-item has-submenu"><a class="menu-link" href="page-orders-1.html"><i
                            class="icon material-icons md-shopping_cart"></i><span class="text">Orders</span></a>
                    <div class="submenu"><a href="page-orders-1.html">Order list 1</a><a href="page-orders-2.html">Order
                            list 2</a><a href="page-orders-detail.html">Order detail</a><a
                            href="page-orders-tracking.html">Order tracking</a><a href="page-invoice.html">Invoice</a>
                    </div>
                </li>
                <li class="menu-item has-submenu"><a class="menu-link" href="page-sellers-cards.html"><i
                            class="icon material-icons md-store"></i><span class="text">Sellers</span></a>
                    <div class="submenu"><a href="page-sellers-cards.html">Sellers cards</a><a
                            href="page-sellers-list.html">Sellers list</a><a href="page-seller-detail.html">Seller
                            profile</a></div>
                </li>
                <li class="menu-item has-submenu"><a class="menu-link" href="page-form-product-1.html"><i
                            class="icon material-icons md-add_box"></i><span class="text">Add product</span></a>
                    <div class="submenu"><a href="page-form-product-1.html">Add product 1</a><a
                            href="page-form-product-2.html">Add product 2</a><a href="page-form-product-3.html">Add
                            product 3</a><a href="page-form-product-4.html">Add product 4</a></div>
                </li>
                <li class="menu-item has-submenu"><a class="menu-link" href="page-transactions-1.html"><i
                            class="icon material-icons md-monetization_on"></i><span
                            class="text">Transactions</span></a>
                    <div class="submenu"><a href="page-transactions-1.html">Transaction 1</a><a
                            href="page-transactions-2.html">Transaction 2</a><a
                            href="page-transactions-details.html">Transaction Details</a></div>
                </li>
                <li class="menu-item has-submenu"><a class="menu-link" href="#"><i
                            class="icon material-icons md-person"></i><span class="text">Account</span></a>
                    <div class="submenu"><a href="page-account-login.html">User login</a><a
                            href="page-account-register.html">User registration</a><a href="page-error-404.html">Error
                            404</a></div>
                </li>
                <li class="menu-item"><a class="menu-link" href="page-reviews.html"><i
                            class="icon material-icons md-comment"></i><span class="text">Reviews</span></a></li>
                <li class="menu-item"><a class="menu-link" href="page-brands.html"><i
                            class="icon material-icons md-stars"></i><span class="text">Brands</span></a></li>
                <li class="menu-item"><a class="menu-link" disabled="" href="#"><i
                            class="icon material-icons md-pie_chart"></i><span class="text">Statistics</span></a>
                </li>
            </ul>
            <hr>
            <ul class="menu-aside">
                <li class="menu-item has-submenu"><a class="menu-link" href="#"><i
                            class="icon material-icons md-settings"></i><span class="text">Settings</span></a>
                    <div class="submenu"><a href="page-settings-1.html">Setting sample 1</a><a
                            href="page-settings-2.html">Setting sample 2</a></div>
                </li>
                <li class="menu-item"><a class="menu-link" href="page-blank.html"><i
                            class="icon material-icons md-local_offer"></i><span class="text"> Starter
                            page</span></a></li>
            </ul>
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
                <form class="searchform">
                    <div class="input-group">
                        <input class="form-control" list="search_terms" type="text" placeholder="Search term">
                        <button class="btn btn-light bg" type="button"><i
                                class="material-icons md-search"></i></button>
                    </div>
                    <datalist id="search_terms">
                        <option value="Products"></option>
                        <option value="New orders"></option>
                        <option value="Apple iphone"></option>
                        <option value="Ahmed Hassan"></option>
                    </datalist>
                </form>
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i
                        class="material-icons md-apps"></i></button>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link btn-icon" href="#"><i
                                class="material-icons md-notifications animation-shake"></i><span
                                class="badge rounded-pill">3</span></a></li>
                    <li class="nav-item"><a class="nav-link btn-icon darkmode" href="#"><i
                                class="material-icons md-nights_stay"></i></a></li>
                    <li class="nav-item"><a class="requestfullscreen nav-link btn-icon" href="#"><i
                                class="material-icons md-cast"></i></a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownLanguage"
                            data-bs-toggle="dropdown" href="#" aria-expanded="false"><i
                                class="material-icons md-public"></i></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage"><a
                                class="dropdown-item text-brand" href="#"><img
                                    src="/frontend/admin/assets/imgs/theme/flag-us.png" alt="English">English</a><a
                                class="dropdown-item" href="#"><img
                                    src="/frontend/admin/assets/imgs/theme/flag-fr.png"
                                    alt="Français">Fran&ccedil;ais</a><a class="dropdown-item" href="#"><img
                                    src="/frontend/admin/assets/imgs/theme/flag-jp.png"
                                    alt="Français">&#x65E5;&#x672C;&#x8A9E;</a><a class="dropdown-item"
                                href="#"><img src="/frontend/admin/assets/imgs/theme/flag-cn.png"
                                    alt="Français">&#x4E2D;&#x56FD;&#x4EBA;</a></div>
                    </li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownAccount"
                            data-bs-toggle="dropdown" href="#" aria-expanded="false"><img
                                class="img-xs rounded-circle" src="/frontend/admin/assets/imgs/people/avatar2.jpg"
                                alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount"><a
                                class="dropdown-item" href="#"><i
                                    class="material-icons md-perm_identity"></i>Edit Profile</a><a
                                class="dropdown-item" href="#"><i
                                    class="material-icons md-settings"></i>Account Settings</a><a
                                class="dropdown-item" href="#"><i
                                    class="material-icons md-account_balance_wallet"></i>Wallet</a><a
                                class="dropdown-item" href="#"><i
                                    class="material-icons md-receipt"></i>Billing</a><a class="dropdown-item"
                                href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        @yield('content')
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy;, Ecom - HTML Ecommerce Template .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">All rights reserved</div>
                </div>
            </div>
        </footer>
    </main>
    <script src="/frontend/admin/assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="/frontend/admin/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="/frontend/admin/assets/js/vendors/select2.min.js"></script>
    <script src="/frontend/admin/assets/js/vendors/perfect-scrollbar.js"></script>
    <script src="/frontend/admin/assets/js/vendors/jquery.fullscreen.min.js"></script>
    <script src="/frontend/admin/assets/js/vendors/chart.js"></script>
    <script src="/frontend/admin/assets/js/main.js?v=1.0.0"></script>
    <script src="/frontend/admin/assets/js/custom-chart.js" type="text/javascript"></script>
    @stack('scripts')
</body>

</html>
