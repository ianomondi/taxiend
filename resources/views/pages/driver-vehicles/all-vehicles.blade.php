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
                                      <i class=" fa fa-exclamation-circle" aria-hidden="true"></i>
                                      All Vehicles</h3>
                              </div>
                              <div class="col-md-6">
  
                              </div>
                          </div>
  
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table display nowrap table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                  <tr>
                                      <th>Sr.No</th>
                                      <th>Driver Details</th>
                                      <th>Vehicle Type</th>
                                      <th>Service Type</th>
                                      <th>Vehicle Number</th>
                                      <th>Color</th>
                                      <th>Image</th>
                                      <th>Number Plate Image</th>
                                      <th>Action</th>
                                      <th>Uploaded On</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                                                                                                                           
                                              
                                  </tbody>
                              </table>
                          </div>
                      </div>
  
  
                      <div class="col-sm-12">
                          <div class="pagination"><ul class="pagination" role="navigation">
          
                      <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                  <span class="page-link" aria-hidden="true">&lsaquo;</span>
              </li>
          
          
                      
              
              
                                                                          <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                  <li class="page-item"><a class="page-link" href="">2</a></li>
                                                                                  <li class="page-item"><a class="page-link" href="">3</a></li>
                                                                                  <li class="page-item"><a class="page-link" href="">4</a></li>
                                                                                  <li class="page-item"><a class="page-link" href="">5</a></li>
                                                                                  <li class="page-item"><a class="page-link" href="">6</a></li>
                                                                                  <li class="page-item"><a class="page-link" href="">7</a></li>
                                                          
          
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
  
      <div class="modal fade text-left" id="cancelbooking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
           aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <label class="modal-title text-text-bold-600" id="myModalLabel33">Are You Sure You Want To Reject This Vehicle</label>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="" method="post">
                      <input type="hidden" name="_token" value="Wf9RDzSMNzEpkN8T2X8IJgT4wEstdnNYpf3ENoj6">                    <div class="modal-body">
                                                  <input type="hidden" name="doc_id" id="booking_id" value="">
  
                      </div>
                      <div class="modal-footer">
                          <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Close">
                          <input type="submit" class="btn btn-outline-primary btn-lg" value="Reject Vehicle">
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
