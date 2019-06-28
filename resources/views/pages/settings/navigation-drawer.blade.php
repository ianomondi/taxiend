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
          <div class="container-fluid">
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="col-md-6 col-12">
                                            </div>
                </div>

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="content-header-title mb-0 d-inline-block"><i class="fas fa-car"></i> Navigation Drawer</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table display nowrap table-striped table-bordered " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name</th>  
                                    <th>Description</th>  
                                    <th>Icon Image</th>  
                                    <th>Sequence Number.</th>  
                                    <th>Status</th>
                                    <th>Action</th>
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
