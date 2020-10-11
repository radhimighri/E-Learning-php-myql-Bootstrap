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
.Style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
                </style>
</head>

	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->


<?php
include ("menuproff.php");

?>


		<div class="container theme-showcase" role="main">

			<?php
			include ("baniere.php");
			?>
			
			<?php
			include ("left.php");
			?>

			<div class="jumbotron" style="width: 73%; float: right;">
			  <div class="row">
			    <div align="right" class="Style1">
			      <div align="center">Sous Construction !!! <br>
			        <br/>
                    <img src="images/otrav.gif" width="47" height="42"></div>
			    </div>
			  </div>
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