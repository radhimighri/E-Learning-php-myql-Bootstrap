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
		
if ((isset($_GET['suppr'])) && ($_GET['suppr'] != "")) {
	$deleteSQL = sprintf("DELETE FROM cours WHERE id_cours=%s", GetSQLValueString($_GET['suppr'], "int"));

	//mysql_select_db("ismaik1");
	$Result1 = mysqli_query($base,$deleteSQL) or die(mysqli_error($base));
}

		?>
				<link rel="shortcut icon"  href="icon/favicon.ico" >

		
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
					<?php
include("config.php");
					$sqlaff = 'select * from  cours , utilisateurs  where `cours`.`utilisateur_id_utilisateur`= `utilisateurs`.`id_utilisateurs` and `utilisateurs`.`id_utilisateurs`="'.$_SESSION['id_utilisateurs'].'"  order by date_cours DESC';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
<table class="table">
<tr style="background:#001 ">
<td style="font-weight:bold"><font  color="#FFFFFF"></font></td>
<td style="font-weight:bold"><font  color="#FFFFFF">Titre</font></td>
	<td style="font-weight:bold"><font  color="#FFFFFF">Type</font></td>
<td style="font-weight:bold"><font  color="#FFFFFF">Fichier</font></td>
<td style="font-weight:bold"><font  color="#FFFFFF">Action</font></td>
<td style="font-weight:bold"><font  color="#FFFFFF"></font></td>
                  
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					 while ($data =mysqli_fetch_array($req)) {
						
					?>
                    
					<tr <?php if($today==$data['date_cours']){ ?>class="info" <?php }else { ?> class="active" <?php } ?>>
                    <?php if($today==$data['date_cours']){ ?><td><img src="images/fixe/new2.gif" alt="" /></td><?php }else { ?><td></td><?php } ?>
                    <td><?php echo $data['nom_cours']; ?><br /><?php echo $data['date_cours']; ?>
                    </td>
                    <td><?php echo $data['Type_cour']; ?></td>
					<td>
                    
                    <?php if($data['file_cour']!=""){ ?>
                    <a class="btn btn-xs btn-success" href="<?php echo $data['file_cour']; ?>">
                     <span class="glyphicon glyphicon-download-alt"></span>
                     Telecharger</a>
                     <?php } ?>
                    </td>
                   
			<td> 
						
						<a href="listecourprof.php?suppr=<?php echo $data['id_cours']; ?>" style="float:right;" type="submit"   class="btn btn-xs btn-danger">
                        <span class="glyphicon glyphicon-trash"></span>
                         Supprimer </a>
					</td>

				   
				   
					
           				<td> 
						<center>
						<a href="commentaireprof.php?id_cour=<?php echo $data['id_cours']; ?>"    class="btn btn-xs btn-info">
                        <span class="glyphicon glyphicon-pencil"></span>
                         Commentaires </a>
                         </center>
					</td>
					</tr>
					
					<?php } ?>
                    </table>
				</div>
						
						
				</div>
				<?php
//include("config.php");
				?>
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