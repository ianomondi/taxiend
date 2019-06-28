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
          <div class="container-fluid ">
        <div class="content-wrapper">
            <div class="content-body">
                <section id="horizontal">
                    <div class="row">
                        <div class="col-12" style="height:100vh">
                            <div class="card shadow ">
							 <div class="card-header py-3">
							<div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title mb-0 d-inline-block">
					<i class=" fa fa-ban" aria-hidden="true"></i>
					Reject Reasons </h3>
                </div>

                <div class="col-md-6 col-12">
                                    </div>

                <div class="content-header-right col-md-2 col-12">
                    <div class="btn-group float-md-right">
                        <div class="heading-elements">
                            <button type="button" class="btn btn-icon btn-success mr-1"
                                    title="Add Reject Reason" data-toggle="modal"
                                    data-target="#inlineForm">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            </div>
                            <div class="card-body">
                        <div class="table-responsive">
                            <table class="table display nowrap table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Title</th>
                                                <th>Reject Action</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                                                                                                    </tbody>
                                        </table>
                                    </div>
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


    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600"
                           id="myModalLabel33"><b>Add Reject Reason                            (You are adding in EN)</b></label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" enctype="multipart/form-data" action="">
                    <input type="hidden" name="_token" value="u8DIAkKJ5O3N8MxvkXYaJzFRcukpU9la4Agv5uBF">                    <div class="modal-body">

                        <label>Title  <span class="text-danger">*</span></label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="Please Enter Title"/>
                        </div>

                        <label> Reject Action 
                            <span class="text-danger">*</span> </label>
                        <div class="form-group">
                            <textarea class="form-control" id="action" name="action" rows="3"
                                      placeholder="Please Enter Reject Action"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-outline-secondary btn" data-dismiss="modal"
                               value="Close">
                        <input type="submit" class="btn btn-outline-primary btn" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
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
