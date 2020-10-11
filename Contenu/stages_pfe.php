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
	    <style type="text/css">
<!--
.Style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
.Style2 {
	font-family: "Times New Roman", Times, serif;
	font-size: 12px;
}
-->
        </style>
		
		<link rel="shortcut icon"  href="icon/favicon.ico" >
</head>

	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->

<?php

include ("menu.php");

?>

		<div class="container theme-showcase" role="main">

			<?php
			include ("baniere.php");
			?>
			
			<?php
			include ("left.php");
			?>

		  <div class="jumbotron" style="width: 73%; float: right;">
			        Arrêté du ministre de l'enseignement supérieur, de la 
			      recherche scientifique et de la technologie du 30 juin 2009, fixant 
			      le guide unifié de l’utilisation du système des crédits et les 
			      règles générales d’évaluation et de passage dans le diplôme national 
			      de licence dans les différents domaines de formation, mentions, 
		      parcours et spécialités du système LMD.
			  
			          <br>
			   Art. 20 - Le stage ou la formation par 
			      alternance sont sanctionnés par la préparation d’un rapport sous la 
			      direction d’un enseignant universitaire et, le cas échéant, d’un 
			      encadreur professionnel. L’étudiant demeure tenu de réaliser et de 
			      valider ce stage ou cette formation pour obtenir son diplôme final.<br>
			      Le rapport est soutenu publiquement devant un jury dont le président 
			      et les membres sont désignés à cet effet par le doyen ou le 
			      directeur de l’établissement. Ledit jury est composé de trois 
			      membres dont les deux encadreurs universitaire et professionnel. Ses 
			      décisions sont rendues à la majorité des voix.<br>
			      Le jury d’examen compétent peut attribuer aux étudiants n’ayant pas 
			      soutenu le rapport de stage avec succès une prolongation 
			      exceptionnelle de trois mois au maximum pour se rattraper et 
			      corriger le rapport et le soutenir une autre fois.<br>
			      Art. 21 - Au cas où il s’avère impossible de réaliser les stages 
			      consignés dans les programmes d’études, les mesures suivantes sont à 
			      prendre pour évaluer les activités pratiques substituant :<br>
			      - lorsque l’étudiant est chargé d’une étude de cas ou de sa 
			      simulation, de la réalisation d’un projet tutoré ou d’un plan 
			      d’affaires pour la création d’une entreprise, le rapport y afférent 
			      et les travaux réalisés seront évalués sous forme de soutenance 
			      conformément aux dispositions de l’article 20 ci-dessus mentionné,<br>
			      - les enseignements et les ateliers qui complètent l’activité 
			      pratique de substitution sont évalués selon le régime de contrôle 
			      continu,<br>
			      - la moyenne semestrielle est calculée en appliquant le principe de 
			      compensation entre la note attribuée à l’activité pratique de 
			      substitution et la note de contrôle continu des enseignements 
			      concernés. Sur cette base, la totalité des crédits est attribuée.<br>
			      Art. 22 - Les notes attribuées au stage ou aux activités pratiques 
			      de substitution effectuées au cours du deuxième semestre de la 
			      troisième année des licences appliquées ne compensent pas les notes 
			      du premier semestre. Les dites activités sont exceptées du principe 
			      des deux sessions d’examens. Le diplôme de licence n’est délivré que 
			      lorsque l’étudiant aura achevé toutes les épreuves se rapportant à 
			      la formation pratique.
				  		      <br/>
			     

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