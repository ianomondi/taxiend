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
                    <div class="col-md-8">
                                            </div>
                </div>
                                <div class="content-body">
                    <section id="validation">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="content-header-title mb-0 d-inline-block"><i class="fa fa-car"></i> Booking</h3>
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

                                                    <h4 class="form-section" style="color: black"><i
                                                                class="fa fa-taxi"></i> General Configuration</h4><hr>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="google_key">
                                                                    Google Api Key<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                       id="google_key"
                                                                       name="google_key"
                                                                       placeholder="Please enter Google Api key"
                                                                       value="AIzaSyA8M9gAGweshJ74YNfYBrPf4SjxIoWED8E"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="additional_note">Additional Note On Ride Request Enable/Disable</label>
                                                                <select class="form-control" name="additional_note"
                                                                        id="additional_note"
                                                                        required>
                                                                    <option value="1" >Yes</option>
                                                                    <option value="2"  selected >No</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="driver_request_timeout">
                                                                    Driver Request Timeout(In Seconds)<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="number" class="form-control"
                                                                       id="driver_request_timeout"
                                                                       name="driver_request_timeout"
                                                                       placeholder="Driver Request Timeout(In Seconds)"
                                                                       value="50"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="tracking_screen_refresh_timeband">
                                                                    Tracking Screen Refresh Timeband(In Seconds)<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="number" class="form-control"
                                                                       id="tracking_screen_refresh_timeband"
                                                                       name="tracking_screen_refresh_timeband"
                                                                       placeholder="Tracking Screen Refresh Timeband(In Seconds)"
                                                                       value="20"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="slide_button">
                                                                    Slide Button<span class="text-danger">*</span>
                                                                </label>
                                                                <select class="form-control"
                                                                        name="slide_button"
                                                                        id="slide_button" required>
                                                                    <option value="1" >Yes</option>
                                                                    <option value="2" selected>No</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="drop_location_request">Drop Location Request Enable/Disable</label>
                                                                <select class="form-control" name="drop_location_request"
                                                                        id="drop_location_request"
                                                                        required>
                                                                    <option value="1"  selected >Yes</option>
                                                                    <option value="2" >No</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="estimate_fare_request">Estimate Fare Request Enable/Disable</label>
                                                                <select class="form-control" name="estimate_fare_request"
                                                                        id="estimate_fare_request"
                                                                        required>
                                                                    <option value="1"  selected >Yes</option>
                                                                    <option value="2" >No</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="number_of_driver_user_map">
                                                                    Number of Driver's on User Application Map<span class="text-danger">*</span>
                                                                </label>
                                                                <input type="number" class="form-control"
                                                                       id="number_of_driver_user_map"
                                                                       name="number_of_driver_user_map"
                                                                       placeholder="Please enter Number of Driver"
                                                                       value="20"
                                                                       required>
                                                                                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="booking_eta">ETA Show on User Enable/Disable</label>
                                                                <select class="form-control" name="booking_eta"
                                                                        id="booking_eta"
                                                                        required>
                                                                    <option value="1"  selected >Yes</option>
                                                                    <option value="2" >No</option>
                                                                </select>
                                                                                                                            </div>
                                                        </div>

                                                    </div>



                                                                                                            <br>
                                                        <h4 class="form-section" style="color: black"><i
                                                                    class="fa fa-taxi"></i> Booking Allocation Setttigs(Normal)</h4><hr>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="ridenowdistance">
                                                                        Distance radius for Ride now Rides(In Km)<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="ridenowdistance"
                                                                           name="normal_ride_now_radius"
                                                                           placeholder="Please enter the radius (in km)"
                                                                           value="5"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="normal_ride_now_request_driver">
                                                                        Send Ride Now Request To Number of Drivers<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                           id="normal_ride_now_request_driver"
                                                                           name="normal_ride_now_request_driver"
                                                                           placeholder="Please enter no. of Drivers"
                                                                           value="20"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="normal_ride_now_drop_location">
                                                                        Ride Now Drop Location Enable/Disable<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="normal_ride_now_drop_location"
                                                                            id="normal_ride_now_drop_location" required>
                                                                        <option value="1"
                                                                                 selected >Yes</option>
                                                                        <option value="2"
                                                                                >No</option>
                                                                    </select>
                                                                                                                                    </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="normal_ride_later_request_type">
                                                                        Ride Later Request Logic<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="normal_ride_later_request_type"
                                                                            id="normal_ride_later_request_type" required>
                                                                        <option value="1"
                                                                                 selected >Send To All Driver</option>
                                                                        <option value="2"
                                                                                >Cron Job</option>
                                                                    </select>
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="normal_ride_later_booking_hours">
                                                                        Ride later request booking time from Current time<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                           id="normal_ride_later_booking_hours"
                                                                           name="normal_ride_later_booking_hours"
                                                                           placeholder="Please enter the time ( in hours)"
                                                                           value="20"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="firstName3">
                                                                        Distance Radius For Ride Later Ride<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="normal_ride_later_radius"
                                                                           name="normal_ride_later_radius"
                                                                           placeholder="Please enter the radius (in km)"
                                                                           value="10"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="normal_ride_later_drop_location">
                                                                        Ride Later Drop Location Enable/Disable<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="normal_ride_later_drop_location"
                                                                            id="normal_ride_later_drop_location" required>
                                                                        <option value="1"
                                                                                 selected >Yes</option>
                                                                        <option value="2"
                                                                                >No</option>
                                                                    </select>
                                                                                                                                    </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="normal_ride_later_request_driver">
                                                                        Send Ride Later Request to Number Of Drivers<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                           id="normal_ride_later_request_driver"
                                                                           name="normal_ride_later_request_driver"
                                                                           placeholder="Please enter no. of Drivers"
                                                                           value="20"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="normal_ride_later_time_before">
                                                                        Ride Later Start Time Before Scheduled Time(In Seconds)<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                           id="normal_ride_later_time_before"
                                                                           name="normal_ride_later_time_before"
                                                                           placeholder="Please enter the time (in seconds)"
                                                                           value="20"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                    
                                                                                                            <br>
                                                        <h4 class="form-section" style="color: black"><i
                                                                    class="fa fa-taxi"></i> Booking Allocation Setttigs(Rental)</h4><hr>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="riderentaldistance">
                                                                        Distance radius for Rental Rides(In Km)<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="riderentaldistance"
                                                                           name="rental_ride_now_radius"
                                                                           placeholder="Please enter the radius (in km)"
                                                                           value="30"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="rental_ride_now_request_driver">
                                                                        Send Rental Ride Request To Number of Drivers<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                           id="rental_ride_now_request_driver"
                                                                           name="rental_ride_now_request_driver"
                                                                           placeholder="Please enter no. of Drivers"
                                                                           value="20"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="rental_ride_now_drop_location">
                                                                        Rental Ride Now Drop Location Enable/Disable<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="rental_ride_now_drop_location"
                                                                            id="rental_ride_now_drop_location" required>
                                                                        <option value="1"
                                                                                 selected >Yes</option>
                                                                        <option value="2"
                                                                                >No</option>
                                                                    </select>
                                                                                                                                    </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="rental_ride_later_request_type">
                                                                        Rental Ride Later Request Logic<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="rental_ride_later_request_type"
                                                                            id="rental_ride_later_request_type" required>
                                                                        <option value="1"
                                                                                 selected >Send To All Driver</option>
                                                                        <option value="2"
                                                                                >Cron Job</option>
                                                                    </select>
                                                                                                                                    </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="rental_ride_later_booking_hours">
                                                                        Rental Ride Later request booking time from Current time<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                           id="rental_ride_later_booking_hours"
                                                                           name="rental_ride_later_booking_hours"
                                                                           placeholder="Please enter the time ( in hours)"
                                                                           value="2"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="rental_ride_later_radius">
                                                                        Distance Radius For Rental Ride Later Ride<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="rental_ride_later_radius"
                                                                           name="rental_ride_later_radius"
                                                                           placeholder="Please enter the radius (in km)"
                                                                           value="20"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="rental_ride_later_drop_location">
                                                                        Rental Ride Later Drop Location Enable/Disable<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="rental_ride_later_drop_location"
                                                                            id="rental_ride_later_drop_location" required>
                                                                        <option value="1"
                                                                                 selected >Yes</option>
                                                                        <option value="2"
                                                                                >No</option>
                                                                    </select>
                                                                                                                                    </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="rental_ride_later_request_driver">
                                                                        Send Rental Ride Later Request to Number Of Drivers<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                           id="rental_ride_later_request_driver"
                                                                           name="rental_ride_later_request_driver"
                                                                           placeholder="Please enter no. of Drivers"
                                                                           value="20"
                                                                           required>
                                                                                                                                    </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="rental_ride_later_time_before">
                                                                        Rental Ride Later Start Time Before Scheduled Time(In Seconds)<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                           id="rental_ride_later_time_before"
                                                                           name="rental_ride_later_time_before"
                                                                           placeholder="Please enter the time (in seconds)"
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
    </div><br>


</div>s
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
