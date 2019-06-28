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
                    <div class="content-header-left col-md-4 col-12 mb-2">
                        <h3 class="content-header-title mb-0 d-inline-block">General</h3>
                    </div>
                    <div class="col-md-8">
                                            </div>
                </div>
                                <div class="content-body">
                    <section id="validation">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="form-section"><i class="fa fa-cog"></i> General Configuration</h4>
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
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Driver's Wallet<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control" name="driver_wallet_status"
                                                                        id="driver_wallet_status" required>
                                                                    <option value="1" >On</option>
                                                                    <option value="2" selected>Off</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Report Issue Email<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="email" class="form-control"
                                                                       id="report_issue_email"
                                                                       name="report_issue_email"
                                                                       placeholder="Report Issue Email"
                                                                       value="taximark@gmail.com"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Report Issue Phone Number<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="report_issue_phone"
                                                                       name="report_issue_phone"
                                                                       placeholder="Report Issue Phone Number"
                                                                       value="9576897589797"
                                                                       required>
                                                                                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Android User Maintenance Mode<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="android_user_maintenance_mode"
                                                                        id="android_user_maintenance_mode" required>
                                                                    <option value="1"
                                                                      >On</option>
                                                                    <option value="2"
                                                                     selected >Off</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Android User App Version<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="android_user_version"
                                                                       name="android_user_version"
                                                                       placeholder="Android User App Version"
                                                                       value="1.4"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Android User App Mandatory Update<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="android_user_mandatory_update"
                                                                        id="android_user_mandatory_update" required>
                                                                    <option value="1"
                                                                     selected >On</option>
                                                                    <option value="2"
                                                                      >Off</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Android Driver Maintenance Mode<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="android_driver_maintenance_mode"
                                                                        id="android_driver_maintenance_mode" required>
                                                                    <option value="1"
                                                                      >On</option>
                                                                    <option value="2"
                                                                     selected >Off</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Android Driver App Version<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="android_driver_version"
                                                                       name="android_driver_version"
                                                                       placeholder="Android Driver App Version"
                                                                       value="1.5"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Android Driver App Mandatory Update<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="android_driver_mandatory_update"
                                                                        id="android_driver_mandatory_update" required>
                                                                    <option value="1"
                                                                     selected >On</option>
                                                                    <option value="2"
                                                                      >Off</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    iOS User App Maintenance Mode<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="ios_user_maintenance_mode"
                                                                        id="ios_user_maintenance_mode" required>
                                                                    <option value="1"
                                                                     selected >On</option>
                                                                    <option value="2"
                                                                      >Off</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    iOS User App Version<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="ios_user_version"
                                                                       name="ios_user_version"
                                                                       placeholder="iOS User App Version"
                                                                       value="0"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    iOS User App Mandatory Update<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="ios_user_mandatory_update"
                                                                        id="ios_user_mandatory_update" required>
                                                                    <option value="1"
                                                                     selected >On</option>
                                                                    <option value="2"
                                                                      >Off</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    iOS Driver App Maintenance Mode<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="ios_driver_maintenance_mode"
                                                                        id="ios_driver_maintenance_mode" required>
                                                                    <option value="1"
                                                                     selected >On</option>
                                                                    <option value="2"
                                                                      >Off</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    iOS Driver App Version<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="ios_driver_version"
                                                                       name="ios_driver_version"
                                                                       placeholder="iOS Driver App Version"
                                                                       value="0"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    iOS Driver App Mandatory Update<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="ios_driver_mandatory_update"
                                                                        id="ios_driver_mandatory_update" required>
                                                                    <option value="1"
                                                                     selected >On</option>
                                                                    <option value="2"
                                                                      >Off</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    User's Wallet Short Cut Values                                                                </label>
                                                                                                                                <input type="text" class="form-control"
                                                                       id="user_wallet_amount"
                                                                       name="user_wallet_amount[]"
                                                                       placeholder="Value 1"
                                                                       value=" 200 "
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label style="visibility: hidden" for="firstName3">
                                                                    User's Wallet Short Cut Values<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="user_wallet_amount"
                                                                       name="user_wallet_amount[]"
                                                                       placeholder="Value 2"
                                                                       value=" 300 "
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label style="visibility: hidden" for="firstName3">
                                                                    User's Wallet Short Cut Values<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="user_wallet_amount"
                                                                       name="user_wallet_amount[]"
                                                                       placeholder="Value 3"
                                                                       value=" 400 "
                                                                       required>
                                                                                                                            </div>
                                                        </div>
                                                        </div>

                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Driver's Wallet Short Cut Values                                                                </label>
                                                                                                                                <input type="text" class="form-control"
                                                                       id="driver_wallet_amount"
                                                                       name="driver_wallet_amount[]"
                                                                       placeholder="Value 1"
                                                                       value=" 100 "
                                                                       required>
                                                                                                                            </div>
                                                        </div>
                                                        

                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label style="visibility: hidden" for="firstName3">
                                                                    User's Wallet Short Cut Values<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="driver_wallet_amount"
                                                                       name="driver_wallet_amount[]"
                                                                       placeholder="Value 2"
                                                                       value=" 200 "
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label style="visibility: hidden" for="firstName3">
                                                                    User's Wallet Short Cut Values<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="driver_wallet_amount"
                                                                       name="driver_wallet_amount[]"
                                                                       placeholder="Value 3"
                                                                       value=" 300 "
                                                                       required>
                                                                                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="firstName3">
                                                                    Driver's location update Timeband ( in seconds)<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="location_update_timeband"
                                                                       name="location_update_timeband"
                                                                       placeholder="Driver's location update Timeband ( in seconds)"
                                                                       value="5"
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
