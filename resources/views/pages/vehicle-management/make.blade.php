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
                  <div class="content-header row">
  
                      <div class="content-header-left col-md-4 col-12 mb-2">
  
                      </div>
                      <div class="col-md-12">
                                              </div>
                                              <div class="content-header-right col-md-2 col-12">
  
                          </div>
                                      </div>
                  <div class="card shadow mb-4">
  
                          <div class="card-header py-md-2">
                              <div class="row">
                                  <div class="col-md-6">
                                      <h3 class="content-header-title mb-0 d-inline-block">Vehicle Make</h3>
                                  </div>
                                                                  <div class="col-md-6">
  
                                      <button type="button" class="btn btn-icon btn-success mr-1 float-right"
                                              title="Add Vehicle Make" data-toggle="modal"
                                              data-target="#inlineForm">
                                          <i class="fa fa-plus"></i>
                                      </button>
                                  </div>
                                                              </div>
  
                          </div>
  
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table display nowrap table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                  <tr>
                                      <th>Sr.No</th>
                                      <th>Vehicle Make</th>
                                      <th>Logo</th>
                                      <th>Description</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody></tbody>
                              </table>
                          </div>
                      </div>
  
  
                      <div class="col-sm-12">
                          <div class="pagination1"><ul class="pagination" role="navigation">
          
                      <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                  <span class="page-link" aria-hidden="true">&lsaquo;</span>
              </li>
          
          
                      
              
              
                                                                          <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                  <li class="page-item"><a class="page-link" href="">2</a></li>
                                                          
          
                      <li class="page-item">
                  <a class="page-link" href="" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
              </li>
              </ul>
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
                             id="myModalLabel33"><b> Add</b> Vehicle Make  (You are adding in EN)</label>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form method="post" enctype="multipart/form-data" action="">
                      <input type="hidden" name="_token" value="Wf9RDzSMNzEpkN8T2X8IJgT4wEstdnNYpf3ENoj6">                    <div class="modal-body">
                          <label>Vehicle Make   <span class="text-danger">*</span></label>
                          <div class="form-group">
                              <input type="text" class="form-control" id="vehicle_make" name="vehicle_make"
                                     placeholder="Please Enter The Name" required>
                          </div>
  
                          <label> Description                            <span class="text-danger">*</span>  </label>
                          <div class="form-group">
                              <textarea class="form-control" id="description" name="description" rows="3"
                                        placeholder="Please Enter Description"></textarea>
                          </div>
  
                          <label>  Logo                            <span class="text-danger">*</span>  </label><span style="color: blue">(Size 100*100 px)</span><i
                                  class="fa fa-info-circle fa-1"
                                  data-toggle="tooltip"
                                  data-placement="top"
                                  title="This is vehicle brand logo"></i>
                          <div class="form-group">
                              <input type="file" class="form-control" id="vehicle_make_logo" name="vehicle_make_logo"
                                     placeholder="Logo" required>
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
