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
connectMaBase();
?>

		<?php
		include ("incssjsmore.php");
		?>

		<title>ISMAI Kairouan</title>

		<?php
		include ("incssjs.php");
		?>
				<link rel="shortcut icon"  href="icon/favicon.ico" >
				<link href="css/style.css" rel="stylesheet">

	</head>

	<body role="document" style="margin-bottom: 90px;">

		<?php
		include ("menu.php");
		?>

		<div class="container theme-showcase" role="main">

			<?php
			include ("baniere.php");
			?>
			
			<?php
			include ("left.php");
			?>

			<div class="jumbotron" style="width: 73%; float: right;">
		
	
		<form id="registration-form"  action="mdp_oublie.php" method="post" class="form-horizontal">
       			<div class="alert alert-danger"><h4 ><font color="">Mot de passe oublié !!!</font></h4></div>

          <br/>
          
          <div class="form-control-group"> 
          <div class="form-control-group">
            <label class="control-label" for="email"><h4 ><font color="red">Tapez votre email pour recevoir votre mot de passe!!!</font></h4></label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="email" id="email" style="height: 30px;">
            </div>
          </div>
  		  
          </div>
          <br/>
		  <div class="form-actions">
            <button type="reset" class="btn">Annuler</button>
            <button type="submit" name="valider" class="btn btn-success btn-large">Envoyer</button>
          </div>
          
          </form>
		
		</div>
		
		
        
        
        
        <?php
			connectMaBase();
			//$test = false;

			if (isset($_POST['valider'])) {
				$email = $_POST['email'];
					//On prépare la commande sql d'insertion
				$sql='select * from  utilisateurs where utilisateurs.confirmer="1" and utilisateurs.mail="'.$email.'"' ;	
				$req = mysql_query($sql) or die(mysql_error());
				
				if(mysql_num_rows($req)>0){
					$sql = 'INSERT INTO motdepasse VALUES("","' . $email . '","0")';
					$req = mysql_query($sql) or die(mysql_error());
					header('Location: ./mdp_oublie_envoie_success.php');
				}
				
			
				//mysql_query($sql) or die('Erreur SQL !' . $sql . '<br />' . mysql_error());
				// on ferme la connexion
				mysql_close();
			}
		?>
        
        
        
        
       
        
        	</div>
		<?php
		include ("foot.php");
		?>
		<?php
		include ("fast.php");
		?>
		
				<script src="assets/js/jquery-1.7.1.min.js"></script> 

<script src="assets/js/jquery.validate.js"></script> 

<script src="script.js"></script> 
<script>
		addEventListener('load', prettyPrint, false);
		$(document).ready(function(){
		$('pre').addClass('prettyprint linenums');
			});
		</script> 

	</body>
</html>