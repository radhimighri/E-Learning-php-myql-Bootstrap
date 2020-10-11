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

		<!-- Bootstrap core CSS -->
		<?php
		include ("incssjs.php");
		?>
		<?php
		connectMaBase();   
		


		?>
				<link rel="shortcut icon"  href="icon/favicon.ico" >

		
	</head>

	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->
		<?php
		include ("menu.php");
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
					connectMaBase();
					$sqlaff = 'select *from  rattrapage  order by date_r';
					$req = mysql_query($sqlaff) or die(mysql_error());
					?>
<table class="table">
<tr style="background:#999 ">
	<td style="font-weight:bold"></td>
<td style="font-weight:bold">matiere</td>
<td style="font-weight:bold">prof</td>
<td style="font-weight:bold">date/heure</td>
<td style="font-weight:bold">groupe</td>
                    
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					 while ($data =mysql_fetch_array($req)) {
						
					?>
                    
					<tr <?php if($today==$data['date_r']){ ?>class="info" <?php }else { ?> class="active" <?php } ?>>
                    <?php if($today==$data['date_r']){ ?><td><img src="images/fixe/new2.gif" alt="" /></td><?php }else { ?><td></td><?php } ?>
                    <td><?php echo $data['matiere']; ?>
                    </td>
					<td><?php echo $data['prof']; ?>
                    </td>
                    <td><?php echo $data['date_r']; ?>-<?php echo $data['heure']; ?></td>
                    <td><?php echo $data['groupe']; ?></td>
					
                    
					
           				
					</tr>
					
					<?php } ?>
                    </table>
				</div>
						</center>
				</div>
				<?php
				connectMaBase();
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