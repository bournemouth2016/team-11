<!DOCTYPE html>
<html lang="en">

<head>
    <title>RNLI | Incidents</title>
    <?php include "layout/head.php" ?>
</head>

<body>
    <div id="wrapper">
        <?php include "layout/nav.php" ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Incidents</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div id="map" style="width:100%;height:500px"></div>

			<script>
			function myMap() {
			  var mapCanvas = document.getElementById("map");
			  var mapOptions = {
				center: new google.maps.LatLng(51.508742,-0.120850),
				zoom: 5
			  };
			var map = new google.maps.Map(mapCanvas, mapOptions);
			}
			</script>

			<script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyAP3stVXDPvWBHCfuUBMZHhqG69oK-HtKc"></script>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include "layout/dashboard_data.php" ?>

</body>

</html>
