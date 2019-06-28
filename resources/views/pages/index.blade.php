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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

              <div class="col-lg-6">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Site Statistics</h4>
                          <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
                      </div>
                      <div class="row" style="padding: 25px;">
  
                          <div class="col-xl-6 col-md-6 mb-4">
                              <div class="card border-left-primary shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <a href=" /ridermanagement ">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Riders</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800">63</div>
                                              </a>
                                          </div>
                                          <div class="col-auto">
                                              <i class="fas fa-users fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
  
                          <!-- Earnings (Monthly) Card Example -->
                          <div class="col-xl-6 col-md-6 mb-4">
                              <div class="card border-left-success shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <a href="/drivers/alldrivers">
                                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Drivers</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800">64</div>
                                              </a>
                                          </div>
                                        <div class="col-auto">
                                              <i class="fas fa-user-astronaut fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
  
  
                          <div class="col-xl-6 col-md-6 mb-4">
                              <div class="card border-left-primary shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <a href="/corporate">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Corporate</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                              </a>
                                          </div>
                                          <div class="col-auto">
                                              <i class="fas fa-building fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
  
                          <!-- Pending Requests Card Example -->
                          <div class="col-xl-6 col-md-6 mb-4">
                              <div class="card border-left-warning shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <a href="/earnings ">
                                                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Earnings</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800">K</div>
                                              </a>
                                          </div>
                                          <div class="col-auto">
                                              <i class="far fa-money-bill-alt fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Trips Statistics</h4>
                          <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
                      </div>
                      <div class="row" style="padding: 25px;">
  
                          <div class="col-xl-6 col-md-6 mb-4">
                              <div class="card border-left-primary shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <a href="">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800">6</div>
                                              </a>
                                          </div>
                                          <div class="col-auto">
                                              <i class="fas fa-boxes fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-xl-6 col-md-6 mb-4">
                              <div class="card border-left-success shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <a href="/ridesmanagement/activerides">
                                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">On Going</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                              </a>
                                          </div>
  
                                          <div class="col-auto">
                                              <i class="fas fa-plane-departure fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
  
  
                          <div class="col-xl-6 col-md-6 mb-4">
                              <div class="card border-left-primary shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <a href=" ridesmanagement/canceledrides">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Cancelled</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                              </a>
                                          </div>
                                          <div class="col-auto">
                                              <i class="fas fa-times-circle fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-xl-6 col-md-6 mb-4">
                              <div class="card border-left-warning shadow h-100 py-2">
                                  <div class="card-body">
                                      <div class="row no-gutters align-items-center">
                                          <div class="col mr-2">
                                              <a href="">
                                                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Complete</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                                              </a>
                                          </div>
                                          <div class="col-auto">
                                              <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
                      <br>
        
<!-- Recent Orders -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Id</th>
                <th>Rider Details</th>
                <th>Driver Details</th>
                <th>Ride Detail</th>
                <th>Pickup Location</th>
                <th>Drop Off Location</th>
                <th>Payment</th>
                <th>Current Status</th>
                <th>Booking Date</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
                        
          <!-- Content Row -->

          

            <!-- Area Chart -->
            

            <!-- Pie Chart -->
 

          <!-- Content Row -->
          

            <!-- Content Column -->


        
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
