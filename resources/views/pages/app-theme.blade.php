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
                <div class="content-body">
                    <section id="validation">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="content-header-title mb-0 d-inline-block"><i
                                                    class="fas fa-fw fa-users"></i> Application Theme</h4>
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                                                                        <form method="POST" class="steps-validation wizard-notification"
                                                  enctype="multipart/form-data"
                                                  action="">
                                                <input type="hidden" name="_token" value="vozNnunmHyh2Y5vuNqtNlxRL5zI8r4wicRLnDyUh">                                                <fieldset>
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Primary Color User<span
                                                                            class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control"
                                                                       id="primary_color_user" name="primary_color_user"
                                                                       placeholder="User Application Key"
                                                                       value="#84807b"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Primary Color Driver<span
                                                                            class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control"
                                                                       id="primary_color_driver"
                                                                       name="primary_color_driver"
                                                                       placeholder="User Rest Key"
                                                                       value="#897876"
                                                                        required>
                                                                                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Chat button color<span
                                                                            class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control"
                                                                       id="chat_button_color"
                                                                       name="chat_button_color"
                                                                       placeholder="Driver Application Key"
                                                                       value="#888077"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Chat button color driver<span
                                                                            class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control"
                                                                       id="chat_button_color_driver"
                                                                       name="chat_button_color_driver"
                                                                       placeholder="Driver Rest Key"
                                                                       value="#897e76"
                                                                        required>
                                                                                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Share button color<span
                                                                            class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control"
                                                                       id="share_button_color"
                                                                       name="share_button_color"
                                                                       placeholder="Driver Application Key"
                                                                       value="#847c7b"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Navigation button color driver<span
                                                                            class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control"
                                                                       id="share_button_color_driver"
                                                                       name="share_button_color_driver"
                                                                       placeholder="Driver Rest Key"
                                                                       value="#887b77"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Cancel button color<span
                                                                            class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control"
                                                                       id="cancel_button_color"
                                                                       name="cancel_button_color"
                                                                       placeholder="Driver Application Key"
                                                                       value="#84807b"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Cancel button color driver<span
                                                                            class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control"
                                                                       id="cancel_button_color_driver"
                                                                       name="cancel_button_color_driver"
                                                                       placeholder="Driver Rest Key"
                                                                       value="#877d78"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Call button color<span
                                                                            class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control"
                                                                       id="call_button_color"
                                                                       name="call_button_color"
                                                                       placeholder="Driver Application Key"
                                                                       value="#868079"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Call button color driver<span
                                                                            class="text-danger">*</span>
                                                                </label>
                                                                <input type="color" class="form-control"
                                                                       id="call_button_color_driver"
                                                                       name="call_button_color_driver"
                                                                       placeholder="Driver Rest Key"
                                                                       value="#857d7a"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                    </div>

                                                </fieldset>
                                                <div class="form-actions right" style="margin-bottom: 3%">
                                                <!---->
                                                    <button type="submit" class="btn btn-primary float-right">
                                                        <i class="fa fa-check-circle"></i> Save
                                                    </button>
                                                    <!---->
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
    <br>
    <br>
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
