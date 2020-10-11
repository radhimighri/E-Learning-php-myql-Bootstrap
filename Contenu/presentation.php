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
		include ("incssjsmore.php");
		?>

		<title>ISMAI Kairouan</title>

		<!-- Bootstrap core CSS -->
		<?php
		include ("incssjs.php");
		?>
				<link rel="shortcut icon"  href="icon/favicon.ico" >
				
				<style>
      #map_canvas {
        width: 500px;
        height: 400px;
      }
    </style>

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
		    				
				l'Institut Supérieur des Mathématiques Appliquées et d'Informatique de Kairouan (ISMAI de Kairouan) est un établissement public à caractère scientifique et technologique de l'université de Kairouan qui a été créé le 06/06/2006 conformément à un numéro d'ordre 1587 pour enrichir le tissu universitaire de Kairouan. <br>
		    L'Institut assure à ses étudiants (600 Étudiants et 490 Étudiantes d'après le statistique de 2009) une formation dans les spécialités suivantes :<br>
		    LA en Technologie Numérique du Son et de l’Image (<strong>TNSI</strong>)<br>
		    LA en Technologie de réseaux et Télécommunication (<strong>RT</strong>)<br>
		    LF en Mathématiques <br>
		    Cycle préparatoire (scientifique)
			  <br>
			  L'institut s'efforce de créer un environnement dynamique universitaire et de recherche, en gardant le rythme des développements scientifiques et technologiques pour adressage des besoins immédiats et à long terme de la société.			  
			   L’objectif de l'ISMAIK est donc de favoriser  l’émergence d’une nouvelle  génération de compétences en sciences  et technologies notamment dans les spécialités de  l’informatique et des mathématiques  appliquées.
				</br>				   <strong> La Direction :</strong><br>
				   <strong>Directeur : </strong>Mohamed Lakhdher ben Mohamed<br>
				   <strong>Secrétaire general :</strong> Mohamed  Salah Barrak 
				 <div align="center">
		       </br>
		        <p><img src="images/ismaiklogo.jpg" width="95" height="113"><img border="0" src="images/P060312_10.17.jpg" width="177" height="115" align="center"><img src="images/ismaiklogo.jpg" width="95" height="113"></p>
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