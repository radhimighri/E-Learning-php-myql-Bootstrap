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
if($_SESSION['profil']=="ens"){
include ("menuproff.php");
}
?>
<?php
if($_SESSION['profil']=="etud"){
include ("menu.php");
}
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
				<form action="rech_livre.php" method="post">
				<h3><font color="#003399">Recherche d'un livre à l'ISMAIK:</font></h3>
			<div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<input type="text" class="form-control" placeholder="saisir le nom de livre et tapez entrer pour la recherche"  name="rechlivre" style="width: 400px;" />
			</div>
			</div> 
					</form>
					<?php  
					if (isset($_POST['rechlivre'])){
						
						$sqlv = 'select * from livre where livre.nom_livre="'.$_POST['rechlivre'].'"  and livre.emprunter=0';
						$reqv = mysqli_query($base,$sqlv) or die(mysqli_error());
						$datav =mysqli_fetch_array($reqv);
						if($datav['nom_livre']==""){?>
							        <div class="alert alert-danger" >
							        	Pour le momment ce Livre n'est pas disponible dans la bibliotheque de l'ISMAIK il peut etre emprunte!!!
    								</div>
								
						            <?php }
						else{ ?>
							
								<div class="alert alert-success">
							        	Livre existe dans la bibliotheque de l'ISMAIK vous pouvez consulter le personnel pour l'emprunter!!!
   								</div>
							</div>
					            <?php	}
						?>
						
						<?php
					}
				?>

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