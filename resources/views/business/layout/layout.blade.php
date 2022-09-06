<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Raplex</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  href="{{ asset('public/assets/font/iconsmind-s/css/iconsminds.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/font/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/select2.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/perfect-scrollbar.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/owl.carousel.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/bootstrap-stars.css') }}" rel="stylesheet">       
    <link  href="{{ asset('public/assets/css/dore.light.blue.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/main.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/custom.css') }}" rel="stylesheet">

    <link  href="{{ asset('public/assets/css/rainbow.css') }}" rel="stylesheet">
    @yield('businesscss')
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>
            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>
            <div class="search" data-search-path="Pages.Search.html?q=">
                <input placeholder="Search...">
                <span class="search-icon">
                    <i class="simple-icon-magnifier"></i>
                </span>
            </div>
        </div>


        <a class="navbar-logo" href="/">
            <img src="/public/assets/images/logo.png" alt="" style="width: 150px;">            
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">    

                <div class="position-relative d-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="notificationButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-bell"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3 scroll position-absolute" id="notificationDropdown">

                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="{{ asset('public/assets/img/profile-pic-l-2.jpg') }}" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">Joisse Kaycee just sent a new comment!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="{{ asset('public/assets/img/notification-thumb.jpg') }}" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">1 item is out of stock!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>


                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="{{ asset('public/assets/img/notification-thumb-2.jpg') }}" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">New order received! It is total $147,20.</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-3 pb-3 ">
                            <a href="#">
                                <img src="{{ asset('public/assets/img/notification-thumb-3.jpg') }}" alt="Notification Image" class="img-thumbnail list-thumbnail xsmall border-0 rounded-circle" />
                            </a>
                            <div class="pl-3 pr-2">
                                <a href="#">
                                    <p class="font-weight-medium mb-1">3 items just added to wish list by a user!</p>
                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Business</span>
                    <span>
                        <img alt="Profile Picture" src="{{ asset('public/assets/img/profile-pic-l.jpg') }}" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="sidebar">
        <div class="main-menu">
            <div class="scroll">
                <!-- @yield('sidebar') -->
                <ul class="list-unstyled">
                @if($pagename == 'dashboard')
                    <li class="active">
                @else
                    <li>
                @endif
                        <a href="{{ route('business.dashboard') }}">
                            <i class="iconsminds-monitor-analytics"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                @if($pagename == 'integrate')
                    <li class="active">
                @else
                    <li>
                @endif
                        <a href="{{ route('business.integrate') }}">
                            <i class="iconsminds-environmental-3"></i>
                            <span>Integrate</span>
                        </a>
                    </li>
                @if($pagename == 'customers')
                    <li class="active">
                @else
                    <li>
                @endif
                        <a href="{{ route('business.customers') }}">
                            <i class="simple-icon-people"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                @if($pagename == 'transaction')
                    <li class="active">
                @else
                    <li>
                @endif
                        <a href="{{ route('business.transaction') }}">
                            <i class="iconsminds-handshake"></i>
                            <span>Transaction</span>
                        </a>
                    </li>
                @if($pagename == 'payment')
                    <li class="active">
                @else
                    <li>
                @endif
                        <a href="{{ route('business.payment') }}">
                            <i class="iconsminds-wallet"></i>
                            <span>Wallet</span>
                        </a>
                    </li>
                @if($pagename == 'financial')
                    <li class="active">
                @else
                    <li>
                @endif
                        <a href="{{ route('business.financial') }}">
                            <i class="iconsminds-coins-2"></i>
                            <span>Financial</span>
                        </a>
                    </li>
                @if($pagename == 'setting')
                    <li class="active">
                @else
                    <li>
                @endif
                        <a href="{{ route('business.setting') }}">
                            <i class="simple-icon-settings"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="users">
                    <li>
                        <a href="/admin/users">
                            <i class="simple-icon-user"></i> User Management
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <main>
    @yield('content')
    </main>
    
    

</body>
    <!-- <script type="text/javascript"></script> -->
    <script src="{{ asset('public/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/progressbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/select2.full.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/chartjs-plugin-datalabels.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/nouislider.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/Sortable.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/mousetrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/dore.script.js') }}"></script>
    <script src="{{ asset('public/assets/js/scripts.single.theme.js') }}"></script>
    <script src="{{ asset('public/assets/js/business.js') }}"></script>
    @yield('businessjs')
</html>