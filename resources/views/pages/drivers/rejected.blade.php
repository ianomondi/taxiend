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

                <div class=" content-wrapper">

                <div class="content-body">
                    <section id="horizontal">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header py-3">
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-6 col-12 mb-2">
                                                <h3 class="content-header-title mb-0 d-inline-block">
                                                    <i class=" fa fa-taxi" aria-hidden="true"></i>
                                                    Rejected Drivers</h3>
                                            </div>
                                            <div class="content-header-right col-md-6 col-12">

                                                <div class="btn-group float-md-right">
                                                    <div class="heading-elements">
                                                        <div class="btn-group float-md-right">
                                                            <a href="">
                                                                <button type="button" class="btn btn-icon btn-success mr-1"><i class="fa fa-reply"></i>
                                                                </button>
                                                            </a>
                                                              <a href="" data-original-title="Export" data-toggle="tooltip">
                                                                <button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download" title="Export To Excel"></i>
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
                                               <th>Area Name</th>
                                               <th>Profile Image</th>
                                               <th>Driver Details</th>
                                               <th>Register Date</th>
                                               <th>Last Update</th>
                                               
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
                      </div>
                    </section>
                </div>
           
    </div>
</div>
<!-- End of Main Content -->
            
          </div>

          <!-- Content Row -->

          

            <!-- Area Chart -->
            

            <!-- Pie Chart -->
 

          <!-- Content Row -->
          

            <!-- Content Column -->


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
