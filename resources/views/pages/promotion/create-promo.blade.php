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
                        <section id="validation">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="content-header-title mb-0 d-inline-block"><i class="fa fa-plus"></i> Add Promo Code</h3>
                                            <div class="btn-group float-md-right">
                                                <a href="/promotion/promo/">
                                                    <button type="button" class="btn btn-icon btn-success mr-1"><i class="fa fa-reply"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-content collapse show">
                                            <div class="card-body">
                                                <form method="POST" class="steps-validation wizard-notification"
                                                      enctype="multipart/form-data" action="">
                                                    <input type="hidden" name="_token" value="AIzaSyAvMAYYCuI6-Eux-T6S3E6xJEOoUmDrMsQ">                                                <fieldset>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="firstName3">
                                                                        Area Name<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="area" id="area"
                                                                            onchange="getServices(this.value)" required>
                                                                        <option value="">--Select Area--</option>
                                                                                                                                                <option id="147"
                                                                                    value="147">Nakuru</option>
                                                                                                                                                <option id="146"
                                                                                    value="146">Nairobi</option>
                                                                                                                                                <option id="145"
                                                                                    value="145">Gurugram</option>
                                                                                                                                        </select>
                                                                                                                                </div>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="firstName3">
                                                                        Service Name<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="select2 form-control" name="service_type_id[]"
                                                                            id="service_type_id"   data-placeholder="Select Area First" multiple>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                    </select>
                                                                                                                                </div>
                                                            </div>
    
    
                                                        </div>
    
                                                        <div class="row">
    
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lastName3">
                                                                        Promo Code<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="promocode"
                                                                           name="promocode"
                                                                           placeholder="Please Enter Promo Code"
                                                                           value="" required>
                                                                                                                                </div>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Promo Type<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="promo_code_value_type"
                                                                            id="promo_code_value_type"
                                                                            onchange="changeText(this.value)"
                                                                            required>
                                                                        <option id="1" value="1">Flat Rate</option>
                                                                        <option id="2" value="2">Percentage</option>
                                                                    </select>
                                                                                                                                </div>
                                                            </div>
    
    
                                                        </div>
    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Discount<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="promo_code_value" name="promo_code_value"
                                                                           placeholder="Please Enter Discount Value"
                                                                           value="" required>
                                                                                                                                </div>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Description<span class="text-danger">*</span>
                                                                    </label>
                                                                    <textarea class="form-control" id="promo_code_description"
                                                                              name="promo_code_description"
                                                                              placeholder="Please Enter Description"
                                                                              required></textarea>
                                                                                                                                </div>
                                                            </div>
    
    
                                                        </div>
                                                        <div class="row">
    
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Applicable For<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="applicable_for"
                                                                            id="applicable_for" onchange="UserType(this.value)"
                                                                            required>
                                                                        <option value="1">All Rider</option>
                                                                        <option value="2">New Rider</option>
                                                                                                                                        </select>
                                                                                                                                </div>
                                                            </div>
    
    
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Valid For<span class="text-danger">*</span>
                                                                    </label>
                                                                    <div class="icheckbox_minimal checked hover active"
                                                                         style="position: relative;">
                                                                        <input type="radio"
                                                                               id="promo_code_validity_permanent" value="1"
                                                                               name="promo_code_validity"
                                                                               onclick="javascript:yesnoCheck()" checked>
                                                                        <label for="input-5"
                                                                               class="">Always</label>
                                                                        <input type="radio" id="promo_code_validity_custom"
                                                                               value="2" name="promo_code_validity"
                                                                               onclick="javascript:yesnoCheck()"
                                                                               style="margin-left: 20px;">
                                                                        <label for="input-5"
                                                                               class="">Select Custom Date</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group custom-hidden" id="start-div">
                                                                    <label for="emailAddress5">
                                                                        Start Date<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control datepicker"
                                                                           id="datepicker" name="start_date"
                                                                           placeholder="Start Date"
                                                                           value="">
                                                                </div>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <div class="form-group custom-hidden" id="end-div">
                                                                    <label for="emailAddress5">
                                                                        End Date<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control datepicker"
                                                                           id="datepicker-end" name="end_date"
                                                                           placeholder="End Date"
                                                                           value="">
                                                                </div>
                                                            </div>
                                                        </div>
    
    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Promo Code Limit<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="promo_code_limit"
                                                                           name="promo_code_limit"
                                                                           placeholder="Please Enter Promo Code Usage Limit"
                                                                           value="" required>
                                                                                                                                </div>
                                                            </div>
    
    
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Promo Code Limit Per Rider<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="promo_code_limit_per_user"
                                                                           name="promo_code_limit_per_user"
                                                                           placeholder="Please Enter Usage Limit Per Rider"
                                                                           value=""
                                                                           required>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="lastName3">
                                                                        Promo percentage maximum discount<span class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control" id="promo_percentage_maximum_discount"
                                                                           name="promo_percentage_maximum_discount"
                                                                           placeholder="Promo percentage maximum discount"
                                                                           value="" disabled>
                                                                                                                                </div>
                                                            </div>
    
                                                            </div>
    
                                                        <div class="row custom-hidden" id="corporate_div">
                                                            <div class="col-md-6 corporate_inr">
                                                                <div class="form-group">
                                                                    <label for="location3">Corporate Name</label>
                                                                    <select class="form-control" name="corporate_id"
                                                                            id="corporate_id">
                                                                        <option value="">--Select Corporate--</option>
                                                                                                                                        </select>
    
                                                                                                                                </div>
                                                            </div>
                                                            
                                                                                                                   
                                                        </div>
    
    
                                                    </fieldset>
                                                    <div class="form-actions right" style="margin-bottom: 3%">
                                                        <button type="submit" class="btn btn-primary float-right">
                                                            <i class="fa fa-check-circle" onclick="return Validate()"></i>
                                                            Save
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
            function Validate() {
                var promo_code_value_type = document.getElementById('promo_code_value_type').value;
                var promo_code_value = document.getElementById('promo_code_value').value;
                if (promo_code_value_type == 2 && promo_code_value > 100) {
                    alert('Enter Value Less Then 100');
                    return false;
                }
    
            }
    
            function changeText(val) {
                let firstmsg = "Please Enter Discount Value";
                let firstmsg2 = "Please Enter Discount In (%)";
                if (val == 2) {
                    $('#promo_percentage_maximum_discount').prop("disabled", false);
                    $('#promo_code_value').attr("placeholder", firstmsg2);
                } else {
                    $('#promo_percentage_maximum_discount').prop("disabled", true);
                    $('#promo_code_value').attr("placeholder", firstmsg);
                }
            }
    
            function UserType(val) {
                if (val == "3") {
                    document.getElementById('corporate_div').style.display = 'block';
                } else {
                    document.getElementById('corporate_div').style.display = 'none';
                }
            }
    
            function yesnoCheck() {
                if (document.getElementById('promo_code_validity_permanent').checked) {
                    document.getElementById('start-div').style.display = 'none';
                    document.getElementById('end-div').style.display = 'none';
                } else {
                    document.getElementById('start-div').style.display = 'block';
                    document.getElementById('end-div').style.display = 'block';
                }
            }
    
            function getServices(val) {
                if (val != "") {
                    var token = $('[name="_token"]').val();
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        method: 'POST',
                        url: "",
                        data: {area_id: val},
                        success: function (data) {
                            $("#service_type_id").html(data);
                        }
                    });
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
