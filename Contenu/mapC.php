<!DOCTYPE html>
<html lang="fr">
	<head>
			<?php
	session_start();
?>
<?php
include ("function.php");
?>
<?php
include("config.php");
?>

		<?php
		include ("incssjsmore.php");
		?>

		<title>ISMAI Kairouan</title>

		<!-- Bootstrap core CSS -->
		<?php
		include ("incssjs.php");
		?>
				<link rel="shortcut icon"  href="icon/favicon.ico" >
				<style>
      #map_canvas {
        width: 500px;
        height: 400px;
      }
    </style>
				<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
				  <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(35.681967, 10.099900),
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

	</head>

	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->
		<?php
		include ("menu.php");
		?>
	

		<div class="container theme-showcase" role="main">

			<!-- Main jumbotron for a primary marketing message or call to action -->
			<?php
			include ("baniere.php");
			?>
			
			<?php
			include ("left.php");
			?>

		  <div id="map_canvas" class="jumbotron" style="width: 73%; float: right;"> 

		  </div>
				
				
		</div>
		<?php
		include ("foot.php");
		?>

		<?php
		include ("fast.php");
		?>

	</body>
</html>