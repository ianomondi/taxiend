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
                                        <h4 class="content-header-title mb-0 d-inline-block"><i class="fa fa-signal"></i> One Signal</h4>
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
                                                                    User Application Key<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="user_application_key" name="user_application_key"
                                                                       placeholder="User Application Key"
                                                                       value="3ecf2d12-0bf5-42c4-9e7a-113d2b2118c0"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    User Rest Key<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="user_rest_key"
                                                                       name="user_rest_key"
                                                                       placeholder="User Rest Key"
                                                                       value="NGUyZDAyZGEtNzc3Yi00MDQ4LThiNTQtMzIzM2UxODNkZjNh" required>
                                                                                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Driver Application Key<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="driver_application_key"
                                                                       name="driver_application_key"
                                                                       placeholder="Driver Application Key"
                                                                       value="37357d39-6e42-4d47-9a83-5d9dc824dae5"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Driver Rest Key<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control" id="driver_rest_key"
                                                                       name="driver_rest_key"
                                                                       placeholder="Driver Rest Key"
                                                                       value="OWEzMTVmYjctZmY1Ni00ZDU4LWI1OTAtN2JlNzAzMGMyYTQ5" required>
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
