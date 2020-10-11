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

                <style type="text/css">
<!--
.Style7 {font-weight: bold}
-->
                </style>
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

			<div class="jumbotron Style7" style="width: 73%; float: right;"><a href="images/reg_inter.pdf" style="float:right;"  class="btn btn-sm btn-success">
                     <span class="glyphicon glyphicon-download-alt"></span>
                     Telecharger 
                     </a><a href="images/reg_inter.pdf"></a><img src="images/pdf.png" width="58" height="48" border="0"></div>
		
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