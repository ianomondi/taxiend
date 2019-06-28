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
                      <div class="content-header row">
  
                          <div class="content-header-left col-md-4 col-12 mb-2">
  
                          </div>
                          <div class="col-md-12">
                                                      </div>
                      </div>
  
                          <div class="card-header py-md-2">
                              <div class="row">
                                  <div class="col-md-6">
                                      <h3 class="content-header-title mb-0 d-inline-block">Vehicle Model Management</h3>
                                  </div>
                                                                  <div class="col-md-6">
  
                                      <button type="button" class="btn btn-icon btn-success mr-1 float-right"
                                              title="Add Vehicle Model" data-toggle="modal"
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
                                      <th>Vehicle Type</th>
                                      <th>Vehicle Make</th>
                                      <th>Vehicle Model</th>
                                      <th>Description</th>
                                      <th> Number Of Seats</th>
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
                                                                                  <li class="page-item"><a class="page-link" href="">3</a></li>
                                                          
          
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
                             id="myModalLabel33"><b>Add</b> Vehicle Model  (You are adding in EN)</label>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form method="post" enctype="multipart/form-data" action="">
                      <input type="hidden" name="_token" value="Wf9RDzSMNzEpkN8T2X8IJgT4wEstdnNYpf3ENoj6">                    <div class="modal-body">
  
                          <label> Vehicle Type                            <span class=" text-danger">*</span> </label>
                          <div class="form-group">
                              <select class="form-control" name="vehicletype" id="vehicletype" required>
                                  <option value="">--Select Vehicle Type--</option>
                                                                      <option value="173"> Basic  </option>
                                                                      <option value="174"> Comfort  </option>
                                                                      <option value="175"> Ordinary  </option>
                                                                      <option value="176"> All types  </option>
                                                                      <option value="177"> Nafuu  </option>
                                                              </select>
                          </div>
  
                          <label>Vehicle Make <span class=" text-danger">*</span></label>
                          <div class="form-group">
                              <select class="form-control" name="vehiclemake" id="vehiclemake" required>
                                  <option value="">--Select Vehicle Make--</option>
                                                                      <option value="229"> Maruti Suzuki </option>
                                                                      <option value="230"> Audi </option>
                                                                      <option value="231"> Toyota </option>
                                                                      <option value="232"> Honda </option>
                                                                      <option value="233"> Nissan </option>
                                                                      <option value="234"> Mitsubishi </option>
                                                                      <option value="235"> Mazda </option>
                                                                      <option value="236"> Volkswagen </option>
                                                                      <option value="237"> Other </option>
                                                                      <option value="238"> Daihatsu </option>
                                                                      <option value="239"> Kia </option>
                                                                      <option value="240"> Renault </option>
                                                                      <option value="241"> suzuki </option>
                                                                      <option value="242"> Nafuu </option>
                                                                      <option value="243"> Subaru </option>
                                                              </select>
                          </div>
  
                          <label>  Vehicle Model                            <span class=" text-danger">*</span> </label>
                          <div class="form-group">
                              <input type="text" class="form-control" id="vehicle_model" name="vehicle_model"
                                     placeholder="Please Enter The Name" required>
                          </div>
  
                          <label>  Number Of Seats                            <span class=" text-danger">*</span></label>
                          <div class="form-group">
                              <input type="number" class="form-control" id="vehicle_seat" name="vehicle_seat"
                                     placeholder="Please Enter Number Of Seats" required>
                          </div>
  
                          <label> Description                            <span class=" text-danger">*</span></label>
                          <div class="form-group">
                              <textarea class="form-control" id="description" name="description" rows="3"
                                        placeholder="Please Enter Description"></textarea>
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
