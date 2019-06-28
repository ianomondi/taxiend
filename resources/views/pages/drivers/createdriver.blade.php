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
        

          <!-- Content Row -->
          <div class="app-content content">
    <div class="container-fluid ">

                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow h-100">
                                <div class="card-header py-3">
                                    <div class="content-header row">
                                        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                                            <h3 class="content-header-title mb-0 d-inline-block">
                                                <i class=" fa fa-user-plus" aria-hidden="true"></i>
                                                Add Driver</h3>

                                        </div>
                                        <div class="content-header-right col-md-4 col-12">
                                            <div class="btn-group float-md-right">
                                              <a href="/drivers/alldrivers">
                                                <a href="/drivers/alldrivers">
                                                    <button type="button" class="btn btn-icon btn-success mr-1"><i
                                                                class="fa fa-reply"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <a class="heading-elements-toggle"><i
                                                class="ft-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data"
                                              class="steps-validation wizard-notification"
                                              onsubmit="return validatesignup()"
                                              enctype="multipart/form-data" action="">
                                            <input type="hidden" name="_token" value="4BwN7qjpWYD4MtM7yf5REIz3L6BGWzHmhESNtrOv">                                            <fieldset>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location3">Country                                                                :</label>
                                                            <select class="form-control" name="country"
                                                                    onchange="getAreaList(this)" id="country"
                                                                    required>
                                                                <option value="">Select Country</option>
                                                                                                                                <option data-min="12"
                                                                        data-max="12"
                                                                        value="+254"
                                                                        data-id="10">Kenya
                                                                </option>
                                                                                                                                <option data-min="10"
                                                                        data-max="10"
                                                                        value="+91"
                                                                        data-id="22">India
                                                                </option>
                                                                                                                            </select>
                                                                                                                    </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location3">Area Name :</label>
                                                            <select class="form-control required" name="area"
                                                                    id="area"
                                                                    required>
                                                                <option value="">--Select Area--</option>
                                                                s
                                                            </select>
                                                                                                                    </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress5">
                                                                Moblie No. :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="user_phone"
                                                                   name="phone"
                                                                   placeholder="Please Enter Number" required>
                                                                                                                    </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                First Name :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="first_name"
                                                                   name="first_name"
                                                                   placeholder="First Name" required>
                                                                                                                    </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                Last Name :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="last_name"
                                                                   name="last_name"
                                                                   placeholder="Last Name" required>
                                                                                                                    </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastName3">
                                                                Email Id :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="email" class="form-control required"
                                                                   id="email"
                                                                   name="email"
                                                                   placeholder="Please Enter Email"
                                                                   required>
                                                                                                                    </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress5">
                                                                Driver Profile Image :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="file" class="form-control" id="image"
                                                                   name="image" required>
                                                                                                                    </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress5">
                                                                Password :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="password" class="form-control"
                                                                   id="password"
                                                                   name="password"
                                                                   placeholder="Please Enter Password" required>
                                                                                                                    </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location">
                                                                Confirm Password :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="password" class="form-control"
                                                                   id="password_confirmation"
                                                                   name="password_confirmation"
                                                                   placeholder="Please Enter Confirm Password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                 <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress5">
                                                                Bank Name :
                                                                <!--<span class="danger">*</span>-->
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                   id="bank_name"
                                                                   name="bank_name"
                                                                   placeholder="Bank Name">
                                                                                                                    </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location">
                                                                Account Holder Name :
                                                                <!--<span class="danger">*</span>-->
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                   id="account_holder_name"
                                                                   name="account_holder_name"
                                                                   placeholder="Account Holder Name">
                                                                                                                    </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location3">Driver Account Number                                                                :</label>
                                                            <input type="text" class="form-control" id="account_number"
                                                                   name="account_number" placeholder="Driver Account Number">
                                                                                                                    </div>
                                                    </div>
                                                                                                                                                                                                                                                        </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h4><b><label class="checkbox-inline"
                                                                          style="margin-left: 5%;margin-top: 1%;">
                                                                        <input type="checkbox"
                                                                               name="accept_terms"
                                                                               id="accept_terms"
                                                                               value="1">  I Accept terms & condition                                                                    </label></b></h4>
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
<script>
    function getAreaList(obj) {
        var id = obj.options[obj.selectedIndex].getAttribute('data-id');
        $.ajax({
            method: 'GET',
            url: "",
            data: {country_id: id},
            success: function (data) {
                $('#area').html(data);
            }
        });
    }

    function validatesignup() {
        var password = document.getElementById('password').value;
        var con_password = document.getElementById('password_confirmation').value;
        var accept_terms =  $('[name="accept_terms"]:checked').length;
               if (accept_terms == 0) {
                    alert("please Accept Tems & conditions first");
                    return false;
                }
        
        if (password == "") {
            alert("Please enter password");
            return false;
        }
        if (password == "") {
            alert("Please enter password");
            return false;
        }

        if (con_password == "") {
            alert("Please enter Confirm password");
            return false;
        }
        if (con_password != password) {
            alert("Password and Confirm password Should be Same");
            return false;
        }

    }


</script>
</div>
<!-- End of Main Content -->
            
          </div>

          <!-- Content Row -->

          

            <!-- Area Chart -->
            

            <!-- Pie Chart -->
 

          <!-- Content Row -->
          

            <!-- Content Column -->

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
