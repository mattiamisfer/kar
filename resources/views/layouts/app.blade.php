<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/dason/layouts/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 07:09:10 GMT -->

<head>

    <meta charset="utf-8" />


    <title>{{ config('app.name', 'Seagull International') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png')}}">
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />


    <!-- plugin css -->
    <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet"
        type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css')}}" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ url('/')}}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('web/images/main-logo.png')}}" alt="" height="30">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('web/images/main-logo.png')}}" alt="" height="70">
                            </span>
                        </a>

                        <a href="{{ url('/')}}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('web/images/main-logo.png')}}" alt="" height="30">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('web/images/main-logo.png')}}" alt="" height="70">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    {{-- <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button class="btn btn-primary" type="button"><i
                                    class="bx bx-search-alt align-middle"></i></button>
                        </div>
                    </form> --}}
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="search" class="icon-lg"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Search Result">

                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language"
                                height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span
                                    class="align-middle">English</span>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div> --}}

                    {{-- <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                            <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                            <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                        </button>
                    </div> --}}

                    {{-- <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i data-feather="grid" class="icon-lg"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/github.png" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                            <span>Mail Chimp</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="assets/images/brands/slack.png" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon position-relative"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i data-feather="bell" class="icon-lg"></i>
                            <span class="badge bg-danger rounded-pill">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm"
                                                alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">James Lemire</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">It will seem like simplified English.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hours
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your order is placed</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Your item is shipped</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm"
                                                alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Salena Layfield</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hours
                                                        ago</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item right-bar-toggle me-2">
                            <i data-feather="settings" class="icon-lg"></i>
                        </button>
                    </div> --}}

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            {{-- <img class="rounded-circle header-profile-user" src="{{ asset('assets/emblem.png')}}"
                                alt="Header Avatar"> --}}
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">Good Day {{ Auth::user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            @if (Auth::user()->user_type == 2)
                            <a class="dropdown-item" href="{{ route('setting.change_password')}}"><i
                                    class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                            @endif

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout')}}"   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i
                                    class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    </div>

                </div>
            </div>
        </header>
  <!-- ========== Left Sidebar Start ========== -->
  <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>











              @if (Auth::user()->user_type == 2)
              <li>
                <a href="{{ route('user.dashboard.index')}}">
                    <i data-feather="home"></i>
                    <span class="badge rounded-pill bg-soft-success text-success float-end"></span>
                    <span data-key="t-dashboard">Dashboard</span>
                </a>
            </li>
              <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="trello"></i>
                    <span data-key="t-tasks">Entries</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('user.products.create')}}" key="t-task-list">ADD NEW</a></li>
                    <li><a href="{{ route('user.products.index')}}" key="t-kanban-board">PREVIOUS ENTRIES</a></li>
                 </ul>
            </li>
              @endif


              @if (Auth::user()->user_type == 1)
              <li>
                <a href="{{ route('admin.dashboard.index')}}">
                    <i data-feather="home"></i>
                    <span class="badge rounded-pill bg-soft-success text-success float-end"></span>
                    <span data-key="t-dashboard">Dashboard</span>
                </a>
            </li>
              {{-- <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="trello"></i>
                    <span data-key="t-tasks">User</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('admin.user.create')}}" key="t-task-list">ADD NEW</a></li>
                    <li><a href="{{ route('admin.user.index')}}" key="t-kanban-board">LIST</a></li>
                 </ul>
            </li> --}}
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="trello"></i>
                    <span data-key="t-tasks">Sector</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('admin.sector.create')}}" key="t-task-list">ADD NEW</a></li>
                    <li><a href="{{ route('admin.sector.index')}}" key="t-kanban-board">LIST</a></li>
                 </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="trello"></i>
                    <span data-key="t-tasks">Slider</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('admin.slider.create')}}" key="t-task-list">ADD NEW</a></li>
                    <li><a href="{{ route('admin.slider.index')}}" key="t-kanban-board">LIST</a></li>
                 </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="trello"></i>
                    <span data-key="t-tasks">Company</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('admin.company.create')}}" key="t-task-list">ADD NEW</a></li>
                    <li><a href="{{ route('admin.company.index')}}" key="t-kanban-board">LIST</a></li>
                 </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="trello"></i>
                    <span data-key="t-tasks">News</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('admin.news.create')}}" key="t-task-list">ADD NEW</a></li>
                    <li><a href="{{ route('admin.news.index')}}" key="t-kanban-board">LIST</a></li>
                 </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow">
                    <i data-feather="trello"></i>
                    <span data-key="t-tasks">Page Setting</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                     <li><a href="{{ route('admin.page.index')}}" key="t-kanban-board">LIST</a></li>
                 </ul>
            </li>
              @endif




















            </ul>

            {{-- <div class="card sidebar-alert shadow-none text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                        <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.
                        </p>
                        <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

        @yield('content')


            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>

            <!-- JAVASCRIPT -->
            <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
            <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
            <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
            <script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>
            <script src="{{ asset('assets/libs/feather-icons/feather.min.js')}}"></script>
            <!-- pace js -->
            <script src="{{ asset('assets/libs/pace-js/pace.min.js')}}"></script>

            <!-- apexcharts -->
            <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

            <!-- Plugins js-->
            <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
            <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}}"></script>
            <!-- dashboard init -->
           <script src="{{ asset('assets/js/pages/dashboard.init.js')}}"></script>


             <!-- Required datatable js -->
        <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        {{-- <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script> --}}

        <!-- Responsive examples -->
        <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>

            <script src="{{ asset('assets/js/app.js')}}"></script>
            {{-- <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
            <script>
              var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
                config.extraPlugins : 'colorbutton';

              };
            </script> --}}
            @yield('js')
</body>



</html>
