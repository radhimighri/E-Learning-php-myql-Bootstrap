<!DOCTYPE html>
<html lang="fr">
	<head>
			<?php
	session_start();
?>
<?php
include ("function.php");
//testEns();

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
		include ("menuproff.php");
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
		<form method="post" action="demandeens.php">
     
    <!--  
      
         <div class="form-group">
                            <label class="col-lg-3 control-label">Sujet</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="titre"  placeholder="Sujet"/> 
                            </div>
                        </div>
-->
      
      
      
      <div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>		
					<label class="col-lg-3 control-label">Sujet:</label>

			<input type="text" class="form-control" placeholder="Sujet"  name="titre" />
			</div>
			</div>
            
            <hr/>
</br></br></br>            
            
            <div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<label class="col-lg-3 control-label">Message:</label>
			<textarea type="text" class="form-control" style="height:200px;"   name="texte" >
            </textarea>
			</div><!-- /input-group -->
			</div>
            <hr/>
         <center>   <button type="submit" name="valide" class="btn btn-sm btn-success"> <span class="glyphicon glyphicon-send"></span> Envoyer</button> </center>

		    </form>		
            <?php
include("config.php");
			//$upload=false;
			if(isset($_POST['valide'])){
			
			$sujet =$_POST['titre'];
			$texte =$_POST['texte'];
			
			$Resultatidannance = 'SELECT * FROM demande where id_demande= (SELECT max(id_demande) FROM demande ) ';
			$reqResultatidannance = mysqli_query($base,$Resultatidannance) or die('Erreur SQL !<br />'.$Resultatidannance.'<br />'.mysqli_error($base)); 
			$data2 = mysqli_fetch_array($reqResultatidannance) ;
			$id=$data2['id_demande']+1;
			
			
			date_default_timezone_set('Africa/Tunis');
			$today =date("Y-m-d H:i:s");
			
			$sqlins='insert into demande values ("'.$id.'","'.$sujet.'","'.$texte.'","'.$today.'","'.$_SESSION['id_utilisateurs'].'","0")';
			$req = mysqli_query($base,$sqlins) or die(mysqli_error($base));
							 header('Location: ./demande_ajout_success.php');
			
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