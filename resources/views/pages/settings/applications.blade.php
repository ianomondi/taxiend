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
                                    </div>

                <div class="content-body">
                    <section id="validation">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="content-header-title mb-0 d-inline-block"><i class="fab fa-android"></i> Applications</h3>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <form method="POST" class="steps-validation wizard-notification"
                                                  enctype="multipart/form-data"
                                                  action="">
                                                <input type="hidden" name="_token" value="6QbXM76ozo2sNmeqjUyCJ4LJgF0RhWZYgDm6AgvR">                                                <fieldset>
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    iOS User Application Url<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="url" class="form-control"
                                                                       id="ios_user_link" name="ios_user_link"
                                                                       placeholder="iOS User Application Url"
                                                                       value=""
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    iOS Driver Application Url<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="url" class="form-control" id="ios_driver_link"
                                                                       name="ios_driver_link"
                                                                       placeholder="iOS Driver Application Url"
                                                                       value=""
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Android User Application Url<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="url" class="form-control"
                                                                       id="android_user_link"
                                                                       name="android_user_link"
                                                                       placeholder="Android User Application Url"
                                                                       value=""
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Android Driver Application Url<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="url" class="form-control"
                                                                       id="android_driver_link"
                                                                       name="android_driver_link"
                                                                       placeholder="Android Driver Application Url"
                                                                       value=""
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                    </div>

                                                </fieldset>
                                                <div class="form-actions right" style="margin-bottom: 3%">
                                                    <button type="submit" class="btn btn-primary float-right">
                                                        <i class="fa fa-check-square-o"></i> Save
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
