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
if($_SESSION['profil']=="root"){
include ("menuroot.php");
}
?>
<?php
if($_SESSION['profil']=="admin"){
include ("menuadmin.php");
}	
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
						<form method="post" action="publicationadmin.php#validimg">
            <div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			                            <label class="col-lg-3 control-label">Sujet:</label>

			<input type="text" class="form-control" placeholder="Sujet"  name="sujet" />
			</div><!-- /input-group -->
			</div>
            <hr/>
            
            <div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			                            <label class="col-lg-3 control-label">Texte:</label>

			<textarea type="text" class="form-control" style="height:200px;"   name="texte" >
            </textarea>
			</div><!-- /input-group -->
			</div>
            <hr/>
       </br>
            <div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
		<label class="col-lg-3 control-label">Cible:</label>

<select name="profil" class="form-control">
	
				<option value="ens">Pour les ensignants</option>
		    	<option value="etu">Pour les étudiants</option>
			    <option value="tout_monde">Tous les deux</option>
		    	
			</select>
</div>
			</div>
				
			</br>
			</br></br>
         <center>   <button type="submit" name="valide" class="btn btn-success">Publier</button> 
         </center>

		    </form>		
            <?php
include("config.php");
			$upload=false;
			if(isset($_POST['valide'])){
			
			$sujet =$_POST['sujet'];
			$texte =$_POST['texte'];
			$profil =$_POST['profil'];
			
			date_default_timezone_set('Africa/Tunis');
			$today =date("Y-m-d");
			
			$Resultatidannance = 'SELECT * FROM publications where id_publication= (SELECT max(id_publication) FROM publications ) ';
			$reqResultatidannance = mysqli_query($base,$Resultatidannance) or die('Erreur SQL !<br />'.$Resultatidannance.'<br />'.mysqli_error($base)); 
			$data2 = mysqli_fetch_array($reqResultatidannance) ;
			$id=$data2['id_publication']+1;
			
			$sqlins='insert into publications values ("'.$id.'","'.$sujet.'","'.$today.'","'.$texte.'","","'.$profil.'")';
			$req = mysqli_query($base,$sqlins) or die(mysqli_error($base));
			$Resultatidannance = 'SELECT * FROM publications where id_publication= (SELECT max(id_publication) FROM publications ) ';
			$reqResultatidannance = mysqli_query($base,$Resultatidannance) or die('Erreur SQL !<br />'.$Resultatidannance.'<br />'.mysqli_error($base)); 
			$data2 = mysqli_fetch_array($reqResultatidannance) ;
			$upload=true;
			}
			?>					
			</div>
                <hr/>
               
                <?php if($upload){ ?>
                <div class="row" align="center">
                <form action="publicationadmin.php" method="post" enctype="multipart/form-data" id="validimg">
                <label>Selectionner Fichier</label>
                <input type="file" name="nom_image" class="btn btn-primary"/><br />
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
					<input type="hidden" name="id_pub" value="<?php echo $data2['id_publication'] ;?>" />
					<button type="submit" name="upload" class="btn btn-primary">Charger Fichier</button>
                </form>
                </div>
                <?php } ?>
			</div>
            
		</div>
        <?php 
if (isset ($_POST['upload'])){
        // Start a session for error reporting
//session_start();

// Call our connection file
include("config.php");

function showContents($array)
{
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}
$TARGET_PATH = "doc/";	
$image = $_FILES['nom_image'];
$id_an = $_POST['id_pub'];
$id_an = mysqli_real_escape_string($base,$id_an);
$image['name'] = mysqli_real_escape_string($base,$image['name']);
$TARGET_PATH .= $image['name'];	
if ( $id_an == ""  || $image['name'] == "" ){
	$_SESSION['error'] = "All fields are required";
	$im=false;
}
if (file_exists($TARGET_PATH)){
	$_SESSION['error'] = "A file with that name already exists";
	$rand = substr(md5(microtime()),rand(0,26),5);
	$seed = str_split('abcdefghijklmnopqrstuvwxyz'
                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
                 .'0123456789!@#$%^&*()'); // and any other characters
shuffle($seed); // probably optional since array_is randomized; this may be redundant
$rand = '';
foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];
	
	
	$TARGET_PATH =$rand.$TARGET_PATH;
	
}
				if (move_uploaded_file($image['tmp_name'], $TARGET_PATH))
{
	// NOTE: This is where a lot of people make mistakes.
	// We are *not* putting the image into the database; we are putting a reference to the file's location on the server
	
	$sql= 'UPDATE `publications` SET `docpulication`="' . $TARGET_PATH . '"  where `publications`.`id_publication`="' . $id_an . '"  ';
	$result = mysqli_query($base,$sql) or die ("Could not insert data into DB: " . mysqli_error($base));
	//header("Location: deposeannance.php#validimg");
	//exit;
}
}
				?>
               
                
		<?php
		include ("foot.php");
		?>

		<!-- /container -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<?php
		include ("fast.php");
		?>

	</body>
</html>