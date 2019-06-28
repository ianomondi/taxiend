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
                    <div class="col-md-8">
                                            </div>
                </div>
                                <div class="content-body">
                    <section id="validation">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="content-header-title mb-0 d-inline-block"><i class="fab fa-android"></i> Application Configurations</h3>
                                        <a class="heading-elements-toggle"><i class="ft-ellipsis-h font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <form method="POST" class="steps-validation wizard-notification"
                                                  enctype="multipart/form-data"
                                                  action="">
                                                <input type="hidden" name="_token" value="u8DIAkKJ5O3N8MxvkXYaJzFRcukpU9la4Agv5uBF">                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Home Screen View<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control" name="home_screen_view"
                                                                        id="home_screen_view" required>
                                                                    <option value="1"
                                                                      >Category View</option>
                                                                    <option value="2"
                                                                     selected >Service View</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    User Application Default Language<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="user_default_language"
                                                                        id="user_default_language" required>
                                                                                                                                            <option value="en" selected>English</option>
                                                                                                                                    </select>
                                                                                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Driver Application Default Language<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="driver_default_language"
                                                                        id="driver_default_language" required>
                                                                                                                                            <option value="en" selected>English</option>
                                                                                                                                    </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Pickup Location Color<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control" id="pickup_color"
                                                                       name="pickup_color"
                                                                       placeholder="Pickup Location Color"
                                                                       value="#ff80ff"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Drop Location Color<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control" id="dropoff_color"
                                                                       name="dropoff_color"
                                                                       placeholder="Drop Location Color"
                                                                       value="#808040"
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
