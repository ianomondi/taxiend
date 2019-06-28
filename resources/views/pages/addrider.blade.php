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

          <!-- Page Heading -->

          <!-- Content Row -->
          

                <div class="content-body">
                        <section id="validation">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card shadow h-100">
                                     <div class="card-header">
                                       <h3 class="content-header-title mb-0 d-inline-block">
                                             <i class=" fa fa-plus" aria-hidden="true"></i>
                                            Add Rider</h3>
                                              <div class="btn-group float-md-right">
                                                <a href="">
                                                    <button type="button" class="btn btn-icon btn-success mr-1"><i class="fa fa-reply"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            
                                        </div>
                                        <div class="">
                                       
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
                                                    <input type="hidden" name="_token" value="DrLu34aJYpHJZP37ESBZrr9StopNe5QVuGfWQHBa">                                            <fieldset>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="location3">Type of Rider</label>
                                                                    <select class="form-control" name="rider_type"
                                                                            id="rider_type" onclick="RideType(this.value)"
                                                                            required>
                                                                        <option value="">--Select Rider Type--</option>
                                                                                                                                        <option value="2">Retail</option>
                                                                    </select>
        
                                                                                                                            </div>
                                                            </div>
        
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="firstName3">
                                                                        First Name 
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="first_name"
                                                                           name="first_name"
                                                                           placeholder="First Name" required>
                                                                                                                            </div>
                                                            </div>
                                                            
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="firstName3">
                                                                        Last Name 
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="last_name"
                                                                           name="last_name"
                                                                           placeholder="Last Name" required>
                                                                                                                            </div>
                                                            </div>
                                                        </div>
        
        
                                                        <div class="row custom-hidden" id="corporate_div">
                                                            <div class="col-md-6 corporate_inr">
                                                                <div class="form-group">
                                                                    <label for="location3">Corporate Name                                                               </label>
                                                                    <select class="form-control" name="corporate_id"
                                                                            id="corporate_id">
                                                                        <option value="">--Select Corporate--</option>
                                                                                                                                    </select>
        
                                                                                                                            </div>
                                                            </div>
        
                                                            <div class="col-md-6 corporate_inr">
                                                                <div class="form-group">
                                                                    <label for="firstName3">
                                                                        Corporate Email 
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="corporate_email"
                                                                           name="corporate_email"
                                                                           placeholder="Corporate Email">
                                                                                                                            </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
        
        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="location3">Country</label>
                                                                    <select class="form-control" name="country" id="country"
                                                                            required>
                                                                        <option value="">Select Country</option>
                                                                                                                                            <option data-min="12"
                                                                                    data-max="12"
                                                                                    value="10|+254">Kenya</option>
                                                                                                                                            <option data-min="10"
                                                                                    data-max="10"
                                                                                    value="22|+91">India</option>
                                                                                                                                    </select>
                                                                                                                            </div>
                                                            </div>
        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lastName3">
                                                                        Moblie No. 
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="user_phone"
                                                                           name="user_phone"
                                                                           placeholder="Moblie No." required>
                                                                                                                            </div>
                                                            </div>
        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Email Id 
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="email" class="form-control" id="user_email"
                                                                           name="user_email"
                                                                           placeholder="Email Id" required>
                                                                                                                            </div>
                                                            </div>
        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Password 
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="password" class="form-control" id="password"
                                                                           name="password"
                                                                           placeholder="Password" required>
                                                                                                                            </div>
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                                                                                                                                            </div>
        
                                                        <div class="row">
        
        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="ProfileImage">
                                                                        Profile Image 
                                                                        <span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="file" class="form-control" id="profile"
                                                                           name="profile"
                                                                           placeholder="Profile Image" required>
                                                                                                                            </div>
                                                            </div>
        
                                                        </div>
        
                                                    </fieldset>
                                                     <div class="form-actions d-flex flex-row-reverse p-2">
                                                        <button type="submit" class="btn btn-primary">
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
            <script>
                function RideType(val) {
                    if (val == "1") {
                        document.getElementById('corporate_div').style.display = 'block';
                    } else {
                        document.getElementById('corporate_div').style.display = 'none';
                    }
                }
            </script>
        </div>
            
          </div>

          

        </div>
        <!-- /.container-fluid -->

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
