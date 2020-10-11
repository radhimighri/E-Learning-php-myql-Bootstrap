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
		connectMaBase();
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
		connectMaBase();   
		
		// enseignant
		
if ((isset($_GET['suppr'])) && ($_GET['suppr'] != "")) {
	$deleteSQL = sprintf("DELETE FROM utilisateurs WHERE utilisateurs.profil=ens and id_utilisateurs=%s", GetSQLValueString($_GET['suppr'], "int"));

	mysql_select_db("ismaik1");
	$Result1 = mysql_query($deleteSQL) or die(mysql_error());
}

if ((isset($_GET['conf'])) && ($_GET['conf'] != "")) {
	$sqlupdate = 'UPDATE ` utilisateurs` SET `confirmer`="1" where `utilisateurs`.`id_utilisateurs`="' . $_GET['conf'] . '" ';
	 mysql_query($sqlupdate);
}


// etudiant
if ((isset($_GET['suppre'])) && ($_GET['suppre'] != "")) {
	$deleteSQL = sprintf("DELETE FROM utilisateurs WHERE utilisateurs.profil=etud and id_utilisateurs=%s", GetSQLValueString($_GET['suppre'], "int"));

	mysql_select_db("ismaik1");
	$Result1 = mysql_query($deleteSQL) or die(mysql_error());
}

if ((isset($_GET['confe'])) && ($_GET['confe'] != "")) {
	$sqlupdate = 'UPDATE ` utilisateurs` SET `confirmer`="1" where utilisateurs.profil=etud and `utilisateurs`.`id_utilisateurs`="' . $_GET['confe'] . '" ';
	 mysql_query($sqlupdate);
}
		?>
		
<link rel="shortcut icon"  href="icon/favicon.ico" >
	</head>

	<body role="document" style="margin-bottom: 90px;">		
		
		<?php
					connectMaBase();
					$result=mysql_query("SELECT count(*) as total from utilisateurs where utilisateurs.confirmer='0' and utilisateurs.profil='ens'");
					$data=mysql_fetch_assoc($result);
					//connectMaBase();
					$results=mysql_query("SELECT count(*) as total from utilisateurs where utilisateurs.confirmer='0' and utilisateurs.profil='etud'");
					$datas=mysql_fetch_assoc($results);
					$d['somme']=$datas['total'] + $data['total'];
					
					
					//$sqlcount = 'select count (id_enseignant)  from  enseignant where enseignant.confirmer="0" ';
					//$reqcount = mysql_query($sqlcount) or die(mysql_error());
					//$nb= mysql_fetch_array($reqcount);
					?>
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

			<div class="jumbotron" style="width: 73%; float: right;"><h3>Confirmer inscription enseignant :</h3> 
			  <div class="row">
					<?php
					
					connectMaBase();
					$sqlaff = "select * from  utilisateurs where utilisateurs.profil='ens' and utilisateurs.confirmer='0' order by nom";
					$req = mysql_query($sqlaff) or die(mysql_error());
					?>
					<form action="confirmeradmin.php" method="post">
						<div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			</div><!-- /input-group -->
			</div> 
					</form>
					
<table class="table">
<tr style="background:#999 ">
<td style="font-weight:bold">CIN</td>
<td style="font-weight:bold">Nom</td>
<td style="font-weight:bold">Prenom</td>
<td style="font-weight:bold">Action</td>
                    
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					 while ($data =mysql_fetch_array($req)) {
						
					?>
                    
					<tr >
						<td><?php echo $data['cin']; ?>
                    </td>
                    <td><?php echo $data['nom']; ?>
                    </td>
					<td><?php echo $data['prenom']; ?> 
                    </td>
					
                    <td> 
           					<a href="confirmeradmin.php?conf=<?php echo $data['id_utilisateurs']; ?>"  type="submit"   class="btn btn-sm btn-success">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                         confirmer </a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="confirmeradmin.php?suppr=<?php echo $data['id_utilisateurs']; ?>" type="submit"   class="btn btn-sm btn-danger">
                        <span class="glyphicon glyphicon-thumbs-down"></span>
                         réfuser </a>
					</td>
                    
					</tr>
					
					<?php } ?>
                </table>
			  </div>
						</center>
		  </div>
				
				<div class="jumbotron" style="width: 73%; float: right;"><h3>Confirmer inscription etudiant :</h3> 
				  <div class="row">
					<?php
					connectMaBase();
					$sqlaff = "select *from  utilisateurs where utilisateurs.profil='etud' and  utilisateurs.confirmer='0' order by nom";
					$req = mysql_query($sqlaff) or die(mysql_error());
					?>
					<form action="confirmeradmin.php" method="post">
						<div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			</div><!-- /input-group -->
			</div> 
					</form>
					
						
					
<table class="table">
<tr style="background:#999 ">
<td style="font-weight:bold">CIN</td>
<td style="font-weight:bold">Nom</td>
<td style="font-weight:bold">Prenom</td>
<td style="font-weight:bold">Action</td>
                    
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					 while ($data =mysql_fetch_array($req)) {
						
					?>
                    
					<tr >
						<td><?php echo $data['cin']; ?>
                    </td>
                    <td><?php echo $data['nom']; ?>
                    </td>
					<td><?php echo $data['prenom']; ?> 
       
                    </td>
                    <td> 
           					<a href="confirmeradmin.php?confe=<?php echo $data['id_utilisateurs']; ?>"  type="submit"   class="btn btn-sm btn-success">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                         confirmer </a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="confirmeradmin.php?suppre=<?php echo $data['id_utilisateurs']; ?>" type="submit"   class="btn btn-sm btn-danger">
                        <span class="glyphicon glyphicon-thumbs-down"></span>
                         réfuser </a>
					</td>
                    
					</tr>
					
					<?php } ?>
                  </table>
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