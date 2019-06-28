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
                <div class="content-header row">
                    <div class="col-md-6 col-12">
                                            </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h3 class="content-header-title mb-0 d-inline-block"><i class="fas fa-universal-access"></i> Notifications</h3>
                                                    <div class="btn-group float-md-right">
                                <div class="heading-elements">
                                    <a title="Send Notification" href="notifications/createnotification">
                                        <button class="btn btn-icon btn-success mr-1"><i
                                                    class="fa fa-plus"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                                            </div>
                    <div class="card-header py-3">
                        <form method="post" action="">
                            <input type="hidden" name="_token" value="zKAS8z2s1g30MKNjBZzSRR1PxJz2C11jq3ASsjz9">                            <div class="table_search">
                                <div class="row">
                                <div class="col-md-2  form-group ">
                                    <div class="input-group">
                                        <input type="text" id="" name="title"
                                               placeholder="Search By Title"
                                               class="form-control col-md-12 col-xs-12">
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-12 form-group ">
                                    <div class="input-group">
                                        <select class="form-control" name="application"
                                                id="application">
                                            <option value="">--Select Application--</option>
                                            <option value="1">Driver Application</option>
                                            <option value="2">User Application</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2 col-xs-12 form-group ">
                                    <div class="input-group">
                                        <input type="text" id="" name="date"
                                               placeholder="Search By Date"
                                               class="form-control col-md-12 col-xs-12 datepickersearch"
                                               id="datepickersearch">
                                    </div>
                                </div>

                                <div class="col-sm-2  col-xs-12 form-group ">
                                    <button class="btn btn-primary" type="submit" name="seabt12"><i
                                                class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                                    <div class="col-sm-4 float-right form-group">
                                        <a href="">
                                            <button type="button" class="btn btn-icon btn-primary float-right mr-1" data-original-title="Export To Excel" data-toggle="tooltip">
                                                <i class="fa fa-download"></i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                           <table id="dataTable" class="table table-responsive display nowrap table-striped table-bordered ">
									
                                <thead>
                                    <th>Sr.No</th>
                                    <th>Area</th>
                                    <th>Title</th>
                                    <th>Message</th>
                                    <th>Image</th>
                                    <th>Url</th>
                                    <th>Application</th>
                                    <th>Receiver</th>
                                    <th>Time</th>
                                    <th>Show In Promotion</th>
                                    <th>Expiry Date</th>
                                    <th>Action</th>
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
