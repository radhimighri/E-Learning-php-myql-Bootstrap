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
					$sqlaff = 'select * from  utilisateurs where `utilisateurs`.`profil`="admin" or `utilisateurs`.`profil`="root" ';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
<table class="table">
<tr style="danger"> <b>Liste des personnels administratifs :<b/> </tr>
<td style="font-weight:bold"></td>
<td style="font-weight:bold"></td>
<td style="font-weight:bold"></td>      

						<?php
					 while ($data =mysqli_fetch_array($req)) {
					?>
 
					<tr class="danger" >
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