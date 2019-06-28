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
                            <h4 class="form-section"><i class=" fa fa-chart-area" aria-hidden="true"></i>
                                Service Area Management</h4>
                        </div>
                        <div class="col-md-6">
    
                            <a href="">
                                <button type="button" class="btn btn-icon btn-primary mr-1 float-right" data-original-title="Export To Excel" data-toggle="tooltip"><i
                                            class="fa fa-download"></i>
                                </button>
                            </a>
                            <a href="/area-management/service/create-service">
                                <button type="button" title="Add Service Area in country"
                                        class="btn btn-icon btn-success mr-1 float-right"><i class="fa fa-plus"></i>
                                </button>
                            </a>
                        </div>
                    </div>
    
                </div>
                    <div class="card-body">
                <div class="table-responsive">
                    <table id="dataTable"
                           class="table table-responsive display nowrap table-striped table-bordered ">
                        <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Country Name</th>
                            <th>Area Name</th>
                            <th>Driver's Personal Documents</th>
                            <th>Vehicle Documents</th>
                            <th>Available Service</th>
                            <th>Timezone</th>
                                                    <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot></tfoot>
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
