<!DOCTYPE html>
<html lang="fr">
	<head>
<?php
	session_start();
?>
<?php
include ("function.php");
//testuser();
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
				<link rel="shortcut icon"  href="icon/favicon.ico" >

		</head>

	<body role="document" style="margin-bottom: 90px;">
	
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
<?php
if($_SESSION['profil']=="ens"){
include ("menuproff.php");
}
?>
<?php
if($_SESSION['profil']=="etud"){
include ("menu.php");
}
?>
		

		<div class="container theme-showcase" role="main" >

			<?php
			include ("baniere.php");
			?>
			
			<?php
			include ("left.php");
			?>

			<div class="jumbotron" style="width: 73%; float: right; " >
				
				

				<div class="row">
                    <?php
	include ("config.php");
					
if($_SESSION['profil']=="ens"){
					$sqlaff = 'select *from  publications where publications.profil="ens" or publications.profil="tout_monde"  order by date_p DESC LIMIT 5';
}
if($_SESSION['profil']=="etud"){
					$sqlaff = 'select *from  publications where publications.profil="etu" or publications.profil="tout_monde" order by date_p DESC LIMIT 5';
}


					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
                    <div align="center"></br></br>
                  </div>
                    <table class="table">
<tr style="background:#999">
<td style="font-weight:bold"></td>
<td style="font-weight:bold"><font color="#000000">Date</font></td>
<td style="font-weight:bold"><font color="#000000">Contenu</font></td>
<td style="font-weight:bold"><font color="#000000">Fichier</font></td>
                    
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					 while ($data =mysqli_fetch_array($req)) {
						
					?>
                   <tr <?php if($today==$data['date_p']){ ?>class="info" <?php }else { ?> class="active" <?php } ?>>
                    <?php if($today==$data['date_p']){ ?><td><img src="images/fixe/new2.gif" alt="" /></td><?php }else { ?><td></td><?php } ?>
                    <td><?php echo $data['date_p']; ?>
                    </td>
					<td>
					<?php echo $data['sujet']; ?> <hr/>
                    <?php echo $data['texte']; ?>
                    </td>
					<td>
                    <?php if($data['docpulication']!=""){ ?>
                    <a class="btn btn-xs btn-success" href="<?php echo $data['docpulication']; ?>">
                     <span class="glyphicon glyphicon-download-alt"></span>
                     Télecharger</a>
                     <?php } ?>
                    </td>
                    
					</tr>
					
					<?php } ?>
                  </table>
                  
                  
                  <?php if(isset($_GET['archive'])=="1"){ ?>     
                  <div align="center">
                    <?php
	include ("config.php");
					if($_SESSION['profil']=="ens"){
					$sqlaff = 'select *from  publications where publications.profil="ens" or publications.profil="tout_monde"  order by date_p DESC LIMIT 5,1000';}
                    if($_SESSION['profil']=="etud"){
					$sqlaff = 'select *from  publications where publications.profil="etu" or publications.profil="tout_monde" order by date_p DESC LIMIT 5,1000';}
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
                  </div>
                    <table class="table">
<tr style="background:#999">
<td ></td>
<td ></td>
<td></td>
<td></td>
                    
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					 while ($data =mysqli_fetch_array($req)) {
						
					?>
                   <tr <?php if($today==$data['date_p']){ ?>class="info" <?php }else { ?> class="active" <?php } ?>>
                    <?php if($today==$data['date_p']){ ?><td><img src="images/fixe/new2.gif" alt="" /></td><?php }else { ?><td></td><?php } ?>
                    <td><?php echo $data['date_p']; ?>
                    </td>
					<td>
					<?php echo $data['sujet']; ?><hr/>
                    <?php echo $data['texte']; ?>
                    </td>
					<td>
                    <?php if($data['docpulication']!=""){ ?>
                    <a class="btn btn-xs btn-success" href="<?php echo $data['docpulication']; ?>">
                     <span class="glyphicon glyphicon-download-alt"></span>
                     Télecharger</a>
                     <?php } ?>
                    </td>
                    
					</tr>
					
					<?php } ?>
                  </table>
			  <?php  } ?>

			  </div>
						</center>
						<center>	<a href="index1.php?archive=1"  type="submit"   class="btn btn-sm btn-primary"> Archive</a>
						</center>
		  </div>
		  									

</div>		</div>
		<?php
		include ("foot.php");
		?>

		<?php
		include ("fast.php");
		?>

	</body>

</html>