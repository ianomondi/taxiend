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
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="content-body">
                            <section id="horizontal">
                                <div class="row">
                                    <div class="col-12">
                                                                                <div class="card">
                                            <div class="card-header py-3">
                                                <h3 class="content-header-title mb-0 d-inline-block"><i class="fas fa-exchange-alt"></i> Transactions</h3>
                                                <div class="btn-group float-md-right">
                                                    <div class="heading-elements">
                                                        <div class="btn-group float-md-left">
                                                            <div class="heading-elements">
                                                                <a href="">
                                                                    <button type="button" class="btn btn-icon btn-primary mr-1" data-original-title="Export To Excel" data-toggle="tooltip"><i
                                                                                class="fa fa-download"></i>
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body card-header p-3">
                                                <form method="post" action="">
                                                    <input type="hidden" name="_token" value="zKAS8z2s1g30MKNjBZzSRR1PxJz2C11jq3ASsjz9">                                                    <div class="table_search row">
                                                        <div class="col-md-2 col-xs-12 form-group ">
                                                            <div class="input-group">
                                                                <input type="text" id="" name="booking_id"
                                                                       placeholder="Ride Id"
                                                                       class="form-control col-md-12 col-xs-12">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-xs-12 form-group ">
                                                            <div class="input-group">
                                                                <input type="text" id="" name="rider"
                                                                       placeholder="Rider Details"
                                                                       class="form-control col-md-12 col-xs-12">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-xs-12 form-group ">
                                                            <div class="input-group">
                                                                <input type="text" id="" name="driver"
                                                                       placeholder=" Driver Details"
                                                                       class="form-control col-md-12 col-xs-12">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2 col-xs-12 form-group ">
                                                            <div class="input-group">
                                                                <input type="text" id="" name="date"
                                                                       placeholder="Search From Date" readonly
                                                                       class="form-control col-md-12 col-xs-12 datepickersearch bg-this-color"
                                                                       id="datepickersearch">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-xs-12 form-group ">
                                                            <div class="input-group">
                                                                <input type="text" id="" name="date1"
                                                                       placeholder="Search To Date" readonly
                                                                       class="form-control col-md-12 col-xs-12 datepickersearch bg-this-color"
                                                                       id="datepickersearch">
                                                            </div>
                                                        </div>


                                                        <div class="col-sm-1  col-xs-12 form-group ">
                                                            <button class="btn btn-primary" type="submit" name="seabt12"><i
                                                                        class="fa fa-search" aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>


                                            <div class="card-content collapse show" style="margin:1%">

                                                <table  id="dataTable" class="table table-responsive display nowrap table-striped table-bordered">
                                                    <thead>
                                                        <th>Sr.No</th>
                                                        <th>Ride Type</th>
                                                        <th>Area</th>
                                                        <th>Rider Details</th>
                                                        <th>Driver Details</th>
                                                        <th>Payment</th>
                                                        <th>Total Fare</th>
                                                        <th>Promo Discount</th>
                                                        <th>Company Cut</th>
                                                        <th>Driver Cut</th>
                                                        <th>Travel distance</th>
                                                        <th>Travel Time</th>
                                                        <th>Estimated bill</th>
                                                        <th>Booking Date</th>
                                                        <th>Detail</th>
                                                    </thead>
                                                    <tbody></tbody>

                                                </table>

                                            </div>
                                            <div class="col-sm-12">
                                                <div class="pagination1"></div>
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
