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
          <div class="app-content content">
        <div class="container-fluid content-wrapper">
          

            <div class="content-body">
                <section id="horizontal">
                    <div class="row">
                                                <div class="col-12">
                            <div class="card">
							 <div class="card-header py-3">
							  <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2">
                    <h3 class="content-header-title mb-0 d-inline-block">
					<i class=" fa fa-user-shield" aria-hidden="true"></i>
					Sub-Admin</h3>
                </div>

                <div class="content-header-right col-md-4 col-12">
                    <div class="btn-group float-md-right">
                        <div class="heading-elements">
                            <div class="btn-group float-md-right">
                                <div class="heading-elements">
                                    <a href="">
                                        <button type="button" class="btn btn-icon btn-primary mr-1" data-original-title="Export To Excel" data-toggle="tooltip"><i
                                                    class="fa fa-download"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                                            <div class="btn-group float-md-right">
                            <div class="heading-elements">
                                <a href="/permissions/sub-admin/create-admin">
                                    <button type="button" class="btn btn-icon btn-success mr-1" data-original-title="Add Sub-admin" data-toggle="tooltip"><i
                                                class="fa fa-plus"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                                    </div>
            </div>
            </div>
                             <div class="card-body">
                        <div class="table-responsive">
                            <table class="table display nowrap table-striped table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Moblie No.</th>
                                                <th>Email Id</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                                                                                                    </tbody>

                                        </table>
                                 
                                </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="pagination1"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </section>

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
