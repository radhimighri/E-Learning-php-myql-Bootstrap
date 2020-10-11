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

		<?php
		include ("incssjs.php");
		?>
	    <style type="text/css">
<!--
.Style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
.Style2 {font-family: "Times New Roman", Times, serif}
.Style3 {font-family: "Times New Roman", Times, serif; font-size: 12px; }
.Style4 {font-size: 12px}
-->
        </style>
				<link rel="shortcut icon"  href="icon/favicon.ico" >

                <style type="text/css">
<!--
.Style5 {
	color: #800000;
	font-weight: bold;
	padding-bottom: 5px;
	margin-top: 15px;
	margin-right: 0px;
	margin-bottom: 15px;
	margin-left: 0px;
	font-size: 16px;
}
.Style6 {color: #800000}
-->
                </style>
</head>

	<body role="document" style="margin-bottom: 90px;">


<?php
include ("menuadmin.php");
	
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
			<div class="alert alert-info"><h4 ><font color="">Département ajouté avec success !!!</font></h4></div>
		
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