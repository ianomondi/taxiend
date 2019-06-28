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

        <div class=container-fluid>
            <div class="app-content content">
                <div class="content-wrapper">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="content-header-title mb-0 d-inline-block"><i class="fa fa-users"></i> Driver Online Time</h3>
                            <div class="btn-group float-md-right">
                                <div class="heading-elements">
                                    <div class="btn-group float-md-right">
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
                        <div class="card-header py-3">
                            <form action="">
                                <div class="table_search">
                                    <div class="row">
                                        <div class="col-md-2 form-group ">
                                            <div class="input-group">
                                                <input type="text" id="" name="driver_name"
                                                       placeholder="Driver Name"
                                                       class="form-control col-md-12 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="col-md-3 form-group ">
                                            <div class="input-group">
                                                <input type="text" id="" name="email"
                                                       placeholder="Email Id"
                                                       class="form-control col-md-12 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="col-sm-2 form-group ">
                                            <button class="btn btn-primary" type="submit" name="seabt12"><i
                                                        class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table display nowrap table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Driver Name</th>
                                        <th>Email Id</th>
                                        <th>Online Time</th>
                                        <th>Offline Time</th>
                                        <th>Total Login Hours</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <div class="pagination1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="modal fade text-center" id="myModall1231" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Hesborn Chasia</b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 08-04-2019 09:30 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 08-04-2019 09:30 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall1197" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : clara kairu</b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 07-04-2019 12:46 </td>
                                        <td> 07-04-2019 12:47 </td>
                                        <td>03 Hours 01 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 07-04-2019 12:47 </td>
                                        <td> 07-04-2019 12:47 </td>
                                        <td>03 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall1160" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : clara kairu</b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 06-04-2019 14:27 </td>
                                        <td> 06-04-2019 14:27 </td>
                                        <td>03 Hours 00 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 06-04-2019 14:27 </td>
                                        <td> 06-04-2019 14:27 </td>
                                        <td>03 Hours 00 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 06-04-2019 17:12 </td>
                                        <td> 06-04-2019 17:12 </td>
                                        <td>03 Hours 00 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 06-04-2019 17:12 </td>
                                        <td> 06-04-2019 17:12 </td>
                                        <td>03 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall1141" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Asmita </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 06-04-2019 00:00 </td>
                                        <td> 06-04-2019 11:16 </td>
                                        <td>16 Hours 46 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall1114" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Asmita </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 05-04-2019 17:56 </td>
                                        <td> 05-04-2019 20:36 </td>
                                        <td>08 Hours 10 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 05-04-2019 20:36 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 05-04-2019 20:36 </td>
                                        <td> 05-04-2019 20:38 </td>
                                        <td>05 Hours 32 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 05-04-2019 20:39 </td>
                                        <td> 05-04-2019 23:59 </td>
                                        <td>08 Hours 50 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall1118" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : kip hosea </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 05-04-2019 16:20 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall1063" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Stephen </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 05-04-2019 03:32 </td>
                                        <td> 05-04-2019 07:09 </td>
                                        <td>06 Hours 37 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 05-04-2019 07:09 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall1051" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Bonface Akweyu</b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 04-04-2019 17:33 </td>
                                        <td> 04-04-2019 17:33 </td>
                                        <td>03 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall1043" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : clara kairu</b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 04-04-2019 16:50 </td>
                                        <td> 04-04-2019 16:51 </td>
                                        <td>03 Hours 01 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall1011" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Hesborn Chasia</b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 04-04-2019 00:00 </td>
                                        <td> 04-04-2019 06:57 </td>
                                        <td>09 Hours 57 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 04-04-2019 06:57 </td>
                                        <td> 04-04-2019 06:57 </td>
                                        <td>03 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall989" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Hesborn Chasia</b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 03-04-2019 16:11 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 03-04-2019 16:11 </td>
                                        <td> 03-04-2019 23:59 </td>
                                        <td>10 Hours 48 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall943" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : philip kereri</b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 02-04-2019 14:27 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall893" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Dickson Musyoka </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 01-04-2019 15:40 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall890" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Amuri Bonface </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 01-04-2019 15:24 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 01-04-2019 15:24 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall774" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : isaac kamau maina </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 29-03-2019 23:13 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 29-03-2019 23:13 </td>
                                        <td> 29-03-2019 23:14 </td>
                                        <td>03 Hours 01 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 29-03-2019 23:14 </td>
                                        <td> 29-03-2019 23:14 </td>
                                        <td>03 Hours 00 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 29-03-2019 23:14 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall738" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : kip hosea </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 29-03-2019 13:30 </td>
                                        <td> 29-03-2019 13:40 </td>
                                        <td>03 Hours 10 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 29-03-2019 13:40 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall723" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Jeff Gitonga </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 29-03-2019 10:55 </td>
                                        <td> 29-03-2019 10:56 </td>
                                        <td>03 Hours 01 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 29-03-2019 13:13 </td>
                                        <td> 29-03-2019 13:14 </td>
                                        <td>03 Hours 01 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall684" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Anthony </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 28-03-2019 17:46 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
                        </div>
                    </div>
                </div>
            </div>
                <div class="modal fade text-center" id="myModall673" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <label class="modal-title text-text-bold-600"
                                   id="myModalLabel33"><b>Driver Online & Offline Details : Asmita </b></label>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body col-md-12">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width:30%;">Online Time</th>
                                    <th style="width:30%;">Offline Time</th>
                                    <th>Total Login Hours</th>
                                </tr>
                                                                                            <tr>
                                        <td> 28-03-2019 16:25 </td>
                                        <td> 28-03-2019 17:40 </td>
                                        <td>06 Hours 45 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 28-03-2019 17:40 </td>
                                        <td> 28-03-2019 17:40 </td>
                                        <td>05 Hours 30 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 28-03-2019 17:40 </td>
                                        <td> 28-03-2019 18:36 </td>
                                        <td>06 Hours 26 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 28-03-2019 18:36 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                                <tr>
                                        <td> 28-03-2019 18:36 </td>
                                        <td> ---- </td>
                                        <td>00 Hours 00 Minutes</td>
                                    </tr>
                                                        </table>
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
