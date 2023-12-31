<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Yoto Agro Dita' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset ('img/icon.ico') }}">

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/png">
    
    <style>
        /* Custom color for the sidebar background */
        .bg-gradient-primary {
            background-color: #5AB7F4; /* Replace with your desired color */
        }

        /* Custom color for the sidebar text/icon */
        .text-gray-100 {
            color: #fff; /* Replace with your desired color */
        }

        .logo-img {
            width: 60px; /* Ganti dengan ukuran yang sesuai */
            height: auto; /* Ini memastikan gambar tetap proporsional */
        }

        /* Tambahkan gaya lain sesuai kebutuhan Anda */
        .sidebar-brand {
            background-color: #5AB7F4;
        }

        .sidebar-brand-text {
            /* Styling untuk sidebar-brand-text jika diperlukan */
        }
    </style>

</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon ">
                <img class="logo-img" src="{{ asset('img/LOGOMITRA.png') }}" alt="LOGO MITRA">
            </div>
            <div class="sidebar-brand-text mx-3">Yoto Agro Dita</div>
        </a>
    

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span>
            </a>
        </li>

        <li class="nav-item {{ request()->routeIs('admin.confirmation') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.confirmation') }}">
                <i class="fas fa-fw fa-solid fa-table"></i>
                <span>{{ __('Order') }}</span>
            </a>
        </li>
        
    

<!-- Nav Item - Customer -->
<li class="nav-item {{ request()->routeIs('admin.confirmed-installation') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.confirmed-installation') }}">
        <i class="fas fa-fw fa-solid fa-users"></i>
        <span>{{ __('Customer') }}</span>
    </a>
</li>
<!-- Nav Item - pemasangan-->
<li class="nav-item {{ request()->routeIs('admin.data-pemasangan.index') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.data-pemasangan.index') }}">
        <i class="fas fa-person-digging"></i>
        <span>{{ __('Data Pemasangan') }}</span>
    </a>
</li>
<!-- Nav Item - Users -->
<li class="nav-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.users.index') }}">
        <i class="fas fa-fw fa-solid fa-user"></i>
        <span>{{ __('Users') }}</span>
    </a>
</li>

<!-- Nav Item - Pemasukkan -->
<li class="nav-item {{ request()->routeIs('pemasukkan.index') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pemasukkan.index') }}">
        <i class="fas fa-dollar-sign fa-2x "></i>
        <span>{{ __('Pemasukkan') }}</span>
    </a>
</li>


<!-- Nav Item - Pegawai -->
<li class="nav-item {{ request()->routeIs('admin.pegawai.index') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.pegawai.index') }}">
        <i class="fas fa-fw fa-solid fa-user-tie"></i>
        <span>{{ __('Pegawai') }}</span>
    </a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Nav Item - Capacities -->
<li class="nav-item {{ request()->routeIs('admin.capacities.index') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.capacities.index') }}">
        <i class="fas fa-fw fa-solid fa-solar-panel"></i>
        <span>{{ __('Kapasitas') }}</span>
    </a>
</li>

<!-- Nav Item - Storage -->
<li class="nav-item {{ request()->routeIs('admin.storage.index') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.storage.index') }}">
        <i class="fas fa-fw fa-solid fa-hdd"></i>
        <span>{{ __('Penyimpanan') }}</span>
    </a>
</li>


<!-- Nav Item - Produk-->
<li class="nav-item {{ request()->routeIs('admin.blog.index') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.blog.index') }}">
        <i class="fas fa-fw fa-solid fa-blog"></i>
        <span>{{ __('Produk') }}</span>
    </a>
</li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>



                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <figure class="img-profile rounded-circle avatar font-weight-bold" data-initial="{{ Auth::user()->name[0] }}"></figure>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Profile') }}
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('main-content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Kelompok5 {{ now()->year }}</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>
