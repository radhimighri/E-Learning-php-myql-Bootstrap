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
		if ((isset($_GET['update'])) && ($_GET['nom'] != "")) {
$deleteSQL = sprintf("UPDATE `departement` SET `nom_departement`='".$_GET['nom']."' WHERE  `id_departement`='".$_GET['id']."'");
					
  //mysql_select_db("ismaik1");
  $Result1 = mysqli_query($base,$deleteSQL) or die(mysqli_error($base));
}
if ((isset($_GET['suppr'])) && ($_GET['suppr'] != "")) {
	$deleteSQL = sprintf("DELETE FROM departement WHERE id_departement=%s", GetSQLValueString($_GET['suppr'], "int"));

	//mysql_select_db("ismaik1");
	$Result1 = mysqli_query($base,$deleteSQL) or die(mysqli_error($base));
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
					$sqlaff = 'select *from  departement  order by nom_departement';
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?><div class="row">
                    <table class="table">
<tr style="background:#999 ">

<td style="font-weight:bold; width:33%">Nom</td>
<td style="font-weight:bold; width:33%">Nom du Chef</td>
<td style="font-weight:bold; width:34%">Renommer</td>
<td style="font-weight:bold; width:33%">Supprimer</td>
                    
</tr>

					<?php while ($data =mysqli_fetch_array($req)) {
					?>
					
           				<tr>
                        <td>
							<?php echo $data['nom_departement']; ?>
						</td>
						<td>
							M.<?php echo $data['chef_departement']; ?>
						</td>

						<td>
							<a type="submit" href="listedepadmin.php?renommer=<?php echo $data['id_departement']; ?>"  class="btn btn-xs btn-info"> Renommer </a>
							<?php if(isset ($_GET['renommer']) && $data['id_departement']==$_GET['renommer'] ) {
					?>
					        <center>
								<form method="get" action="listedepadmin.php">
										<div class="row">
											<div class="large-12 columns" style="width: 100%">
											<div class="col-lg-6">
											<div class="input-group">
											
											<input type="text" class="form-control" placeholder="renommer" name="nom"  />
											</div><!-- /input-group -->
											</div><!-- /.col-lg-6 -->
												
												<input type="hidden" value="<?php echo $data['id_departement']; ?>" name="id"/>
											</div>
										</div>
										<center>
										<button type="submit" name="update" class="btn btn-xs btn-success">
												Valider
										</button>
										</center>	
											
									

									</form>
							
					</center>
					<?php } ?>
							
						</td>
						<td>

						<a href="listedepadmin.php?suppr=<?php echo $data['id_departement']; ?>"  type="submit"   class="btn btn-xs btn-danger">
 Supprimer <span class="glyphicon glyphicon-trash"></span></a>
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