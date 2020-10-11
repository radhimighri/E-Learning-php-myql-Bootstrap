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
	include ("config.php");
		?>

<?php 
if(isset($_POST['idcour'])){
	$_GET['id_cour']=$_POST['idcour'];
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
		<?php
	include ("config.php");
		
if ((isset($_GET['suppr'])) && ($_GET['suppr'] != "")) {
	$deleteSQL = sprintf("DELETE FROM commentaire WHERE id_commentaire=%s", GetSQLValueString($_GET['suppr'], "int"));

	//mysql_select_db("ismaik1");
	$Result1 = mysqli_query($base,$deleteSQL) or die(mysqli_error($base));
}


if ((isset($_POST['coment'])) && ($_POST['coment'] != "")) {
	
	date_default_timezone_set('Africa/Tunis');
	$today =date("Y-m-d H:i:s");
	
	
	$Resultatidannance = 'SELECT * FROM commentaire where id_commentaire= (SELECT max(id_commentaire) FROM commentaire ) ';
			$reqResultatidannance = mysqli_query($base,$Resultatidannance) or die('Erreur SQL !<br />'.$Resultatidannance.'<br />'.mysqli_error($base)); 
			$data2 = mysqli_fetch_array($reqResultatidannance) ;
			$id=$data2['id_commentaire']+1;
	
	$sqlins='insert into commentaire values ("'.$id.'","'.$_POST['coment'].'","'.$_SESSION['id_utilisateurs'].'","'.$_SESSION['cour'].'","'.$today.'")';
	$req = mysqli_query($base,$sqlins) or die(mysqli_error($base));
	
}
		?>
		
		
				<link rel="shortcut icon"  href="icon/favicon.ico" >

		
	</head>

	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->
<?php
include ("menu.php");
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
					
					<?php
	include ("config.php");
					
					if(isset($_GET['id_cour']) && $_GET['id_cour']!=""){
						$_SESSION['cour']=$_GET['id_cour'];
					$sqlaff = 'select * from  cours,  utilisateurs  where  `cours`.`utilisateur_id_utilisateur`= `utilisateurs`.`id_utilisateurs` and   `cours`.`id_cours`="'.$_SESSION['cour'].'" order by date_cours DESC';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
<table class="table">
<tr style="background:#001 ">
<td style="font-weight:bold"><font  color="#FFFFFF"></font></td>
<td style="font-weight:bold"><font  color="#FFFFFF">Titre</font></td>
<td style="font-weight:bold"><font  color="#FFFFFF">Type</font></td>
<td style="font-weight:bold"><font  color="#FFFFFF">Fichier</font></td>
<td style="font-weight:bold"><font  color="#FFFFFF">Description </font></td>
<td style="font-weight:bold"><font  color="#FFFFFF">Prof </font></td>
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					$data =mysqli_fetch_array($req);
						
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
                     Télecharger</a>
                     <?php } ?>
                    </td>
                   
					
           				<td><?php echo $data['description']; ?></td>
					<td><?php echo $data['nom']; ?>--<?php echo $data['prenom']; ?></td>
					<td></td>
					</tr>
					
                    </table>
                    <br />
                    
                    <table class="table">
<tr style="background:#001 ">
<td style="font-weight:bold"><font  color="#FFFFFF">Liste des commentaires :</font></td>

</tr>
                    <br />
                    <?php  
                    $sqlcom = 'select * from  commentaire , utilisateurs  where commentaire.user_id_user= `utilisateurs`.`id_utilisateurs` and `commentaire`.`cours_id_cours`="'.$_SESSION['cour'].'" order by date_c DESC';
					$reqcom = mysqli_query($base,$sqlcom) or die(mysqli_error($base));
					
					 while ($data =mysqli_fetch_array($reqcom)) {
					?>
                   	<?php  
					if($data['profil']=="ens"){
						?>
                   <tr class="danger"> 
                   	<td>
                    <?php echo $data['nom']; ?>&nbsp; <?php echo $data['prenom']; ?> a : <?php echo $data['date_c']; ?><br />
                  </td> </tr> 
                  <tr >
                  	 <td>
                   <?php echo $data['comm']; ?><br />
                   <?php if($data['cin']==$_SESSION['cin']){ ?>
                   <a href="commentaireetudiant.php?suppr=<?php echo $data['id_commentaire']; ?>&amp;id_cour=<?php echo $_GET['id_cour']; ?>" style="float:right;" type="submit"   class="btn btn-xs btn-danger">
                        <span class="glyphicon glyphicon-trash"></span>
                         Supprimer </a>
                   
                <?php }   ?>
                     </td>
                   </tr>
						<?php
					}else{
					?>
                   <tr class="info"> 
                   	<td>
                    <?php echo $data['nom']; ?>&nbsp; <?php echo $data['prenom']; ?> a : <?php echo $data['date_c']; ?><br />
                    
                  </td> </tr> 
                  <tr >
                  	 <td>
                   <?php echo $data['comm']; ?><br />
                   <?php if($data['cin']==$_SESSION['cin']){ ?>
                   <a href="commentaireetudiant.php?suppr=<?php echo $data['id_commentaire']; ?>&amp;id_cour=<?php echo $_GET['id_cour']; ?>" style="float:right;" type="submit"   class="btn btn-xs btn-danger">
                        <span class="glyphicon glyphicon-trash"></span>
                         Supprimer </a>
                   
                <?php }   ?>
                     </td>
                   </tr>
                   <?php } } ?>
                    </table>
                    <hr />
                    <form action="commentaireetudiant.php"  method="post">
                    	<textarea name="coment" rows="5" style="width: 100%"></textarea>
                    	<input type="hidden" name="idcour" value="<?php echo $_GET['id_cour']; ?>" />
                    	<center>
						<button type="submit"   class="btn btn-xs btn-info">
                        <span class="glyphicon glyphicon-pencil"></span>
                         Commenter </button>
                         </center>
                    </form>
                    <?php    } else { ?>
                 <div class="alert alert-danger"><h4 ><font color="">pas de cour selectionné !!!</font></h4></div>
                    	<?php   } ?>
				</div>
						
						
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