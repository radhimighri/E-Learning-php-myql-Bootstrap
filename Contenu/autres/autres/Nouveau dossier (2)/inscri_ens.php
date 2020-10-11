<!DOCTYPE html>
<html lang="fr">
	<head>
			<?php
	session_start();
?>
<?php
include ("function.php");
	//	testSupAdmin();
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
				<link  href="css/style.css" rel="stylesheet">
				
				

	</head>
	
	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->
		<?php
		include ("menu.php");
		?>

		<div class="container theme-showcase" role="main">
<div><div>
			<?php
	include ("baniere.php");
	       ?>
			
			<?php
			include ("left.php");
			?>

			<div class="jumbotron" style="width: 73%; float: right;">
			<div class="row">
			<div class="page-header" style="margin-top: -6%;">
			<h2 align="center"></h2>
			</div>
			
			<form id="registration-form" action="inscri_ens.php" method="post" class="form-horizontal">
       
          <h3><font color="#3366FF">Inscription Enseignant:</font></h3>
         
                    
            <div class="form-control-group">
            <label class="control-label" for="name">CIN</label>
            <div class="controls">
              <input type="number" class="input-xlarge" name="cin" id="name" style="height: 30px;">
            </div>
          
           <div class="form-control-group">
            <label class="control-label" for="name">Nom</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="nom" id="name" style="height: 30px;">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name">Prenom</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="prenom" id="username" style="height: 30px;">
            </div>
          </div>
          
       
    <div class="form-control-group">
            <label class="control-label" for="name">Sexe</label>
            <div class="controls">
	        <input type="radio" name="sexe" value="Male" checked="checked">
			<strong>Male</strong></label>
			<input type="radio" name="sexe" value="Female">
			<strong>Female</strong>
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name">Date de naissance</label>
            <div class="controls">
              <input type="date" class="input-xlarge" name="date_n" id="username" style="height: 30px;">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="email">Address Email</label>
            <div class="controls">
              <input type="text" class="input-xlarge" name="email" id="email" style="height: 30px;">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name">Mot de passe</label>
            <div class="controls">
              <input type="password" class="input-xlarge" name="password" id="password" style="height: 30px;">
            </div>
          </div>
          
          <div class="form-control-group">
            <label class="control-label" for="name">Retapper mot de passe</label>
            <div class="controls">
              <input type="password" class="input-xlarge" name="confirm_password" id="confirm_password" style="height: 30px;">
            </div>
          </div>
          
		  
	 <div class="row">
                	<?php  
		  $sqldep = 'select *from  departement ';
		  $reqdep = mysql_query($sqldep) or die(mysql_error());
		  
		  ?>
                <label>Selectionner le departement</label>
             <div class="input-xlarge" style="margin-right:600px">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<select name="dep" class="form-control">
			<?php	while ($datad = mysql_fetch_array($reqdep)) {  ?>

			<option value="<?php echo $datad['id_departement']; ?>"><?php echo $datad['nom_departement']; ?></option>
			<?php } ?>
			</select>
			</div>

		  
		  
		  
          <div class="form-control-group">
            <label class="control-label" for="name">Télephone</label>
            <div class="controls">
             <input type="numeric" min="20000000" max="999999999" class="form-control" name="tel" placeholder="Telephone"/>                            </div>
            </div>
          </div>
     		  
          </div>
          
		  <div class="form-actions">
            <button type="reset" class="btn">Annuler</button>
            <button type="submit" name="valider" class="btn btn-success btn-large">Valider <span class="glyphicon glyphicon-thumbs-up"></span></button>
          </div>
          
          </form>
          </div>
        			<?php
			connectMaBase();
			//$test = false;

			if (isset($_POST['valider'])) {
					
				$cin = $_POST['cin'];
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$sexe = $_POST['sexe'];
				$date_n = $_POST['date_n'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$dep = $_POST['dep'];				
				$tel = $_POST['phone'];
					//On prépare la commande sql d'insertion
				$sql = 'INSERT INTO utilisateurs VALUES("","' . $cin . '","' . $nom . '","' . $prenom . '","' . $sexe . '","' . $date_n . '","' . $email . '","' . $password . '","' . $tel . '","ens","' . $dep . '","","0")';
				header('Location: ./inscrip_success.php');
				/*on lance la commande (mysql_query) et au cas où,
				 on rédige un petit message d'erreur si la requête ne passe pas (or die)
				 (Message qui intègrera les causes d'erreur sql)*/
				mysql_query($sql) or die('Erreur SQL !' . $sql . '<br />' . mysql_error());
			
								mysql_close();
			}
		?>
</div>
</div></div></div>
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