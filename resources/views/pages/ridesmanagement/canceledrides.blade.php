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
        <div class="container-fluid">
        <div class="content-wrapper">
          
  <div class="card shadow mb-4">
     <div class="card-header py-3">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2">
                    <h3 class="content-header-title mb-0 d-inline-block">
					 <i class="m-1 fa fa-car" aria-hidden="true"></i>Cancelled Rides</h3>
                </div>
                <div class="content-header-right col-md-4 col-12">
                    <div class="btn-group float-md-right">
                        <div class="heading-elements">
                            <div class="btn-group float-md-right">
                                <div class="heading-elements">
                                    <a href="" data-original-title="Export" data-toggle="tooltip">
                                        <button type="button" class="btn btn-icon btn-primary mr-1"><i
                                                    class="fa fa-download"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
			  <div class="">
            
			 <div class="content-body">
                <section id="horizontal">
                    <div class="row">
                        <div class="col-12">
                                                        <div class="card">
                                <div class="card-body card-header p-3">
                                    <form method="post" action="">
                                        <input type="hidden" name="_token" value="zKAS8z2s1g30MKNjBZzSRR1PxJz2C11jq3ASsjz9">                                        <div class="table_search row">
                                             <div class="col-md-2 col-xs-12 form-group active-margin-top">
                                                 Search By:
                                                 </div>
                                            <div class="col-md-2 col-xs-12 form-group active-margin-top">
                                                <div class="input-group">
                                                    <input type="text" id="" name="booking_id"
                                                           placeholder="Ride Id"
                                                           class="form-control col-md-12 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-12 form-group active-margin-top">
                                                <div class="input-group">
                                                    <input type="text" id="" name="rider"
                                                           placeholder="Rider Details"
                                                           class="form-control col-md-12 col-xs-12">
                                                </div>
                                                <p>e.g. Phone No, Email</p>
                                            </div>
                                          

                                            <div class="col-md-2 col-xs-12 form-group active-margin-top">
                                                <div class="input-group">
                                                    <input type="text" id="" name="date"
                                                           placeholder=" Booking Date"
                                                           class="form-control col-md-12 col-xs-12 datepickersearch"
                                                           id="datepickersearch">
                                                </div>
                                            </div>


                                            <div class="col-sm-2  col-xs-12 form-group active-margin-top">
                                                <button class="btn btn-primary" type="submit" name="seabt12"><i
                                                            class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-content collapse show" style="margin:1%">
										<div class="table-responsive">
                                        <table  id="dataTable" class="table table-responsive display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Ride Type</th>
                                                <th>Rider Details</th>
                                                 <th>Ride Detail</th>
                                                <th>Pickup Location</th>
                                                <th>Drop Off Location</th>
                                                <th>Cancel Reason</th>
                                                <th>Current Status</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                                                        </tbody>
											</div>
                                        </table>
                            
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
