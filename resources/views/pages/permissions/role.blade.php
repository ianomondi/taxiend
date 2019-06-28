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
        <div class="container-fluid">
        <div class="content-wrapper">
    

            <div class="content-body">
                <section id="horizontal">
                    <div class="row">
                        <div class="card shadow w-100 h-100">
						 <div class="card-header py-3">

						        <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title mb-0 d-inline-block">
				
					<i class=" fa fa-project-diagram" aria-hidden="true"></i>

					Roles</h3>
                </div>

                                    <div class="content-header-right col-md-8 col-12">
                        <div class="btn-group float-md-right">
                            <div class="heading-elements">
                                <a href="/permissions/role/create-role">
                                    <button type="button" class="btn btn-icon btn-success mr-1"><i
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
                <table class="table table-bordered  table-striped " id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Role Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                                                                                                            <tr>
                                                <td>1</td>
                                                <td>Super Admin</td>
                                                <td>Super Admin</td>
                                                <td>
                                                    <a href=""
                                                       class="btn btn-sm btn-info menu-icon btn_delete action_btn"
                                                       data-original-title="Details"
                                                       data-toggle="tooltip"
                                                       data-placement="top"><span
                                                                class="fa fa-list"></span></a>

                                                    <a href=""
                                                       data-original-title="Edit" data-toggle="tooltip"
                                                       data-placement="top"
                                                       class="btn btn-sm btn-primary menu-icon btn_edit action_btn"> <i
                                                                class="fa fa-edit"></i> </a>
                                                </td>
                                                                                            </tr>
                                                                                </tbody>
                                    </table>
                                </div>
                                </div>
                           
                            <div class="col-sm-12">
                                <div class="pagination1"></div>
                            </div>
                        </div>
                    </div>
                </section>
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
