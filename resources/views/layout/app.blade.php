<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                {{-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> --}}
                <div class="sidebar-brand-text mx-3 text-dark">KK Company</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="text-dark">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('karyawan') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span class="text-dark">Karyawan</span></a>
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Kelvin Haryanto</span>
                                <img class="img-profile rounded-circle"
                                    src="data:image/jpeg;base64,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">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            {{-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer> --}}
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>

</body>

</html>
