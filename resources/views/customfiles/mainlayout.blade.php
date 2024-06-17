<!DOCTYPE html>
<html lang="en">

<head>
    @include('customfiles.head')
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('customfiles.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('customfiles.topbar')
                <!-- End of Topbar -->

                <!-- Page Content -->
                @yield('content')
                <!-- End of Page Content -->

                
                <!-- Footer -->
                @include('customfiles.footer')
                <!-- End of Footer -->
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    @include('customfiles.logout_model')

    <!-- Scripts -->
    @include('customfiles.scripts')
</body>

</html>
