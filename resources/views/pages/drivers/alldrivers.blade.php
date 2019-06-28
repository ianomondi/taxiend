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
               <!-- Page Heading -->
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
               </div>
               <!-- Content Row -->
              
                           <div class="content-body">
                              <section id="horizontal">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="card">
                                          <div class="card-header py-3">
                                             <div class="content-header row">
                                                <div class="content-header-left col-md-4 col-12 mb-2">
                                                   <h3 class="content-header-title mb-0 d-inline-block">
                                                      <i class=" fa fa-taxi" aria-hidden="true"></i>
                                                      All Driver
                                                   </h3>
                                                </div>
                                                <div class="content-header-right col-md-8 col-12">
                                                   <div class="btn-group float-md-right">
                                                      <div class="heading-elements">
                                                         <a href="/drivers/alldrivers/approved">
                                                         <button class="btn btn-secondary btn-sm" style="position:relative;">
                                                         <i class="fa fa-bell"></i> Basic Signup Complete Driver                                                                <span style="position:absolute !important; left:0 !important; right: inherit !important; top:-10px !important;"
                                                            class="badge badge-pill badge-default badge-info badge-default badge-up">14</span>
                                                         </button>
                                                         </a>
                                                         <a href="/drivers/alldrivers/pendingapproval">
                                                         <button class="btn btn-secondary btn-sm" style="position:relative;">
                                                         <i class="fa fa-bell"></i> Pending Driver Approvals                                                                    <span style="position:absolute !important; left:0 !important; right: inherit !important; top:-10px !important;"
                                                            class="badge badge-pill badge-default badge-info badge-default badge-up">8</span>
                                                         </button>
                                                         </a>
                                                         <a href="/drivers/alldrivers/rejected">
                                                         <button class="btn btn-secondary btn-sm" style="position:relative;">
                                                         <i class="fa fa-bell"></i> Rejected Drivers                                                                    <span style="position:absolute !important; left:0 !important; right: inherit !important; top:-10px !important;"
                                                            class="badge badge-pill badge-default badge-info badge-default badge-up">0</span>
                                                         </button>
                                                         </a>
                                                         <a href="/drivers/alldrivers/createdriver">
                                                         <button type="button" class="btn btn-icon btn-success mr-1"
                                                            title="Add Driver"><i class="fa fa-plus"></i>
                                                         </button>
                                                         </a>
                                                         <div class="btn-group float-md-right">
                                                            <div class="heading-elements">
                                                               <a href=""  data-original-title="Export" data-toggle="tooltip">
                                                               <button type="button" class="btn btn-icon btn-primary mr-1"><i
                                                                  class="fa fa-download" title="Export To Excel"></i>
                                                               </button>
                                                               </a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card-header py-3">
                                             <div class="">
                                                <form action="" method="GET">
                                                   <div class="table_search row m-2">
                                                      <div class="col-md-2 col-xs-4 form-group active-margin-top">
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
                                                      <div class="col-md-2 col-xs-4 form-group active-margin-top">
                                                         <div class="input-group">
                                                            <select class="form-control" name="area_id"
                                                               id="area_id">
                                                               <option value="">Selerct Area</option>
                                                               <option value="147"
                                                                  > Nakuru</option>
                                                               <option value="146"
                                                                  > Nairobi</option>
                                                               <option value="145"
                                                                  > Gurugram</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-3 col-xs-6 form-group active-margin-top">
                                                         <div class="input-group">
                                                            <input type="text" name="keyword"
                                                               placeholder="Enter Text Here"
                                                               class="form-control col-md-12 col-xs-12">
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-2  col-xs-12 form-group active-margin-top">
                                                         <button class="btn btn-primary" type="submit"><i class="fa fa-search"
                                                            aria-hidden="true"></i>
                                                         </button>
                                                      </div>
                                                   </div>
                                                </form>
                                             </div>
                                             <div class="collapse show">
                                                <div class="card-body card-dashboard">
                                                   <table id="dataTable" class="table table-responsive display nowrap table-striped table-bordered ">
                                                      <thead>
                                                         <tr>
                                                            <th>ID</th>
                                                            <th>Area Name</th>
                                                            <th>Driver Details</th>
                                                            <th>Last Location Track</th>
                                                            <th>Trips Statistics</th>
                                                            <th>Earning</th>
                                                            <th>Company Profit</th>
                                                            <th>Register Date</th>
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
                                                <div class="pagination1">
                                                   <ul class="pagination" role="navigation">
                                                      <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                                         <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                                      </li>
                                                      <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                      <li class="page-item"><a class="page-link" href="">2</a></li>
                                                      <li class="page-item"><a class="page-link" href="">3</a></li>
                                                      <li class="page-item"><a class="page-link" href="">4</a></li>
                                                      <li class="page-item"><a class="page-link" href="">5</a></li>
                                                      <li class="page-item">
                                                         <a class="page-link" href="" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                                                      </li>
                                                   </ul>
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
                     <div class="modal fade text-left" id="sendNotificationModel" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel33"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <label class="modal-title text-text-bold-600" id="myModalLabel33">Send Notification To Driver</label>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <form action="" method="post" enctype="multipart/form-data">
                                 <input type="hidden" name="_token" value="4BwN7qjpWYD4MtM7yf5REIz3L6BGWzHmhESNtrOv">                    
                                 <div class="modal-body">
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
                                          placeholder="Image">
                                       <input type="hidden" name="persion_id" id="persion_id">
                                    </div>
                                    <label>Url: </label>
                                    <div class="form-group">
                                       <input type="url" class="form-control" id="url"
                                          name="url"
                                          placeholder="Url(Optional)">
                                       <label class="danger">Example: https://www.google.com/</label>
                                    </div>
                                    <label>Show In Promotion: </label>
                                    <div class="form-group">
                                       <input type="checkbox" value="1" name="expery_check"
                                          id="expery_check_two" onclick="show()">
                                    </div>
                                    <label>Expiry Date: </label>
                                    <div class="form-group">
                                       <input type="text" class="form-control datepicker"
                                          id="datepicker-backend" name="date"
                                          placeholder="Select Expiry Date For Showing in Promotion" disabled>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                    <input type="submit" class="btn btn-outline-primary btn-lg" value="Send">
                                 </div>
                              </form>
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
                                 <input type="hidden" name="_token" value="4BwN7qjpWYD4MtM7yf5REIz3L6BGWzHmhESNtrOv">                    
                                 <div class="modal-body">
                                    <label>Select Payment Method: </label>
                                    <div class="form-group">
                                       <select class="form-control" name="payment_method" id="payment_method" required>
                                          <option value="1">Cash</option>
                                          <option value="2">Non Cash</option>
                                       </select>
                                    </div>
                                    <label>Receipt Number: </label>
                                    <div class="form-group">
                                       <input type="text" name="receipt_number" placeholder="Receipt Number"
                                          class="form-control" required>
                                    </div>
                                    <label>Enter Amount: </label>
                                    <div class="form-group">
                                       <input type="text" name="amount" placeholder="Enter Amount"
                                          class="form-control" required>
                                       <input type="hidden" name="add_money_driver_id" id="add_money_driver_id">
                                    </div>
                                    <label>Description: </label>
                                    <div class="form-group">
                                       <textarea class="form-control" id="title1" rows="3" name="description"
                                          placeholder="Description"></textarea>
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
                     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                     <script>
                        function show() {
                            if (document.getElementById("expery_check_two").checked = true) {
                                document.getElementById('datepicker-backend').disabled = false;
                            }
                        }
                        
                        function DeleteEvent(id) {
                            var token = $('[name="_token"]').val();
                            swal({
                                title: "Are you sure?",
                                text: "Once deleted, you will not be able to recover this Driver!",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            }).then((isConfirm) => {
                                if (isConfirm) {
                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': token
                                        },
                                        type: "POST",
                                        data:{
                                            id: id,
                                        },
                                        url: "",
                                    }).done(function (data) {
                                        swal({
                                            title: "DELETED!",
                                            text: data,
                                            type: "success",
                                        });
                                        window.location.href = "";
                                    });
                                } else {
                                    swal("Rider Safe!");
                                }
                            });
                        }
                     </script>
                     <br>
                     <br>
                  
                  
                  <!-- End of Main Content -->
               
               <!-- Content Row -->
               <!-- Area Chart -->
               <!-- Pie Chart -->
               <!-- Content Row -->
               <!-- Content Column -->
            </div>
            <!-- /.container-fluid -->
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