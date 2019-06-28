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
                    <input type="hidden" name="_token" value="vozNnunmHyh2Y5vuNqtNlxRL5zI8r4wicRLnDyUh">                <div class="content-body">
                        <section id="gmaps-utils">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content collapse show">
                                            <div class="card-header py-3">
                                                <h4 class="content-header-title mb-0 d-inline-block"><i class="fas fa-users"></i> Driver Map</h4>
                                                
                                                    <div class="btn-group float-right">
                                                        <div class="heading-elements">
                                                            <div class="form-group">
                                                                <select onchange="getDriverLocationo(this.value)"
                                                                        class="c-select form-control"
                                                                        id="driver_marker"
                                                                        name="driver_marker">
                                                                    <option value="1">All</option>
                                                                    <option value="2">Available</option>
                                                                    <option value="3">Enroute to Pickup</option>
                                                                    <option value="4">Reached Pickup</option>
                                                                    <option value="5">Journey Started</option>
                                                                    <option value="6">Offline</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <div class="card-body">
                                                <div id="context-menu" style="width: 100%;height: 550px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po&libraries=visualization">
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

  <script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            searching: false,
            paging: false,
            info: false,
            "bSort": false,
        });
        
    });
</script>

    <script>
        let map;
        let markers = [];
        let marker;
        let markerslocations;
        let infowindow;

        function initialize() {
            map = new google.maps.Map(document.getElementById('context-menu'), {
                zoom: 2,
                center: {lat: 8.7832, lng: 34.5085},
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            // directionsDisplay.setMap(map);
            getDriverLocationo(1);
        }

        function getDriverLocationo(type) {
            var token = $('[name="_token"]').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': token
                },
                method: 'POST',
                //http://app.apporiotaxi.com/v11/public/merchant/admin/getDriverOnMap
                url: "",
                data: {
                    type: type,
                },
                success: function (data) {
                    markerslocations = JSON.parse(data);
                    infowindow = new google.maps.InfoWindow();
                    for (var f = 0; f < markers.length; f++) {
                        markers[f].setMap(null);
                    }
                    for (var i = 0; i < markerslocations.length; i++) {
                        newName = markerslocations[i]['marker_name'];
                        marker_number = markerslocations[i]['marker_number'];
                        icon = markerslocations[i]['marker_icon'];
                        marker_image = markerslocations[i]['marker_image'];
                        email = markerslocations[i]['marker_email'];
                        newLatitude = markerslocations[i]['marker_latitude'];
                        newLongitude = markerslocations[i]['marker_longitude'];
                        markerlatlng = new google.maps.LatLng(newLatitude, newLongitude);
                        content = '<table><tr><td rowspan="4"><img src="' + marker_image + '" height="60" width="60"></td></tr><tr><td>&nbsp;&nbsp;Email: </td><td><b>' + email + '</b></td></tr><tr><td>&nbsp;&nbsp;Mobile: </td><td><b>+' + marker_number + '</b></td></tr></table>';
                        var marker = new google.maps.Marker({
                            map: map,
                            title: newName,
                            position: markerlatlng,
                            icon: icon
                        });
                        google.maps.event.addListener(marker, 'click', (function (marker, content, infowindow) {
                            return function () {
                                infowindow.setContent(content);
                                infowindow.open(map, marker);
                                map.panTo(this.getPosition());
                                map.setZoom(21);
                            };
                        })(marker, content, infowindow));
                        markers.push(marker);
                    }
                }, error: function (e) {
                    console.log(e);
                }

            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>


</body>

</html>
