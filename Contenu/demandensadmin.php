<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php
		session_start();
		?>
		<?php
		include ("function.php");
//testAdmin();
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
		<?php
include("config.php");
		
if ((isset($_GET['conf'])) && ($_GET['conf'] != "")) {
	$sqlupdate = 'UPDATE `demande` SET `vue`="1" where `demande`.`id_demande`="' . $_GET['conf'] . '" ';
	 mysqli_query($base,$sqlupdate);
}

		?>
				<link rel="shortcut icon"  href="icon/favicon.ico" >

	</head>

	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->
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
					$sqlaff = 'select * from  demande, utilisateurs where utilisateurs.profil="ens" and  `demande`.`utilisateurs_id_utilisateurs`=`utilisateurs`.`id_utilisateurs` and `demande`.`vue`="0" order by date_d ASC';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
<table class="table">
<tr style="background:#999 ">
<td style="font-weight:bold">Date</td>
<td style="font-weight:bold">Sujet</td>
<td style="font-weight:bold">Message</td>
<td style="font-weight:bold">Expediteur</td>
<td style="font-weight:bold">CIN</td>
<td style="font-weight:bold">Action</td>
                    
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					 while ($data =mysqli_fetch_array($req)) {
						
					?>
                    
					<tr <?php if($today==$data['date_d']){ ?>class="info" <?php }else { ?> class="active" <?php } ?> >
                    <td><?php echo $data['date_d']; ?> </td>
					<td><?php echo $data['sujet']; ?> </td>
                    <td><?php echo $data['contenu']; ?> </td>
					<td><?php echo $data['nom']; ?>&nbsp;<?php echo $data['prenom']; ?></td>
					<td><?php echo $data['cin']; ?> </td>
           			<td> <a href="demandensadmin.php?conf=<?php echo $data['id_demande']; ?>"  type="submit"   class="btn btn-xs btn-info">
                         Vue <span class="glyphicon glyphicon-eye-open"></span></a></td>
					</tr>
					
					<?php } ?>
                    </table>
				</div>
						</center>
				</div>
			<center>	<a href="demandensadmin.php?archive=1"  type="submit"   class="btn btn-sm btn-info"> Archive des demandes
                        <span class="glyphicon glyphicon-folder-open"></span></a>
                      </center>
                   <?php if(isset($_GET['archive'])=="1"){ ?>     
				<div class="jumbotron" style="width: 73%; float: right;">
				<div class="row">
					<?php
include("config.php");
					$sqlaff = 'select * from  demande, utilisateurs where utilisateurs.profil="ens" and  `demande`.`utilisateurs_id_utilisateurs`=`utilisateurs`.`id_utilisateurs` order by date_d DESC';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
<table class="table">
<tr style="background:#999 ">
<td style="font-weight:bold">Date</td>
<td style="font-weight:bold">Sujet</td>
<td style="font-weight:bold">Message</td>
<td style="font-weight:bold">Expediteur</td>
<td style="font-weight:bold">CIN</td>
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					 while ($data =mysqli_fetch_array($req)) {
						
					?>
                    
					<tr <?php if($today==$data['date_d']){ ?>class="info" <?php }else { ?> class="active" <?php } ?>>
                    <td><?php echo $data['date_d']; ?></td>
                    <td><?php echo $data['sujet']; ?></td>
                    <td><?php echo $data['contenu']; ?></td>
                    <td><?php echo $data['nom']; ?>&nbsp;<?php echo $data['prenom']; ?></td>
                    <td><?php echo $data['cin']; ?></td>	
					</tr>
					
					<?php } ?>
                    </table>
				</div>
						</center>
				</div>
				<?php  } ?>
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