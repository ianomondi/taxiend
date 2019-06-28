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
                        <div class="col-12" style="height:80vh">
                            <div class="card shadow">
							 <div class="card-header py-3">
							   <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title mb-0 d-inline-block">					
					<i class=" fa fa-ban" aria-hidden="true"></i>
					Cancel Reasons </h3>
                </div>

                <div class="col-md-6 col-12">
                 
                </div>

                                    <div class="content-header-right col-md-2 col-12">
                        <div class="btn-group float-md-right">
                            <div class="heading-elements">
                                <button type="button" class="btn btn-icon btn-success mr-1"
                                        title="Add Cancel Reason" data-toggle="modal"
                                        data-target="#inlineForm">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                
            </div>
            </div>
                                <div class="">
                                    <form method="post" action="">
                                        <input type="hidden" name="_token" value="u8DIAkKJ5O3N8MxvkXYaJzFRcukpU9la4Agv5uBF">										 <div class="card-header py-3">

                                        <div class="table_search row ">
                                            <div class="col-md-2 col-xs-12 form-group ">
                                                <div class="input-group">
                                                    <input type="text" id="" name="reason"
                                                           placeholder="Search By Cancel Reason"
                                                           class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-12 form-group ">
                                                <div class="form-group">
                                                    <select class="form-control" name="reason_for"
                                                            id="reason_for">
                                                        <option value="">--Select Reason Type--</option>
                                                        <option value="1">Rider</option>
                                                        <option value="2">Driver</option>
                                                        <option value="3">Dispatcher</option>
                                                    </select>
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
                                </div>

                              <div class="card-body">
                        <div class="table-responsive">
                            <table class="table display nowrap table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Cancel Reason</th>
                                                <th>Reason For</th>
                                                <th>Status</th>
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


    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600"
                           id="myModalLabel33"><b>Add Cancel Reason                            (You are adding in EN)</b></label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" enctype="multipart/form-data" action="">
                    <input type="hidden" name="_token" value="u8DIAkKJ5O3N8MxvkXYaJzFRcukpU9la4Agv5uBF">                    <div class="modal-body">

                        <label>Reason For  <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control" name="reason_for"
                                    id="reason_for" required>
                                <option value="">--Select Reason Type--</option>
                                <option value="1">Riders Management</option>
                                <option value="2">Driver</option>
                                <option value="3">Dispatcher</option>
                            </select>
                        </div>

                        <label> Message                            <span class="text-danger">*</span> </label>
                        <div class="form-group">
                            <textarea class="form-control" id="reason" name="reason" rows="3"
                                      placeholder="Enter Cancel Reason"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn" data-dismiss="modal"
                               value="Close">
                        <input type="submit" class="btn btn-outline-primary btn" value="Add">
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
