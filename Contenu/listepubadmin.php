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
		<?php
include("config.php");
		
if ((isset($_GET['suppr'])) && ($_GET['suppr'] != "")) {
	$deleteSQL = sprintf("DELETE FROM publications WHERE id_publication=%s", GetSQLValueString($_GET['suppr'], "int"));

	//mysql_select_db("ismaik1");
	$Result1 = mysqli_query($base,$deleteSQL) or die(mysqli_error($base));
}

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
					$sqlaff = 'select *from  publications  order by date_p DESC';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
<table class="table">
<tr style="background:#999 ">
<td style="font-weight:bold"><font></td>
<td style="font-weight:bold">Date</td>
<td style="font-weight:bold">Sujet</td>
<td style="font-weight:bold">Fichier</td>
<td style="font-weight:bold">Action</td>
                    
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
					<td><?php echo $data['sujet']; ?> <hr/>
                    <?php echo $data['texte']; ?>
                    </td>
					<td>
                    
                    <?php if($data['docpulication']!=""){ ?>
                    <a class="btn btn-xs btn-success" href="<?php echo $data['docpulication']; ?>">
                     <span class="glyphicon glyphicon-download-alt"></span>
                     Télecharger</a>
                     <?php } ?>
                    </td>
                    
					
           				<td> 
						
						<a href="listepubadmin.php?suppr=<?php echo $data['id_publication']; ?>" style="float:right;" type="submit"   class="btn btn-xs btn-danger">
                        <span class="glyphicon glyphicon-trash"></span>
                         Supprimer </a>
					</td>
					</tr>
					
					<?php } ?>
                    </table>
				</div>
						</center>
				</div>
				<?php
include("config.php");
				?>
			</div>
			</div>
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