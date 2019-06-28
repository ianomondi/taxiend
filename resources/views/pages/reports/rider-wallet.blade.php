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

        <div class=container-fluid>
            <div class="app-content content">
                <div class="content-wrapper">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="content-header-title mb-0 d-inline-block"><i class="fas fa-wallet"></i> Riders Wallet Reports</h3>
                            <div class="btn-group float-md-right">
                                <div class="heading-elements">
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
                            </div>
                        </div>
                        <div class="card-header py-3">
                            <form action="">
                                <div class="table_search">
                                    <div class="row">
                                        <div class="col-md-2 col-xs-4 form-group ">
                                            <div class="input-group">
                                                <select class="form-control" name="parameter"
                                                        id="parameter"
                                                        required>
                                                    <option value="1">By Name</option>
                                                    <option value="2">By Email</option>
                                                    <option value="3">By Phone</option>
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="col-md-3 col-xs-6 form-group ">
                                            <div class="input-group">
                                                <input type="text" name="keyword"
                                                       placeholder="Enter Text Here"
                                                       class="form-control col-md-12 col-xs-12" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-2  col-xs-12 form-group ">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"
                                                                                             aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table display nowrap table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Rider Details</th>
                                        <th>Booking No</th>
                                        <th>Amount</th>
                                        <th>Type of Rider</th>
                                        <th>Transaction Date</th>
                                        <th>Via</th>
                                        <th>Narration</th>
                                        <th>Referance Number</th>
                                        <th>Description</th>
                                        <th>Wallet Balance</th>
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
    
        <div class="modal fade text-left" id="sendNotificationModelUser" tabindex="-1" role="dialog"
             aria-labelledby="myModalLabel33"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <label class="modal-title text-text-bold-600" id="myModalLabel33">Send Notification To User</label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="_token" value="AIzaSyAvMAYYCuI6-Eux-T6S3E6xJEOoUmDrMsQ">                    <div class="modal-body">
                            <label>Title: </label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="title"
                                       name="title"
                                       placeholder="Title" required>
                            </div>
    
                            <label>Message: </label>
                            <div class="form-group">
                               <textarea class="form-control" id="message" name="message"
                                         rows="3"
                                         placeholder="Message"></textarea>
                            </div>
    
                            <label>Image: </label>
                            <div class="form-group">
                                <input type="file" class="form-control" id="image"
                                       name="image"
                                       placeholder="Image" required>
                                <input type="hidden" name="persion_id" id="persion_id">
                            </div>
    
                            <label>Url: </label>
                            <div class="form-group">
                                <input type="url" class="form-control" id="url"
                                       name="url"
                                       placeholder="Url" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                            <input type="submit" class="btn btn-outline-primary btn-lg" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
        
        <div class="modal fade text-left" id="addMoneyModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <label class="modal-title text-text-bold-600" id="myModalLabel33">Add Money In Driver Account</label>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <input type="hidden" name="_token" value="AIzaSyAvMAYYCuI6-Eux-T6S3E6xJEOoUmDrMsQ">                    <div class="modal-body">
                            <label>Select Payment Method: </label>
                            <div class="form-group">
                                <select class="form-control" name="payment_method" id="payment_method" required>
                                    <option value="1">Cash</option>
                                    <option value="2">Non Cash</option>
                                </select>
                            </div>
    
                            <label>Enter Amount: </label>
                            <div class="form-group">
                                <input type="text" name="amount" placeholder="Enter Amount"
                                       class="form-control" required>
                                <input type="hidden" name="add_money_user_id" id="add_money_driver_id">
                            </div>
    
                        </div>
                        <div class="modal-footer">
                            <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                            <input type="submit" class="btn btn-outline-primary btn-lg" value="Add">
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
