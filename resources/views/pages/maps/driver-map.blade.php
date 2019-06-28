<!-- head -->
@include('sub-views.head')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
@include('sub-views.sidenav')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('sub-views.topnav')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->

        <div class="container-fluid">
            <div class="app-content content">
                <div class="content-wrapper">
                    <div class="content-body">
                        <section id="gmaps-utils">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content collapse show">
                                            <div class="card-header py-3">
                                                <h4 class="content-header-title mb-0 d-inline-block"><i class="fas fa-map"></i> Heat Map</h4>
                                                <div class="btn-group float-md-right">
                                                    <button type="button" class="btn btn-outline-primary btn-min-width box-shadow-1 mr-1 mb-1"
                                                            onclick="changeGradient()">Change gradient
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger btn-min-width box-shadow-1 mr-1 mb-1"
                                                            onclick="changeRadius()">Change radius
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div id="context-menu" style="width: 100%;height: 550px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
<!-- End of Main Content -->

      <!-- Footer -->
      @include('sub-views.footer')
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
  @include('modals.logout_modal')

  <!-- Bootstrap core JavaScript-->
  @include('sub-views.scripts')

</body>

</html>
