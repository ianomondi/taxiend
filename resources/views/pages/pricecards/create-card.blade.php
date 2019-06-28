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
                        <div class="col-md-6 col-12">
                                                </div>
                    </div>
    
                    
                    <div class="content-body">
                        <section id="validation">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="content-header-title mb-0 d-inline-block">
                                                <i class="fas fa-plus"></i> Add Pricing Card                                        </h3>
                                                                                        <div class="btn-group float-md-right">
                                                    <a href="/pricecards/price-card">
                                                        <button type="button" class="btn btn-icon btn-success mr-1"><i
                                                                    class="fa fa-reply"></i>
                                                        </button>
                                                    </a>
                                                </div>
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
                                                <form method="POST" class="steps-validation wizard-notification"
                                                      enctype="multipart/form-data" action="">
                                                    <input type="hidden" name="_token" value="Wf9RDzSMNzEpkN8T2X8IJgT4wEstdnNYpf3ENoj6">                                                <fieldset>
                                                         <div class="row">
                                                                                                                    <div class="col-md-6">
                                                                                                                        <div class="form-group">
                                                                    <label for="firstName3">
                                                                        Area Name<span
                                                                                class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="area" id="area"
                                                                            onchange="getService(this.value)" required>
                                                                        <option value="">--Select Area--</option>
                                                                                                                                                <option value="147"> Nakuru</option>
                                                                                                                                                <option value="146"> Nairobi</option>
                                                                                                                                                <option value="145"> Gurugram</option>
                                                                                                                                        </select>
                                                                                                                                </div>
                                                            </div>
                                                                                                                    <div class="col-md-6">
                                                                                                                        <div class="form-group">
                                                                    <label for="lastName3">
                                                                        Service Name<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="service"
                                                                            id="service_type"
                                                                            onclick="checkSevice(this.value)" required>
                                                                        <option value="">--Select Area First--</option>
                                                                    </select>
                                                                                                                                                                                                </div>
                                                            </div>
                                                                                                                    <input type="hidden" value="0" name="rate_card_scope">
                                                                                                                </div>
                                                        
    
                                                        <div class="row custom-hidden" id="fixed_div">
                                                            <div class="col-md-6 corporate_inr">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Package Name<span class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="package_id"
                                                                            id="package_id"
                                                                            onclick="GetVehcile(this.value)">
                                                                        <option value="">Select Package</option>
                                                                    </select>
    
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Vehicle Type Name<span
                                                                                class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="vehicle_type"
                                                                            id="vehicle_type" required>
                                                                        <option value="">--Select Vehile Type--</option>
                                                                    </select>
                                                                                                                                </div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <h4 style="text-align: center"><b>OR</b></h4>
                                                            </div>
    
                                                            <div class="col-md-5">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Applicable to all type of Vehicles<span
                                                                                class="text-danger">*</span>
                                                                        <input type="checkbox" class="mycheckbox"
                                                                               name="all_vehile_type" id="all_vehile_type"
                                                                               value="1"
                                                                               onclick="disbleField()">
                                                                    </label>
    
                                                                </div>
                                                            </div>
                                                        </div>
    
    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Bill Calculation Type<span
                                                                                class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="price_type"
                                                                            id="price_type"
                                                                            onclick="PricingType(this.value)" required>
                                                                        <option value="">Select Pricing Type</option>
                                                                                                                                                <option value="1">Variable</option>
                                                                                                                                        </select>
                                                                                                                                </div>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <div class="form-group custom-hidden" id="extra_charge">
                                                                    <label for="emailAddress5">
                                                                        Extra Seat Charge<span
                                                                                class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="extra_sheet_charge"
                                                                           name="extra_sheet_charge"
                                                                           placeholder="Extra Seat Charge">
                                                                </div>
                                                            </div>
    
                                                        </div>
    
    
                                                        <div id="dynamic_row">
                                                        </div>
    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group custom-hidden" id="end-div">
                                                                    <label for="emailAddress5">
                                                                        Maximum Bill Amount<span
                                                                                class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="maximum_bill_amount"
                                                                           name="maximum_bill_amount"
                                                                           placeholder="Maximum Bill Amount">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
    
                                                        
                                                                                                                <h4 class="form-section" style="color: black"><i
                                                                        class="fa fa-paperclip"></i> Cancel Charges                                                        </h4>
                                                            <hr>
    
                                                            <div class="row">
    
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="emailAddress5">
                                                                            Cancel Charges For This Price Card<span
                                                                                    class="text-danger">*</span>
                                                                        </label>
                                                                        <select class="form-control" name="cancel_charges"
                                                                                id="cancel_charges"
                                                                                required>
                                                                            <option value="2">No</option>
                                                                            <option value="1">Yes</option>
                                                                        </select>
                                                                                                                                        </div>
                                                                </div>
                                                                <div class="col-md-4 custom-hidden" id="cancel_first">
                                                                    <div class="form-group">
                                                                        <label for="emailAddress5">
                                                                            Free Cancel Time<span
                                                                                    class="text-danger">*</span>
                                                                        </label>
                                                                        <input type="text"
                                                                               onkeypress="return NumberInput(event)"
                                                                               class="form-control"
                                                                               id="cancel_time"
                                                                               name="cancel_time"
                                                                               placeholder="Please Enter Time (In Min)">
                                                                    </div>
                                                                </div>
    
                                                                <div class="col-md-4 custom-hidden" id="cancel_second">
                                                                    <div class="form-group">
                                                                        <label for="emailAddress5">
                                                                            Cancel Charges<span
                                                                                    class="text-danger">*</span>
                                                                        </label>
                                                                        <input type="text"
                                                                               onkeypress="return NumberInput(event)"
                                                                               class="form-control"
                                                                               id="cancel_amount"
                                                                               name="cancel_amount"
                                                                               placeholder="Please Enter Amount">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                                                            <br>
                                                        <h4 class="form-section" style="color: black"><i
                                                                    class="fa fa-paperclip"></i> Setup Commission Structure                                                    </h4>
                                                        <hr>
    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Select Commission Payout Method<span
                                                                                class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="commission_type"
                                                                            id="commission_type"
                                                                            required>
                                                                        <option value="">Select Commission Payout</option>
                                                                                                                                            <option value="2">Postpaid</option>
                                                                    </select>
                                                                                                                                </div>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="emailAddress5">
                                                                        Calculation method<span
                                                                                class="text-danger">*</span>
                                                                    </label>
                                                                    <select class="form-control" name="commission_method"
                                                                            id="commission_method"
                                                                            onclick="Commsionmethod(this.value)" required>
                                                                        <option value="">Select Calculation method</option>
                                                                        <option value="1">Flat comission per Ride</option>
                                                                        <option value="2">Percentage of Net Bill (before tax)</option>
                                                                    </select>
                                                                                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group custom-hidden" id="flat-div">
                                                                    <label for="emailAddress5">
                                                                        Comission Value<span
                                                                                class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="number" class="form-control"
                                                                           id="flat_commission"
                                                                           name="flat_commission"
                                                                           placeholder="Please enter the Value">
                                                                </div>
                                                            </div>
    
                                                            <div class="col-md-6">
                                                                <div class="form-group custom-hidden" id="percantage-div">
                                                                    <label for="emailAddress5">
                                                                        Commission Value In (%)<span
                                                                                class="text-danger">*</span>
                                                                    </label>
                                                                    <input type="text" class="form-control"
                                                                           id="percentage_commission"
                                                                           name="percentage_commission"
                                                                           placeholder="Please enter the Value (This Value will Be the % of total bill)">
                                                                </div>
                                                            </div>
    
                                                        </div>
    
                                                                                                            <h4 class="form-section" style="color: black"><i
                                                                    class="far fa-money-bill-alt"></i> Payment Method Options for Customer                                                    </h4>
                                                        <hr>
    
                                                        <div class="row">
                                                                                                                        <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            <input type="checkbox" name="payment_method[]"
                                                                                   value="1"
                                                                                   id="Cash">
                                                                            Cash
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                                                                        <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            <input type="checkbox" name="payment_method[]"
                                                                                   value="3"
                                                                                   id="Wallet">
                                                                            Wallet
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                                                                        <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            <input type="checkbox" name="payment_method[]"
                                                                                   value="4"
                                                                                   id="Online Payment">
                                                                            Online Payment
                                                                        </label>
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
