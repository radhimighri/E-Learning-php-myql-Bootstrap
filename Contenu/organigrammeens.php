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

	</head>

	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->
		<?php
		include ("menuproff.php");
		?>

		<div class="container theme-showcase" role="main">

			<!-- Main jumbotron for a primary marketing message or call to action -->
			<?php
			include ("baniere.php");
			?>
			
			<?php
			include ("left.php");
			?>

			<div class="jumbotron" style="width: 73%; float: right;">
				
				<img src="images/organigramme.JPG">
				
				
		</div>
		<?php
		include ("foot.php");
		?>

		<!-- Placed at the end of the document so the pages load faster -->
		<?php
		include ("fast.php");
		?>

	</body>
</html>