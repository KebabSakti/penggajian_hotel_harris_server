<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <x-title />
    <x-header>
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.23/r-2.2.7/datatables.min.css" />
        <link rel="stylesheet" href="{{ asset('assets/vendors/daterangepicker-master/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
    </x-header>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="mainModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="mainModal">Modal title</h5> --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Loading...</div>
            </div>
        </div>
    </div>

    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                {{-- <a class="navbar-brand brand-logo" href="/admin/dashboard">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" /> </a> --}}
                <a class="navbar-brand brand-logo-mini" href="/admin/dashboard">
                    <img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /> </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                        {{-- <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                            aria-expanded="false">
                        </a> --}}
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <x-sidebar>
                        <li class="nav-item nav-profile">
                            <a href="#" class="nav-link">
                                <div class="text-wrapper">
                                    <p class="profile-name">
                                        {{ Auth::user()->email ?? '' }}
                                    </p>
                                </div>
                            </a>
                        </li>
                        {{-- <li class="nav-item nav-category">Menu Utama</li> --}}
                        <x-admin-menu />
                    </x-sidebar>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">

                <div class="content-wrapper">
                    <x-alert />

                    <!-- page content -->
                    {{ $slot }}
                    <!-- /page content -->
                </div>
                <!-- content-wrapper ends -->
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            All rights reserved</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <x-footer>
        <!-- Custom js for this page-->
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="{{ asset('assets/vendors/daterangepicker-master/moment.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/daterangepicker-master/daterangepicker.js') }}"></script>
        <script src="{{ asset('assets/js/demo_1/dashboard.js') }}"></script>
        <script src="https://cdn.datatables.net/v/bs4/dt-1.10.23/r-2.2.7/datatables.min.js"></script>
        <script src="{{ asset('assets/js/dtpipeline.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <!-- End custom js for this page-->
    </x-footer>
</body>

</html>
