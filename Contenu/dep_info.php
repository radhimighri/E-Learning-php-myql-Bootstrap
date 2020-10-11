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
		<?php
include("config.php");
        ?>
				<link rel="shortcut icon"  href="icon/favicon.ico" >

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

			<?php
			include ("baniere.php");
			?>

			<?php
			include ("left.php");
			?>

			<div class="jumbotron" style="width: 73%; float: right;">
				<div class="row">
					<?php
include("config.php");
					$sqlaff = 'select * from  utilisateurs,departement where `utilisateurs`.`departement_id_departement`= `departement`.`id_departement` and `departement`.`nom_departement`="Informatique"  and `utilisateurs`.`confirmer`="1"';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
<table class="table">
<tr style="info" style="font-weight:bold"><b>Chef de departement :</b></tr>
						<?php
					  $data =mysqli_fetch_array($req);
						
					?>
                    
                    
					<tr  class="info" >
                    <td><?php echo $data['chef_departement']; ?></td>
					</tr>
					
                    </table>
                    
                    
                    	<?php
include("config.php");
					$sqlaff = 'select * from  utilisateurs,departement where `utilisateurs`.`departement_id_departement`= `departement`.`id_departement` and `departement`.`nom_departement`="Informatique"  and `utilisateurs`.`confirmer`="1"';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>

<table class="table">
<tr style="info" style="font-weight:bold"><b>Liste des esneignants :</b> </tr>
<td style="font-weight:bold"></td>
<td style="font-weight:bold"></td>
<td style="font-weight:bold"></td>                   

						<?php
					 while ($data =mysqli_fetch_array($req)) {
					?>
                    
                    
					<tr  class="info" >
                    <td><?php echo $data['nom']; ?></td>
                    <td><?php echo $data['prenom']; ?></td>
					<td><?php echo $data['mail']; ?> </td>
					</tr>
					<?php } ?>
					
                    </table>
				</div>
				</div>
				</center>
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