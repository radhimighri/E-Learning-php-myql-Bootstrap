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
					connectMaBase();
					$sqlaff = 'select *from  publications  order by date_p DESC';
					$req = mysql_query($sqlaff) or die(mysql_error());
					?>
<table class="table">
<tr style="background:#999 ">

<td style="font-weight:bold"><font  color="#FF0000">Sujet<font></td>
<td style="font-weight:bold"><font  color="#FF0000">Fichier<font></td>
                    
</tr>
					<?php
					date_default_timezone_set('Africa/Tunis');
					$today =date("Y-m-d");
					 while ($data =mysql_fetch_array($req)) {
						
					?>
                    </td>
					<td><?php echo $data['sujet']; ?> <?php echo $data['date_p']; ?> <hr/>
                    <?php echo $data['texte']; ?>
                    </td>
					<td>
                    <?php if($data['docpulication']!=""){ ?>
                    <a class="btn btn-sm btn-success" href="<?php echo $data['docpulication']; ?>">
                     <span class="glyphicon glyphicon-download-alt"></span>
                     Télecharger</a>
                     <?php } ?>
                    </td>
                    
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