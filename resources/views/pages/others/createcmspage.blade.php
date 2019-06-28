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
                <div class="content-body">
                    <section id="validation">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="content-header-title mb-0 d-inline-block"><i class="fa fa-plus"></i> Add Cms Pages</h3>
                                        <div class="btn-group float-md-right">
                                            <a href="/others/cmspages">
                                                <button type="button" class="btn btn-icon btn-success mr-1"><i class="fa fa-reply"></i>
                                                </button>
                                            </a>
                                        </div>
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
                                                  enctype="multipart/form-data" action="">
                                                <input type="hidden" name="_token" value="u8DIAkKJ5O3N8MxvkXYaJzFRcukpU9la4Agv5uBF">                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="emailAddress5">
                                                                    Pages Type<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control" name="page" id="page" required>
                                                                    <option value="">--Select Page Type--</option>
                                                                                                                                            <option value="about_us">About Us</option>
                                                                                                                                            <option value="help_center">Help Center</option>
                                                                                                                                            <option value="privacy_policy">Privacy Policy</option>
                                                                                                                                    </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="emailAddress5">
                                                                    Application<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control" name="application"
                                                                        id="application" required>
                                                                    <option value="2">Driver</option>
                                                                    <option value="1">User</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastName3">
                                                                    Page Title<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="title"
                                                                       name="title" placeholder="Page Title"
                                                                       required>
                                                                                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="emailAddress5">
                                                                    Description<span class="text-danger">*</span>
                                                                </label>
                                                                <textarea class="form-control" id="description"
                                                                          name="description" rows="5"
                                                                          placeholder="Description"></textarea>
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
