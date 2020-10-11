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

			<div class="jumbotron" style="width: 73%; float: right;">
				<div class="row">
					<ul class="nav nav-pills">
  						<li class="active"><a href="#">Description</a></li>
 						 <li><a href="#">Objectif</a></li>
 						 <li><a href="#">Admission</a></li>
                         <li><a href="#">Plan d'étude</a></li>
					</ul>
                    Domaine de formation : Sciences et Technologies.<br/>
					Mention : Mathématiques et Applications.<br/>
					Nombre de crédits ECTS : 180.<br/>
					Durée de la formation : 3 ans.<br/>
					Présentation :<br/>
                    								

				</div>
			</div>
		</div>
		<?php
		include ("foot.php");
		?>

		<!-- /container -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<?php
		include ("fast.php");
		?>

	</body>
</html>