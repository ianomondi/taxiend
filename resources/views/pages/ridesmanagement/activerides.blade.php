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
		<div class="content-wrapper">
          <div class="card shadow">
           <div class="card-header py-3">
			  <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2">
				 <!-- <h1 class="h3 mb-2 text-gray-800"> -->
				  <h3 class="content-header-title mb-0 d-inline-block">
					 <i class="m-1 fa fa-car" aria-hidden="true"></i> Active Rides</h3>
				 <!-- <i class=" m-1 fa fa-car" aria-hidden="true"></i> -->
				 <!-- Active Rides</h1> -->
				 </div>
               
                </div>
            </div>
            </div>
		
			 <div class="content-body">
                <section id="basic-tabs-components">
                    <div class="row match-height">
                        <div class="col-lg-12">
                                                                                                                <div class="card">
                                <div class="card-content " style="margin:1%">
                                    <ul class="nav nav-tabs nav-top-border no-hover-bg" id="myTab">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="base-tab11" data-toggle="tab"
                                               aria-controls="tab11" href="#tab11" aria-expanded="true"><i
                                                        class="fa fa-cog"></i>Ride Now</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="base-tab12" data-toggle="tab"
                                               aria-controls="tab12" href="#tab12" aria-expanded="false"><i
                                                        class="fa fa-clock"></i>Ride later</a>
                                        </li>
                                    </ul>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="tab11" aria-expanded="true"
                                                 aria-labelledby="base-tab11">
                                                <form action="" method="post">
                                                    <input type="hidden" name="_token" value="zKAS8z2s1g30MKNjBZzSRR1PxJz2C11jq3ASsjz9">                                                    <div class="table_search row card-header p-3 ">
                                                        
													    <div class="col-md-2 active-margin-top">
													        Search By :
													        </div>
                                                        <div class="col-md-2 col-xs-12 form-group active-margin-top">
                                                            <div class="">
                                                                <input id="" name="booking_id"
                                                                       placeholder="Ride Id"
                                                                       class="form-control"
                                                                       type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-xs-12 form-group active-margin-top">
                                                            <div class="">
                                                                <input id="" name="rider"
                                                                       placeholder="Rider Details"
                                                                       class="form-control"
                                                                       type="text">
                                                             <p>e.g. Phone No, Email</p>       
                                                            </div>
                                                       
                                                        </div>
                                                        <div class="col-md-2 col-xs-12 form-group active-margin-top">
                                                            <div class="">
                                                                <input id="" name="driver"
                                                                       placeholder=" Driver Details"
                                                                       class="form-control"
                                                                       type="text">
                                                                  <p>e.g. Phone No, Email</p>    
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 col-xs-12 form-group active-margin-top">
                                                            <button class="btn btn-primary" type="submit"
                                                                    name="seabt12"><i class="fa fa-search"
                                                                                      aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        
                                                       <div class="col-md-2 active-margin-top">
                                                            <a href="" data-original-title="Export" data-toggle="tooltip">
                                                                <button type="button" class="float right btn btn-icon btn-primary mr-1 float-right"><i
                                                                            class="fa fa-download"
                                                                            title="Export To Excel"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                   
                                                </form>
												
													<table class="table-responsive table display nowrap table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
													<div class="p-1">
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Rider Details</th>
                                                        <th>Driver Details</th>
                                                        <th>Request Via</th>
                                                        <th>Ride Detail</th>
                                                        <th>Pickup Location</th>
                                                        <th>Drop Off Location</th>
                                                        <th>Estimated</th>
                                                        <th>Payment Mode</th>
                                                        <th>Current Status</th>
                                                        <th>Booking Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody></tbody>
													</div>
                                                </table>
                                                
												<div class="col-sm-12">
                                                    <div class="pagination1"></div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab12" aria-labelledby="base-tab12">
                                                <form method="post"
                                                      action="">
                                                    <input type="hidden" name="_token" value="zKAS8z2s1g30MKNjBZzSRR1PxJz2C11jq3ASsjz9">                                                    <div class="table_search row card-header p-3">
                                                         <div class="col-sm-2 active-margin-top">
													        Search By :
													        </div>
                                                        <div class="col-md-2 col-xs-12 form-group active-margin-top">
                                                            <div class="">
                                                                <input id="" name="booking_id"
                                                                       placeholder="Ride Id"
                                                                       class="form-control"
                                                                       type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-xs-12 form-group active-margin-top">
                                                            <div class="">
                                                                <input id="" name="rider"
                                                                       placeholder="Rider Details"
                                                                       class="form-control"
                                                                       type="text">
                                                                         <p> e.g. Phone No, Email</p>       
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-xs-12 form-group active-margin-top">
                                                            <div class="">
                                                                <input id="" name="driver"
                                                                       placeholder=" Driver Details"
                                                                       class="form-control"
                                                                       type="text">
                                                                        <p> e.g. Phone No, Email</p>     
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2  col-xs-12 form-group active-margin-top">
                                                            <button class="btn btn-primary" type="submit"
                                                                    name="seabt12"><i class="fa fa-search"
                                                                                      aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-2 active-margin-top">
                                                                        <a href="">
                                                                            <button type="button" class="float-right btn btn-icon btn-primary mr-1"><i
                                                                                        class="fa fa-download"
                                                                                        title="Export To Excel"> </i>
                                                                            </button>
                                                                        </a>
                                    
                                                        </div>
                                                    </div>
                                                </form>
													
											
											<div class="table-responsive m-2">
													<table class="table table-bordered" id="dataTable2" width="100%" >
                                                    <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Rider Details</th>
                                                        <th>Driver Details</th>
                                                        <th>Request Via</th>
                                                         <th>Ride Detail</th>
                                                        <th>Pickup Location</th>
                                                        <th>Drop Off Location</th>
                                                        <th>Estimated</th>
                                                        <th>Payment Mode</th>
                                                        <th>Current Status</th>
                                                        <th>Booking Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody></tbody>
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
                    </div>
                </section>
            </div>
      
        </div>
      
    </div>
    </div>

    <div class="modal fade text-left" id="cancelbooking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Are You Sure You Want To Cancel This Booking</label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                    <input type="hidden" name="_token" value="zKAS8z2s1g30MKNjBZzSRR1PxJz2C11jq3ASsjz9">                    <div class="modal-body">
                        
                        <label>Additional Notes: </label>
                        <div class="form-group">
                            <textarea class="form-control" id="title1" rows="3" name="description"
                                      placeholder="Additional Notes"></textarea>
                        </div>
                        <input type="hidden" name="booking_id" id="booking_id" value="">

                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Cancel Booking">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
 
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
