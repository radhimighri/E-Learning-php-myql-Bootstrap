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
				<link rel="shortcut icon"  href="icon/favicon.ico" >

	</head>

	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->
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
				<div class="row">
				<form action="ajoutergroupeadmin.php" method="post" name="formulaire" >
							<div class="input-xlarge">
			<div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<label class="col-lg-3 control-label">Nom de groupe:</label>

			<input type="text" class="form-control" placeholder="nom groupe"  name="nom" />
			</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
			</div>	
			<hr />	
			<center>
			<button type="submit" name="valider" class="btn btn-sm btn-success">
			Valider <span class="glyphicon glyphicon-thumbs-up"></span>
			</button></center>			
				
				</form>

				</div>
			</div>
			<?php
include("config.php");
			if(isset($_POST['valider'])){
			
			$nomgroupe =$_POST['nom'];
			
			$Resultatidannance = 'SELECT * FROM groupes where id_groupe= (SELECT max(id_groupe) FROM groupes ) ';
			$reqResultatidannance = mysqli_query($base,$Resultatidannance) or die('Erreur SQL !<br />'.$Resultatidannance.'<br />'.mysqli_error($base)); 
			$data2 = mysqli_fetch_array($reqResultatidannance) ;
			$id=$data2['id_groupe']+1;
			$sqlins='insert into groupes values ("'.$id.'","'.$nomgroupe.'")';
			 $req = mysqli_query($base,$sqlins) or die(mysqli_error($base));
			 				 header('Location: groupe_ajout_success.php');
			 
			}
			
			?>
		
		</div>
		<?php
		include ("foot.php");
		?>
		<?php
		include ("fast.php");
		?>

	</body>
</html>