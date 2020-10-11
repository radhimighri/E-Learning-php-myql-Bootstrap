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
include("config.php");
?>
 <?php
include("config.php");
			$upload=false;
			if(isset($_POST['valide'])){
			
			$res =$_POST['res'];
			$id =$_POST['id'];
		    $moy =$_POST['moy'];
			
			$Resultatidannance1 = 'SELECT * FROM resultat where id_resultat= (SELECT max(id_resultat) FROM resultat ) ';
			$reqResultatidannance1 = mysqli_query($base,$Resultatidannance1) or die('Erreur SQL !<br />'.$Resultatidannance1.'<br />'.mysqli_error($base)); 
			$data21 = mysqli_fetch_array($reqResultatidannance1) ;
			$id21=$data21['id_resultat']+1;
			
			$sqlins='insert into resultat values ("'.$id21.'","'.$res.'","'.$moy.'","","'.$id.'")';
			 $req = mysqli_query($base,$sqlins) or die(mysqli_error($base));
			 
			 $Resultatidannance = 'SELECT * FROM resultat where id_resultat= (SELECT max(id_resultat) FROM resultat ) ';
			$reqResultatidannance = mysqli_query($base,$Resultatidannance) or die('Erreur SQL !<br />'.$Resultatidannance.'<br />'.mysqli_error($base)); 
			$data2 = mysqli_fetch_array($reqResultatidannance) ;
			 $upload=true;
			// $_SESSION['selectg']=false;
			 $_SESSION['id_resultat']=$data2['id_resultat'];
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
                <?php
include("config.php");
					$sqlaff = 'select *from  utilisateurs where  `utilisateurs`.`profil`="etud" order by nom ASC';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
					
				<form  action="envoiresultat.php" method="post">
		    <div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<select name="id" class="form-control">
			<?php	while ($datag = mysqli_fetch_array($req)) {  ?>

			<option value="<?php echo $datag['id_utilisateurs']; ?>"> <?php echo $datag['nom']; ?>  &nbsp;<?php echo $datag['prenom']; ?> : <?php echo $datag['cin']; ?></option>
			<?php } ?>
			</select>
			</div>
			</div>
			<hr />

<br />			<div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<select name="res" class="form-control">
			<option value="Admis">Admis</option>
			<option value="Control">Control</option>
			<option value="Refusé">Refusé</option>
			
			</select>
			</div>
			
			</div>
			</br>
			
			
			<div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
	
			<input type="text" class="form-control" placeholder="Moyenne"  name="moy" />
			
			</div>		
			</div>
			</br>
			
			
			
			
			<button  style="float:right;" type="submit"  name="valide" class="btn btn-sm btn-success">
                        <span class="glyphicon glyphicon-send"></span>
                         Envoyer </button>
                         </form>
				<?php
include("config.php");
				?>
													

				</div>
				
				  <hr/>
                <hr/>
                <?php if($upload){ ?>
                <div class="row">
                <form action="envoiresultat.php" method="post" enctype="multipart/form-data" id="validimg">
                <label>Ajouter la  rlever de note</label>
                <input type="file" name="nom_image" class="btn btn-info"/><br />
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
					<input type="hidden" name="id_resultat" value="<?php echo $data2['id_resultat'] ;?>" />
					<button type="submit" name="upload" class="btn btn-info">upload</button>
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
$TARGET_PATH = "resultat/";	
$image = $_FILES['nom_image'];
$id_an = $_POST['id_resultat'];
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
	
	$sql= 'UPDATE `resultat` SET `relever`="' . $TARGET_PATH . '"  where `resultat`.`id_resultat`="' . $id_an . '"  ';
	$result = mysqli_query($base,$sql) or die ("Could not insert data into DB: " . mysqli_error($base));
	$_SESSION['selectg']=true;
	header("Location: envoiresultat.php");
	//exit;
}
}
				?>

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