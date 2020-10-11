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

		<?php
		include ("incssjs.php");
		?>
		<?php
		connectMaBase();   
		
if ((isset($_GET['conf'])) && ($_GET['conf'] != "")) {
	$sqlupdate = 'UPDATE `motdepasse` SET `vue`="1" where `motdepasse`.`id_motdepasse`="' . $_GET['conf'] . '" ';
	 mysql_query($sqlupdate);
}
?>

<?php 
			$sql='select * from  motdepasse,utilisateurs where `motdepasse`.`vue`="0" and utilisateurs.mail=motdepasse.email' ;	
		    $req = mysql_query($sql) or die(mysql_error());
			$data=mysql_fetch_array($req);
            $email=$data['email'];
					
ini_set("SMTP","127.0.0.1");
ini_set("smtp_port","25");
$to = $data['email'];
$objet  = utf8_decode("Récuperation de Mot de passe");
$entetes= "From: ISMAI KAIROUAN \r\n";
$message = "Bonjour" .$data['nom']. "  " .$data['prenom'].
"Vous avez demandé vos informations de connexion sur ISMAI KAIROUAN
Vos informations sont :
     - votre identifiant :" .$data['cin'].
     "- votre mot de passe :" .$data['password'].
"A bientôt sur ISMAI KAIROUAN ";

 if ((isset($_POST['envoie'])) && ($_POST['envoie'] != "")) {

if ( mail($to, $objet, $message, $entetes))
    {
echo 'Le message a bien été envoyé';
}
else
{
echo 'Le message n\'a pu être envoyé';
} 
    
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
				<form action="liste_mdp_oublie" method="post">
				<div class="row">
					<?php
					connectMaBase();
					$sqlaff = 'select * from  motdepasse where  `motdepasse`.`vue`="0"';
					$req = mysql_query($sqlaff) or die(mysql_error());
					?>
<table class="table">
<tr style="background:#999 ">
<td style="font-weight:bold">Liste des emails associées aux mots de passe oubliées :</td>
<td style="font-weight:bold"></td>                    
<td style="font-weight:bold"></td>                    

</tr>
					<?php
					//date_default_timezone_set('Africa/Tunis');
					//$today =date("Y-m-d");
					 while ($data =mysql_fetch_array($req)) {
						
					?>
                    
					<tr class="info" >
					<td><?php echo $data['email']; ?> </td>
           			<td><a href="liste_mdp_oublie.php?envoie=<?php echo $data['id_motdepasse']; ?>"  type="submit"   class="btn btn-xs btn-success">
                       Envoie password <span class="glyphicon glyphicon-send"></span></a></td>
           			<td> <a href="liste_mdp_oublie.php?conf=<?php echo $data['id_motdepasse']; ?>"  type="submit"   class="btn btn-xs btn-info">
                       Confirmer <span class="glyphicon glyphicon-thumbs-up"></span></a></td>
                       
					</tr>
					
					<?php } ?>
                    </table>
				</div>
				</div>
			</form>
			</div>
			<?php
			include ("foot.php");
			?>

			<?php
			include ("fast.php");
			?>
	</body>
</html>