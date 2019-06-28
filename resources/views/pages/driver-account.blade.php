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
                    <div class="card shadow ">
                        <div class="card-header py-3 ">
                                                    <h3 class="content-header-title mb-0 d-inline-block"><i
                                        class="fas fa-fw fa-money-bill"></i>Driver Accounts</h3>
                               <div class="btn-group float-md-right">
                                    <div class="heading-elements">
                                        <a title="Add Generate Bill"
                                           href="">
                                            <button class="btn btn-icon btn-warning mr-1">Generate Bill                                        </button>
                                        </a>
                                    </div>
                                </div>
                        </div>
                        <div class="card-header py-3">
                            <form action="" method="GET">
                                <div class="table_search row">
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
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"
                                                                                         aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table display nowrap table-striped table-bordered" id="dataTable" width="100%"
                                                   cellspacing="0">
                                                <thead>
                                                    <th>Sr.No</th>
                                                    <th>Driver Details</th>
                                                    <th>Area</th>
                                                    <th>Bill Outstanding</th>
                                                    <th>Unbilled Amount</th>
                                                    <th>Total Oustanding</th>
                                                    <th>No. Of Trips</th>
                                                    <th>Earning</th>
                                                    <th>Company Profit</th>
                                                    <th>Wallet Balance</th>
                                                    <th>Register Date</th>
                                                    <th>Bills</th>
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
                <br>
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
