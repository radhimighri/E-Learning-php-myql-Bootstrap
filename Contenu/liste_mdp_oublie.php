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

		<?php
		include ("incssjs.php");
		?>
		<?php
include("config.php");
		
if ((isset($_GET['conf'])) && ($_GET['conf'] != "")) {
	$sql='select * from  motdepasse,utilisateurs where `motdepasse`.`vue`="0" and utilisateurs.mail=motdepasse.email' ;	
		    $req = mysqli_query($base,$sql) or die(mysqli_error($base));
			$data=mysqli_fetch_array($req);
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


if ( mail($to, $objet, $message, $entetes))
    {
echo 'Le message a bien été envoyé';
}
else
{
echo 'Le message n\'a pu être envoyé';
} 
    

	$sqlupdate = 'UPDATE `motdepasse` SET `vue`="1" where `motdepasse`.`id_motdepasse`="' . $_GET['conf'] . '" ';
	 mysqli_query($base,$sqlupdate);
}
?>

<?php 
			
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
				<form action="liste_mdp_oublie.php" method="GET">
				<div class="row">
					<?php
include("config.php");
					$sqlaff = 'select * from  motdepasse where  `motdepasse`.`vue`="0"';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error());
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
					 while ($data =mysqli_fetch_array($req)) {
						
					?>
                    
					<tr class="info" >
					<td><?php echo $data['email']; ?> </td>
           				<td> <a href="liste_mdp_oublie.php?conf=<?php echo $data['id_motdepasse']; ?>"  type="submit"   class="btn btn-xs btn-success">
                       Envoyer mot de passe  <span class="glyphicon glyphicon-send"></span></a></td>
                       
					</tr>
					
					<?php } ?>
                  </table>
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