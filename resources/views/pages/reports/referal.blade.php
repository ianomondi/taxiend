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

        <div class=container-fluid>
            <div class="app-content content">
                <div class="content-wrapper">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="content-header-title mb-0 d-inline-block"><i class="fa fa-user-plus"></i> Referral Report</h3>
                            <div class="btn-group float-md-right">
                                <div class="heading-elements">
                                    <div class="btn-group float-md-right">
                                        <div class="heading-elements">
                                            <a href="#">
                                                <button type="button" title="Export" class="btn btn-icon btn-primary mr-1"><i
                                                            class="fa fa-download"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table display nowrap table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Sender Details</th>
                                        <th>Receiver Details</th>
                                        <th>Total Refer</th>
                                        <th>Total Earn(Only Fixed Amount)</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <div class="pagination1"></div>
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