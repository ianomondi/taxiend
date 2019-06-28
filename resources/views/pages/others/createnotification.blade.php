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
                                        </div>

                <div class="content-body">
                    <section id="basic-tabs-components">
                        <div class="row match-height">
                            <div class="col-lg-12">
                                <div class="card shadow mb-4">
                                    <div class="card-content">
                                        <div class="card-header py-3">
                                            <h3 class="content-header-title mb-0 d-inline-block"><i class="fas fa-bell"></i> Send Notification</h3>
                                            <div class="btn-group float-md-right">
                                                <a href="/others/notifications">
                                                    <button type="button" class="btn btn-icon btn-success mr-1"><i class="fa fa-reply"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs nav-top-border no-hover-bg">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="base-tab11" data-toggle="tab"
                                                       aria-controls="tab11" href="#tab11" aria-expanded="true"><i
                                                                class="fa fa-users"></i> All                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="base-tab12" data-toggle="tab"
                                                       aria-controls="tab12" href="#tab12" aria-expanded="false"><i
                                                                class="fa fa-map"></i> Area Wise                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1 pt-1">
                                                <div role="tabpanel" class="tab-pane active" id="tab11"
                                                     aria-expanded="true"
                                                     aria-labelledby="base-tab11">
                                                    <form method="POST" class="steps-validation wizard-notification"
                                                          enctype="multipart/form-data"
                                                          action="">
                                                        <input type="hidden" name="_token" value="zKAS8z2s1g30MKNjBZzSRR1PxJz2C11jq3ASsjz9">                                                        <fieldset>


                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="location3">Application                                                                            :</label>
                                                                        <select class="form-control"
                                                                                name="application"
                                                                                id="application"
                                                                                onchange="DriverNotification(this.value)"
                                                                                required>
                                                                            <option value="">
                                                                                --Select Application--
                                                                            </option>
                                                                            <option value="1">Driver Application</option>
                                                                            <option value="2">User Application</option>
                                                                        </select>

                                                                                                                                            </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="lastName3">
                                                                            Title<span class="text-danger">*</span>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                               id="title"
                                                                               name="title"
                                                                               placeholder="Please Enter Title"
                                                                               required>
                                                                                                                                            </div>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="emailAddress5">
                                                                            Notification Text<span class="text-danger">*</span>
                                                                        </label>
                                                                        <textarea class="form-control" id="message"
                                                                                  name="message"
                                                                                  rows="3" required
                                                                                  placeholder="Please Enter Notification Text"></textarea>
                                                                                                                                            </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="ProfileImage">
                                                                            Image<span class="text-danger">*</span>
                                                                        </label>
                                                                        <input style="height: 0%;" type="file" class="form-control"
                                                                               id="image"
                                                                               name="image" required
                                                                               placeholder="Image">
                                                                                                                                            </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="emailAddress5">
                                                                            Url<span class="text-danger">*</span>
                                                                        </label>
                                                                        <input type="url" class="form-control"
                                                                               id="url"
                                                                               name="url" required
                                                                               placeholder="Please Enter Url">
                                                                                                                                            </div>
                                                                </div>

                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                
                                                                
                                                                

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="emailAddress5">
                                                                            Expiry Date<span class="text-danger">*</span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="form-control datepicker"
                                                                               id="datepicker-end" name="date"
                                                                               placeholder="Select Expiry Date For Showing in Promotion"
                                                                               disabled>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>
                                                                            <input type="checkbox" value="1"
                                                                                   name="expery_check"
                                                                                   id="expery_check"
                                                                                   onclick="show()">
                                                                            Show In Promotion                                                                        </label>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </fieldset>
                                                        <div class="form-actions right" style="margin-bottom: 3%">
                                                            <button type="submit" class="btn btn-primary float-right">
                                                                <i class="fa fa-check-circle"></i> Send                                                            </button>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="tab-pane" id="tab12" aria-labelledby="base-tab12">
                                                    <form method="POST" class="steps-validation wizard-notification"
                                                          enctype="multipart/form-data"
                                                          action="">
                                                        <input type="hidden" name="_token" value="zKAS8z2s1g30MKNjBZzSRR1PxJz2C11jq3ASsjz9">                                                        <fieldset>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="firstName3">
                                                                            Area Name<span class="text-danger">*</span>
                                                                        </label>
                                                                        <select class="form-control" name="area"
                                                                                id="area" required>
                                                                            <option value="">--Select Area--
                                                                            </option>
                                                                                                                                                            <option value="145"> Gurugram </option>
                                                                                                                                                            <option value="146"> Nairobi </option>
                                                                                                                                                            <option value="147"> Nakuru </option>
                                                                                                                                                    </select>
                                                                                                                                            </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="lastName3">
                                                                            Title<span class="text-danger">*</span>
                                                                        </label>
                                                                        <input type="text" class="form-control"
                                                                               id="title"
                                                                               name="title"
                                                                               placeholder="Please Enter Title"
                                                                               required>
                                                                                                                                            </div>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="emailAddress5">
                                                                            Notification Text<span class="text-danger">*</span>
                                                                        </label>
                                                                        <textarea class="form-control" id="message"
                                                                                  name="message"
                                                                                  rows="3" required
                                                                                  placeholder="Please Enter Notification Text"></textarea>
                                                                                                                                            </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="ProfileImage">
                                                                            Image<span class="text-danger">*</span>
                                                                        </label>
                                                                        <input style="height: 0%" type="file" class="form-control"
                                                                               id="image"
                                                                               name="image" required
                                                                               placeholder="Image">
                                                                                                                                            </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="emailAddress5">
                                                                            Url<span class="text-danger">*</span>
                                                                        </label>
                                                                        <input type="url" class="form-control"
                                                                               id="url"
                                                                               name="url"
                                                                               placeholder="Please Enter Url"
                                                                               required>
                                                                                                                                            </div>
                                                                </div>

                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                

                                                                
                                                                
                                                                
                                                                
                                                                

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="emailAddress5">
                                                                            Expiry Date<span class="text-danger">*</span>
                                                                        </label>
                                                                        <input type="text"
                                                                               class="form-control datepicker"
                                                                               id="datepicker-backend" name="date"
                                                                               placeholder="Select Expiry Date For Showing in Promotion"
                                                                               disabled>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>
                                                                            <input type="checkbox" value="1"
                                                                                   name="expery_check"
                                                                                   id="expery_check_two" 
                                                                                   onclick="show1()">
                                                                            Show In Promotion                                                                        </label>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </fieldset>
                                                        <div class="form-actions right" style="margin-bottom: 3%">
                                                            <button type="submit" class="btn btn-primary float-right">
                                                                <i class="fa fa-check-circle"></i> Send                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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

    <script>
        function show() {
            if (document.getElementById("expery_check").checked = true) {
                document.getElementById('datepicker-end').disabled = false;
            }
        }

        function show1() {
            if (document.getElementById("expery_check_two").checked = true) {
                document.getElementById('datepicker-backend').disabled = false;
            }
        }
    </script>
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
