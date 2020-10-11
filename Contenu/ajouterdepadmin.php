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
				<form action="ajouterdepadmin.php" method="post" name="formulaire" >
<div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<label class="col-lg-3 control-label">Nom departement:</label>

			<input type="text" class="form-control" placeholder="nom departement"  name="nom" />
			</div><!-- /input-group -->
			</div><!-- /.col-lg-6 -->
			</div>	
			<hr />	</br></br>	
			 <?php  
		  //connexionabase();
		  $sqluser = "select * from  utilisateurs where utilisateurs.profil='ens'";
		  $requser = mysqli_query($base,$sqluser) or die(mysqli_error($base));
		  
		  ?>
			<div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
						<label class="col-lg-3 control-label">Chef departement:</label>

			<select name="chef" class="form-control">
			<?php	while ($datag = mysqli_fetch_array($requser)) {  ?>

			<option value="<?php echo $datag['nom'].' '.$datag['prenom']; ?>"><?php echo $datag['nom'].' '.$datag['prenom']; ?></option>
			<?php } ?>
			</select>
			</div>
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
			
			$nom =$_POST['nom'];
			$chef =$_POST['chef'];
			
			
			$Resultatidannance = 'SELECT * FROM departement where id_departement= (SELECT max(id_departement) FROM departement ) ';
			$reqResultatidannance = mysqli_query($base,$Resultatidannance) or die('Erreur SQL !<br />'.$Resultatidannance.'<br />'.mysqli_error($base)); 
			$data2 = mysqli_fetch_array($reqResultatidannance) ;
			$id=$data2['id_departement']+1;
			
			
			$sqlins='insert into departement values ("'.$id.'","'.$nom.'","'.$chef.'")';
			 $req = mysqli_query($base,$sqlins) or die(mysqli_error($base));
			 				 header('Location: ./dep_ajout_success.php');
			 
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