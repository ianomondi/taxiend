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

          <!-- DataTales Example -->
            <input type="hidden" name="_token" value="DrLu34aJYpHJZP37ESBZrr9StopNe5QVuGfWQHBa">    <div class="app-content content">
                <div class="container-fluid ">
                    <div class="content-wrapper">
                        <div class="content-header row">
                            <div class="content-header-left col-md-4 col-12 mb-2">
                            </div>
                            <div class="col-md-6 col-12">
                                              </div>
                        </div>
                        <div class="content-body">
                            <section id="horizontal">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card shadow">
                                            <div class="card-header py-3">
                                                <div class="content-header row">
                                                    <div class="content-header-left col-md-8 mb-2">
                                                        <h3 class="content-header-title mb-0 d-inline-block">
                                                            <i class=" fa fa-car" aria-hidden="true"></i>
                                                            Rider Management</h3>
                                                    </div>
        
        
                                                                                                    <div class="content-header-right col-md-4 col-12">
                                                                  
                                                            <div class="btn-group float-md-right">
                                                                <div class="heading-elements">
                                                                    
                                                                    <a href="/addrider" data-original-title="Export" data-toggle="tooltip">
                                                                        <button type="button"
                                                                                class="btn btn-icon btn-primary mr-1"><i
                                                                                    class="fa fa-download"
                                                                                    title="Export To Excel"></i>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="btn-group float-md-right">
                                                                <div class="heading-elements">
                                                                    <a href="ridermanagement/addrider">
                                                                        <button type="button"
                                                                                class="btn btn-icon btn-success mr-1"><i
                                                                                    class="fa fa-plus"></i>
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                            </div>
                                            </div>
                                            <div class="card-header py-3">
                                                <!-- <h4 style="margin-bottom: 5px;font-size:20px" class="card-title"> -->
                                            <!-- Search Rider</h4> -->
        
                                                <form action="" method="post">
                                                    <input type="hidden" name="_token" value="DrLu34aJYpHJZP37ESBZrr9StopNe5QVuGfWQHBa">
                                                    <div class="table_search row ">
                                                        <div class="col-md-2 col-xs-4 form-group ">
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
        
                                                        <div class="col-md-3 col-xs-6 form-group ">
                                                            <div class="input-group">
                                                                <input type="text" name="keyword"
                                                                       placeholder="Enter Text Here"
                                                                       class="form-control col-md-12 col-xs-12" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2  col-xs-12 form-group ">
                                                            <button class="btn btn-primary" type="submit"><i
                                                                        class="fa fa-search"
                                                                        aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>SN</th>
                      <th>Rider Details</th>
                      <th>Trip Statistics</th>
                      <th>Wallet BL</th>
                      <th>Referral Code</th>
                      <th>SignUp Detail</th>
                      <th>Register Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>SN</th>
                      <th>Rider Details</th>
                      <th>Trip Statistics</th>
                      <th>Wallet BL</th>
                      <th>Referral Code</th>
                      <th>SignUp Detail</th>
                      <th>Register Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
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
