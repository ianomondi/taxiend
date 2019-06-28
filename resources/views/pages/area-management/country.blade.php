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

        <div class="app-content content">
            <div class="container-fluid">
                <div class=" content-wrapper">
                    <div class="card shadow mb-4">
    
                        <div class="card-header py-md-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="content-header-title mb-0 d-inline-block">
                                        <i class=" fa fa-flag" aria-hidden="true"></i>
                                        Country Management</h3>
                                </div>
                                                                <div class="col-md-6">
    
                                        <a href="/area-management/country/create-country">
                                            <button type="button" title="Add Country"
                                                    class="btn btn-icon btn-success mr-1 float-right"><i class="fa fa-plus"></i>
                                            </button>
                                        </a>
                                        <a href="" >
                                            <button type="button" data-toggle="tooltip" data-original-title="Export"
                                                    class="btn btn-icon btn-primary mr-1 float-right"><i
                                                        class="fa fa-download"
                                                        title="Export To Excel"></i>
                                            </button>
                                        </a>
                                    </div>
                                                        </div>
    
                        </div>
    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table display nowrap table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Country Name</th>
                                        <th>ISD Code</th>
                                        <th>Currency</th>
                                        <th>ISO code</th>
                                        <th>Distance Unit</th>
                                        <th>Language</th>
                                        <th>Phone Number Length</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
    
    
                        <div class="col-sm-12">
                            <div class="pagination1"></div>
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
