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
                        <h3 class="content-header-title mb-0 d-inline-block"><i class="fas fa-universal-access"></i> SOS</h3>
                                                        <div class="btn-group float-md-right">
                                    <div class="heading-elements">
                                        <button type="button" class="btn btn-icon btn-success mr-1"
                                                title="Add Sos Number" data-toggle="modal"
                                                data-target="#inlineForm">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                            </div>
                    <div class="card-header py-3">
                        <form method="post" action="">
                            <input type="hidden" name="_token" value="u8DIAkKJ5O3N8MxvkXYaJzFRcukpU9la4Agv5uBF">                            <div class="table_search">
                                <div class="row">
                                    <div class="col-md-3 form-group ">
                                        <div class="input-group">
                                            <input type="text" id="" name="name"
                                                   placeholder="Search By Name"
                                                   class="form-control col-md-12 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="col-md-3 form-group ">
                                        <div class="input-group">
                                            <input type="text" id="" name="number"
                                                   placeholder="Search By Number"
                                                   class="form-control col-md-12 col-xs-12">
                                        </div>
                                    </div>


                                    <div class="col-sm-2 form-group ">
                                        <button class="btn btn-primary" type="submit" name="seabt12"><i
                                                    class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Name</th>
                                    <th>Sos Number</th>
                                    <th>Status</th>
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
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600"
                           id="myModalLabel33"><b>Add Sos Number                            (You are adding in EN)</b></label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" enctype="multipart/form-data" action="">
                    <input type="hidden" name="_token" value="u8DIAkKJ5O3N8MxvkXYaJzFRcukpU9la4Agv5uBF">                    <div class="modal-body">

                        <label>Name<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name"
                                   name="name" placeholder="Please Enter Name"
                                   required>
                        </div>

                        <label> Sos Number<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="number"
                                   name="number" placeholder="Please Enter Number"
                                   required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary" data-dismiss="modal"
                               value="Close">
                        <input type="submit" class="btn btn-outline-primary" value="Add">
                    </div>
                </form>
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
