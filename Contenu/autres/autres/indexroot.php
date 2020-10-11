<!DOCTYPE html>
<html lang="fr">
	<head>
			<?php
	session_start();
?>
<?php
include ("function.php");
	//	testSupAdmin();
?>
<?php
connectMaBase();
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
		include ("menuroot.php");
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
                
													

				</div>
			</div>
		</div>
		<?php
		include ("foot.php");
		?>
		<!-- Placed at the end of the document so the pages load faster -->
		<?php
		include ("fast.php");
		?>
		
		
				<script src="assets/js/jquery-1.7.1.min.js"></script> 

<script src="assets/js/jquery.validate.js"></script> 

<script src="script.js"></script> 
<script>
		addEventListener('load', prettyPrint, false);
		$(document).ready(function(){
		$('pre').addClass('prettyprint linenums');
			});
		</script> 

		

	</body>
</html>