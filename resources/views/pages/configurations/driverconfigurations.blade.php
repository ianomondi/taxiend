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
                                        <h4 class="content-header-title mb-0 d-inline-block"><i class="fa fa-signal"></i> Driver Configuration</h4>
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
                                                                    Bill Due Period(in days)<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                   name="bill_due_period"
                                                                   placeholder="Bill Due Period(in days)"
                                                                   value=""
                                                                required>
                                                                                                                        </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Grace Period(in days)<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                   name="bill_grace_period"
                                                                   placeholder="Grace Period(in days)"
                                                                   value=""

                                                                   required>
                                                                                                                        </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Fee after grace period<span class="text-danger">*</span>
                                                                </label>
                                                                 <input type="text" class="form-control"
                                                                   name="fee_after_grace_period"
                                                                   placeholder="Fee after grace period"
                                                                   value=""
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
