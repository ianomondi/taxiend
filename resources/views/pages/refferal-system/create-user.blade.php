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
    
                    <div class="content-body">
                        <section id="validation">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="content-header-title mb-0 d-inline-block"><i class="fas fa-user-plus"></i> Referral system</h3>
                                            <div class="btn-group float-md-right">
                                                <a href="/refferal-system/user-system/">
                                                    <button type="button" class="btn btn-icon btn-success mr-1"><i class="fa fa-reply"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-content collapse show">
                                            <div class="card-body">
                                                <form method="POST" enctype="multipart/form-data"
                                                      class="steps-validation wizard-notification"
                                                      enctype="multipart/form-data"
                                                      action="">
                                                    <input type="hidden" name="_token" value="AIzaSyAvMAYYCuI6-Eux-T6S3E6xJEOoUmDrMsQ">                                                <fieldset>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="location3">Country</label>
                                                                    <select class="form-control" name="country_id"
                                                                            id="country_id"
                                                                            required>
                                                                        <option value="">Select Country</option>
                                                                                                                                                <option value="10">Kenya</option>
                                                                                                                                                <option value="22">India</option>
                                                                                                                                        </select>
                                                                                                                                </div>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="location3">Sender Discount</label>
                                                                    <select class="form-control required" name="sender_discount"
                                                                            id="sender_discount"
                                                                            required>
                                                                        <option value="1">Yes</option>
                                                                        <option value="2">No</option>
                                                                    </select>
                                                                                                                                </div>
                                                            </div>
    
    
                                                        </div>
    
    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="location3">Receiver Discount</label>
                                                                    <select class="form-control required"
                                                                            name="receiver_discount" id="receiver_discount"
                                                                            required>
                                                                        <option value="1">Yes</option>
                                                                        <option value="2">No</option>
                                                                    </select>
                                                                                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Start Date<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control datepicker bg-this-color"
                                                                           id="datepicker" name="start_date" readonly
                                                                           placeholder="Please Enter Start Date ">
                                                                                                                                </div>
                                                            </div>
    
    
                                                        </div>
    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        End Date<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control datepicker bg-this-color"
                                                                           id="datepicker" name="end_date" readonly
                                                                           placeholder="End Date">
                                                                                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="location3">Offer Type</label>
                                                                    <select class="form-control required" name="offer_type"
                                                                            id="offer_type"
                                                                            required>
                                                                        <option value="1">Free Ride</option>
                                                                        <option value="2">Discount</option>
                                                                        <option value="3">Fixed Amount</option>
                                                                    </select>
                                                                                                                                </div>
                                                            </div>
    
    
                                                        </div>
    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="location">
                                                                        Offer Value<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="offer_value"
                                                                           name="offer_value"
                                                                           placeholder="Offer Value" required>
                                                                                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="location3">Offer Type</label>
                                                                    <select class="form-control required" name="status"
                                                                            id="status"
                                                                            required>
                                                                        <option value="1">Active</option>
                                                                        <option value="2">Deactive</option>
                                                                    </select>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
    
                                                    </fieldset>
                                                    <div class="form-actions right" style="margin-bottom: 3%">
                                                        <button type="submit" class="btn btn-primary float-right">
                                                            <i class="fa fa-check-circle"></i> Save
                                                        </button>
                                                    </div>
                                                </form>
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
