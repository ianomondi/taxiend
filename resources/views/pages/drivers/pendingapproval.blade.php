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
          
            <div class="content-body">
                <section id="horizontal">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow">
							 <div class="card-header py-3">
							  <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">
					<i class=" fa fa-exclamation-circle" aria-hidden="true"></i>
					
					Pending Drivers</h3>
                </div>
                <div class="content-header-right col-md-4 col-12">
                    <div class="btn-group float-md-right">
                        <a href="">
                            <button type="button" class="btn btn-icon btn-success mr-1"><i class="fa fa-reply"></i>
                            </button>
                        </a>
                         <a href="" data-original-title="Export" data-toggle="tooltip">
                            <button type="button"
                                    class="btn btn-icon btn-primary mr-1"><i class="fa fa-download" title="Export To Excel"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            </div>

                              <h6 style="margin-left: 2%;margin-top: 9px;margin-bottom: -5px;" class="card-title">
                                  Search Driver</h4>
                              <div class="">
                                  <form action="" method="GET">
                                      <div class="table_search row m-2">
                                          <div class="col-md-2 col-xs-4 form-group active-margin-top">
                                              <div class="input-group">
                                                  <select class="form-control" name="parameter"
                                                          id="parameter"
                                                          required>
                                                      <option value="1">By Name</option>
                                                      <option value="2">By Email</option>
                                                      <option value="3">By Phone</option>
                                                  </select>
                                              </div>
                                          </div>

                                          <div class="col-md-3 col-xs-6 form-group active-margin-top">
                                              <div class="input-group">
                                                  <input type="text" name="keyword"
                                                         placeholder="Enter Text Here"
                                                         class="form-control col-md-12 col-xs-12" required>
                                              </div>
                                          </div>
                                          <div class="col-sm-2 col-xs-12 form-group active-margin-top">
                                              <button class="btn btn-primary" type="submit"><i class="fa fa-search"
                                                                                               aria-hidden="true"></i>
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                               <div class="card-body">
								  <div class="table-responsive">
									<table class="table display nowrap table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Area Name</th>
                                                <th>Driver Details</th>
                                                <th>Register Date</th>
                                                <th>Last Update</th>
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
    <br>
    

        <!-- /.container-fluid -->

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
