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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
          <div class="container-fluid">
        <div class="app-content content">
            <div class="content-wrapper">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="content-header-title mb-0 d-inline-block"><i class="fas fa-briefcase"></i> Corporate Panel</h3>
                                                    <div class="btn-group float-md-right">
                                <div class="heading-elements">
                                    <a href="/corporate/createcorporate">
                                        <button title="Add Corporate" type="button"
                                                class="btn btn-icon btn-success mr-1"><i class="fa fa-plus"></i>
                                        </button>
                                    </a>

                                </div>
                            </div>
                                            </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table display nowrap table-striped table-bordered " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Corporate Name</th>
                                    <th>Corporate Email</th>
                                    <th>Moblie No.</th>
                                    <th>Corporate Address</th>
                                    <th>Register Date</th>
                                    <th>Last Update</th>
                                </tr>
                                </thead>
                                <tbody>
                                                                                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
