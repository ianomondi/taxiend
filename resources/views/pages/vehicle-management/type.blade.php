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

        <div class="app-content content">
          <div class="container-fluid">
              <div class=" content-wrapper">
                  <div class="card shadow mb-4">
                                              <div class="card-header py-md-2">
                              <div class="row">
                                  <div class="col-md-6">
                                      <h3 class="content-header-title mb-0 d-inline-block">
                                          <i class=" fa fa-taxi" aria-hidden="true"></i>
  
                                          Vehicle Type</h3>
                                  </div>
                                  <div class="col-md-6">
  
                                      <button type="button" class="btn btn-icon btn-success mr-1 float-right"
                                              title="Add Vehicle"
                                              data-toggle="modal"
                                              data-target="#inlineForm">
                                          <i class="fa fa-plus"></i>
                                      </button>
                                      </a>
                                  </div>
                              </div>
  
                          </div>
                                          <div class="card-body">
                          <div class="table-responsive">
                              <table id="dataTable"
                                     class="table table-responsive display nowrap table-striped table-bordered ">
                                  <thead>
                                  <tr>
                                      <th>Sr.No</th>
                                      <th>Vehicle Type</th>
                                      <th>Rank</th>
                                      <th>Image</th>
                                      <th>Map Icon</th>
                                      <th>Description</th>
                                                                          <th>Sequence</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tfoot></tfoot>
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
  
      
      <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
           aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <label class="modal-title text-text-bold-600"
                             id="myModalLabel33"><b>Add</b> Vehicle                        (You are adding in EN)</label>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form method="post" enctype="multipart/form-data" action="">
                      <input type="hidden" name="_token" value="Wf9RDzSMNzEpkN8T2X8IJgT4wEstdnNYpf3ENoj6">                    <div class="modal-body">
                          <label>Vehicle Type <span class="text-danger">*</span></label>
                          <div class="form-group">
                              <input type="text" class="form-control" id="vehicle_name" name="vehicle_name"
                                     placeholder="Please Enter The Name" required>
                          </div>
  
                          <label>Rank <span class="text-danger">*</span></label>
                          <div class="form-group">
                              <input type="number" class="form-control" id="vehicle_rank" name="vehicle_rank"
                                     placeholder="Please Enter The Rank" required>
                          </div>
  
                          <label>Sequence <span class="text-danger">*</span></label>
                          <div class="form-group">
                              <input type="number" class="form-control" id="sequence" name="sequence"
                                     placeholder="Sequence" required>
                          </div>
  
                          <label> Description                            <span class="text-danger">*</span></label>
                          <div class="form-group">
                              <textarea class="form-control" id="description" name="description" rows="3"
                                        placeholder="Please Enter Description"></textarea>
                          </div>
  
                          <label>  Choose a Image                            <span class="text-danger">*</span> </label><span style="color: blue">(Size 100*100 px)</span>
                          <i class="fa fa-info-circle fa-1"
                             data-toggle="tooltip"
                             data-placement="top"
                             title="This Image show on User app homescreen"></i>
                          <div class="form-group">
                              <input type="file" class="form-control" id="vehicle_image" name="vehicle_image"
                                     placeholder="Image" required>
                          </div>
  
                          <label> Choose a Map Icon                            <span class="text-danger">*</span>  </label><span style="color: blue">(Size 60*60 px)</span><i
                                  class="fa fa-info-circle fa-1"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="This map icon show on User app homescreen"></i>
                          <div class="form-group">
                              <input type="file" class="form-control" id="vehicle_map_image" name="vehicle_map_image"
                                     placeholder="Password" required>
                          </div>
  
  
                          <div class="form-group">
                              <label>
                                  <input type="checkbox" value="1" name="ride_now"
                                         id="ride_now"/>Available For Ride Now                            </label><br>
                              <label>
                                  <input type="checkbox" value="1" name="ride_later"
                                         id="ride_later"/>Available For Ride Later                            </label><br>
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
