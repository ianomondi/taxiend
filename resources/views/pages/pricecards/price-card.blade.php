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
        
            <div class="app-content content">
                <div class="content-wrapper">
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="content-header-title mb-0 d-inline-block"><i class="far fa-money-bill-alt"></i> Pricing Card</h3>
                            <div class="btn-group float-md-right">
                                <div class="heading-elements">
                                    <div class="btn-group float-md-left">
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
                                        <a href="/pricecards/price-card/create-card">
                                            <button type="button" title="Add Pricing Card"
                                                    class="btn btn-icon btn-success mr-1"><i class="fa fa-plus"></i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                                </div>
                        <div class="card-header py-3">
                            <form action="" method="GET">
                                <div class="table_search">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4 form-group ">
                                            <div class="input-group">
                                                <select class="form-control" name="area_id"
                                                        id="area_id"
                                                        required>
                                                                                                        <option value="147"
                                                                > Nakuru</option>
                                                                                                        <option value="146"
                                                                > Nairobi</option>
                                                                                                        <option value="145"
                                                                > Gurugram</option>
                                                                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-2  col-xs-12 form-group ">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"
                                                                                             aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table display nowrap table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Area</th>
                                        <th>Service Type</th>
                                        <th>Vehicle Type</th>
                                        <th>Package</th>
                                                                            <th>Bill Calculation Type</th>
                                        <th>Base Fare</th>
                                        <th>Payment Mode</th>
                                        <th>Commission Type</th>
                                        <th>Comission Calculation Method</th>
                                        <th>Comission Value</th>
                                                                            <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
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
