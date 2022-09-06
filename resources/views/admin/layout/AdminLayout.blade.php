<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Raplex Admin</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link  href="{{ asset('public/assets/font/iconsmind-s/css/iconsminds.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/font/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/fullcalendar.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/datatables.responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/select2.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/perfect-scrollbar.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/owl.carousel.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/bootstrap-stars.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/nouislider.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/vendor/bootstrap-datepicker3.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/dore.light.blue.min.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/main.css') }}" rel="stylesheet">
    <link  href="{{ asset('public/assets/css/custom.css') }}" rel="stylesheet">
@yield('admincss')
</head>

<body id="app-container" class="menu-default">
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
            <!-- <span class="logo d-none d-xs-block"></span> -->
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <!-- <a class="btn btn-sm btn-outline-primary mr-2 d-none d-md-inline-block mb-2" href="https://1.envato.market/5kAb">&nbsp;BUY&nbsp;</a> -->

                <div class="position-relative d-none d-sm-inline-block">
                    <button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="simple-icon-grid"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown">
                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-equalizer d-block"></i>
                            <span>Settings</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-male-female d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-puzzle d-block"></i>
                            <span>Components</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-bar-chart-4 d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-file d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsminds-suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

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
                    <span class="name">Admin</span>
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
                <ul class="list-unstyled">
                    <li>
                        <a href="/admin">
                            <i class="iconsminds-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#users">
                            <i class="iconsminds-male-female d-block"></i>
                            <span>Users</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="users">
                    <li>
                        <a href="{{ route('admin.users.index') }}">
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
    <script type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/chartjs-plugin-datalabels.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/datatables.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/progressbar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/select2.full.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/nouislider.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/Sortable.js') }}"></script>
    <script src="{{ asset('public/assets/js/vendor/mousetrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/dore.script.js') }}"></script>
    <script src="{{ asset('public/assets/js/scripts.single.theme.js') }}"></script>
    @yield('adminjs')
</html>