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
	$deleteSQL = sprintf("DELETE  FROM utilisateurs WHERE  id_utilisateurs=%s", GetSQLValueString($_GET['suppr'], "int"));

	//mysql_select_db("ismaik1");
	$Result1 = mysqli_query($base,$deleteSQL) or die(mysqli_error($base));
}

if ((isset($_GET['conf'])) && ($_GET['conf'] != "")) {
	$sqlupdate = sprintf("UPDATE  utilisateurs SET confirmer=1 where id_utilisateurs=%s", GetSQLValueString($_GET['conf'], "int"));
	 mysqli_query($base,$sqlupdate);
}


		?>
		
<link rel="shortcut icon"  href="icon/favicon.ico" >
	</head>

	<body role="document" style="margin-bottom: 90px;">		
		
		<?php
include("config.php");
					$result=mysqli_query($base,"SELECT count(*) as total from utilisateurs where utilisateurs.confirmer='0'");
					$data=mysqli_fetch_assoc($result);
			
					
					?>
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

			<div class="jumbotron" style="width: 73%; float: right;"><h3>Confirmation de l'inscription :</h3> 
			  <div class="row">
					<?php
					
include("config.php");
					$sqlaff = "select * from  utilisateurs where utilisateurs.confirmer='0' order by nom";
					$req = mysqli_query($base,$sqlaff) or die(mysqli_error($base));
					?>
					<form action="confirmer-inscri_utilis.php" method="post">
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
<td style="font-weight:bold">Profile</td>
<td style="font-weight:bold">Action</td>
                    
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					 while ($data =mysqli_fetch_array($req)) {
						
					?>
                    
					<tr >
						<td><?php echo $data['cin']; ?>
                    </td>
                    <td><?php echo $data['nom']; ?>
                    </td>
					<td><?php echo $data['prenom']; ?> 
                    </td>
					<td><?php echo $data['profil']; ?> 
                    </td>
					
					
					
                    <td> 
           					<a href="confirmer-inscri_utilis.php?conf=<?php echo $data['id_utilisateurs']; ?>"  type="submit"   class="btn btn-sm btn-success">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                         confirmer </a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="confirmer-inscri_utilis.php?suppr=<?php echo $data['id_utilisateurs']; ?>" type="submit"   class="btn btn-sm btn-danger">
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
			</div>
			<?php
			include ("foot.php");
			?>

			<?php
			include ("fast.php");
			?>
	</body>
</html>