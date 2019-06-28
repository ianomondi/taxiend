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
                                        <h3 class="content-header-title mb-0 d-inline-block"><i class="fa fa-plus"></i> Add Corporate</h3>
                                        <div class="btn-group float-md-right">
                                            <div class="heading-elements">
                                                <div class="btn-group float-md-right">
                                                    <a href="/corporate">
                                                        <button type="button" class="btn btn-icon btn-success mr-1"><i
                                                                    class="fa fa-reply"></i></button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <form method="POST" class="steps-validation wizard-notification"
                                                  enctype="multipart/form-data" action="http://app.apporiotaxi.com/v11/public/merchant/admin/corporate">
                                                <input type="hidden" name="_token" value="zKAS8z2s1g30MKNjBZzSRR1PxJz2C11jq3ASsjz9">                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="location3">Country</label>
                                                                <select class="form-control" name="country" id="country"
                                                                        required>
                                                                    <option value="">Select Country</option>
                                                                                                                                            <option data-min="12"
                                                                                data-max="12"
                                                                                value="+254">Kenya</option>
                                                                                                                                            <option data-min="10"
                                                                                data-max="10"
                                                                                value="+91">India</option>
                                                                                                                                    </select>
                                                                                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Corporate Name<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="corporate_name"
                                                                       name="corporate_name"
                                                                       placeholder="Corporate Name" required>
                                                                                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Corporate Email<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="email" class="form-control" id="email"
                                                                       name="email" placeholder="Email Id"
                                                                       required>
                                                                                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Moblie No.<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="user_phone"
                                                                       name="phone"
                                                                       placeholder="Moblie No." required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Corporate Address<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="address"
                                                                       name="address"
                                                                       placeholder="Corporate Address"
                                                                       required>
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
