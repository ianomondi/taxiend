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
                <div class="card shadow ">
                    <div class="card-header py-3 ">

                        <h3 class="content-header-title mb-0 d-inline-block"><i class="fas fa-universal-access"></i>Customer Support</h3>
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
                    <div class="card-header py-3">
                        <form method="post" action="">
                            <input type="hidden" name="_token" value="u8DIAkKJ5O3N8MxvkXYaJzFRcukpU9la4Agv5uBF">                            <div class="table_search row">

                                <div class="col-md-2 col-xs-12 form-group ">
                                    <div class="input-group">
                                        <select class="form-control" name="application"
                                                id="application">
                                            <option value="">--Select Application--</option>
                                            <option value="2">Driver Application</option>
                                            <option value="1">User Application</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2 col-xs-12 form-group ">
                                    <div class="input-group">
                                        <input type="text" id="" name="name"
                                               placeholder="Search By Name"
                                               class="form-control col-md-12 col-xs-12">
                                    </div>
                                </div>

                                <div class="col-md-2 col-xs-12 form-group ">
                                    <div class="input-group">
                                        <input type="text" id="" name="date"
                                               placeholder="Search By Request Date"
                                               class="form-control col-md-12 col-xs-12 datepickersearch"
                                               id="datepickersearch">
                                    </div>
                                </div>

                                <div class="col-sm-2  col-xs-12 form-group ">
                                    <button class="btn btn-primary" type="submit" name="seabt12"><i
                                                class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <th>Sr.No</th>
                                <th>Application</th>
                                <th>Name</th>
                                <th>Email Id</th>
                                <th>Moblie No.</th>
                                <th>Query</th>
                                <th>Created At</th>
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
