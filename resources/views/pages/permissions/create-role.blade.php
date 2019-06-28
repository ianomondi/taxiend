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
              
                <div class="col-md-12 col-12">
                                    </div>
               
            </div>
			<div class="content-body">
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow">
							 <div class="card-header py-3">

							   <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title mb-0 d-inline-block">
					<i class=" fa fa-plus" aria-hidden="true"></i>

					Add Role</h3>
                </div>
                <div class="col-md-6 col-12">
                  
                </div>
                <div class="content-header-right col-md-2 col-12">
                    <div class="btn-group float-md-right">
                        <a href="/permissions/role">
                             <button type="button" class="btn btn-icon btn-success mr-1"><i class="fa fa-reply"></i>
                            </button>
                        </a>
                    </div>
                </div>
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
                                                                Role Name                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="name"
                                                                   name="name"
                                                                   placeholder="Role Name" required>
                                                                                                                    </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstName3">
                                                                Description                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <textarea class="form-control" id="description"
                                                                      name="description" rows="3"
                                                                      placeholder="Please Enter Destination"></textarea>
                                                                                                                    </div>
                                                    </div>
                                                </div>

                                                <table class="table table-default">
                                                    
                                                                                
                                                </table>
                                            </fieldset>
                                            <div class="form-actions right p-2">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Save
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
