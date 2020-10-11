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
		  
		
if ((isset($_GET['suppr'])) && ($_GET['suppr'] != "")) {
	$deleteSQL = sprintf("DELETE FROM utilisateurs WHERE cin=%s", GetSQLValueString($_GET['suppr'], "int"));

	//mysql_select_db("ismaik1");
	$Result1 = mysqli_query($base,$deleteSQL) or die(mysqli_error($base));
}

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

		<?php
		include ("menuadmin.php");
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
					$sqlaff = 'select *from  utilisateurs where   `utilisateurs`.`profil`="etud" and `utilisateurs`.`confirmer`="1" order by nom ASC';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
<table class="table">
<tr style="background:#999 ">
<td style="font-weight:bold">Nom</td>
<td style="font-weight:bold">Prenom</td>
<td style="font-weight:bold">CIN</td>
<td style="font-weight:bold">Email</td>
<td style="font-weight:bold">Phone</td>
<td style="font-weight:bold">Suppression</td>
                    
</tr>
					<?php
					 while ($data =mysqli_fetch_array($req)) {
						
					?>
					<tr>
                    <td><?php echo $data['nom']; ?>
                    </td>
                    <td><?php echo $data['prenom']; ?>
                    </td>
					<td><?php echo $data['cin']; ?>
                    </td>
					<td>
					<?php echo $data['mail']; ?>  <hr/>
                    
                    </td>
					<td>
                    <?php echo $data['tel']; ?>
                   </td>
                   <td>
                    <a href="listeadmin.php?suppr=<?php echo $data['cin']; ?>" style="float:right;" type="submit"   class="btn btn-xs btn-danger">
                        <span class="glyphicon glyphicon-trash"></span>
                         Supprimer </a>
                   </td>
                   </tr>
                     <?php } ?>
					
					
					
                    </table>
				</div>
						</center>
				</div>
				<?php
include("config.php");
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