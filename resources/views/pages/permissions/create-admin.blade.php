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
          <div class="app-content content">
        <div class="container-fluid">
        <div class="content-wrapper">
   <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
               
                </div>
                <div class="col-md-6 col-12">
                                    </div>
                <div class="content-header-right col-md-2 col-12">
                  
                </div>
            </div>
            <div class="content-body">
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow h-100">
                                <div class="card-header">
								       <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title mb-0 d-inline-block">
					<i class=" fa fa-user-plus" aria-hidden="true"></i>

					Add Sub Admin</h3>
                </div>
                <div class="col-md-6 col-12">
                 
                </div>
                <div class="content-header-right col-md-2 col-12">
                    <div class="btn-group float-md-right">
                        <a href="/permissions/sub-admin">
                            <button type="button" class="btn btn-icon btn-success mr-1"><i class="fa fa-reply"></i>
                            </button>
                        </a>
                    </div>
                </div>
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
                                            <input type="hidden" name="_token" value="6QbXM76ozo2sNmeqjUyCJ4LJgF0RhWZYgDm6AgvR">                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                First Name  
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="first_name"
                                                                   name="first_name"
                                                                   placeholder="Please Enter First Name" required>
                                                                                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                Last Name  
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="last_name"
                                                                   name="last_name"
                                                                   placeholder="Please Enter Last Name" required>
                                                                                                                    </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName3">
                                                                Moblie No.  
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="phone_number"
                                                                   name="phone_number"
                                                                   placeholder="Enter Phone Number" required>
                                                                                                                    </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress5">
                                                                Email Id  
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="email" class="form-control" id="email"
                                                                   name="email"
                                                                   placeholder="Please Enter Email" required>
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
                                                                   placeholder="Please Enter Password" required>
                                                                                                                    </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress5">
                                                                Admin Type  
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <select class="form-control" name="admin_type"
                                                                    id="admin_type" onclick="area(this.value)"
                                                                    required>
                                                                                                                                    <option value="1">All Area</option>
                                                                                                                                <option value="2">From Area List</option>
                                                            </select>
                                                                                                                    </div>
                                                    </div>


                                                    <div class="col-md-6" id="areaList">
                                                        <div class="form-group">
                                                            <label for="emailAddress5">
                                                                From Area List  
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <select class="select2 form-control" name="area_list[]"
                                                                    id="area_list" multiple required>
                                                                                                                                    <option value="147"> Nakuru </option>
                                                                                                                                    <option value="146"> Nairobi </option>
                                                                                                                                    <option value="145"> Gurugram </option>
                                                                                                                            </select>
                                                                                                                    </div>
                                                    </div>

                                                    <div class="col-md-6 corporate_inr">

                                                        <div class="form-group">
                                                            <label for="location3">Role                                                                 </label>
                                                            <select class="form-control" name="role_id" id="role_id" required>
                                                                <option value="">--Select Sub Admin Role--</option>
                                                                                                                                    <option value="7">Super Admin</option>
                                                                                                                            </select>

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
    </div>
    <script>
        function area(type) {
            if (type == 2) {
                document.getElementById('area_list').disabled = false;
            } else {
                document.getElementById('area_list').disabled = true;
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
