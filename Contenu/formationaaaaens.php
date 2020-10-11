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
	</head>

	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->

		<?php
include ("menuproff.php");

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
		      L’ISMAIK propose une large palette de
			    formations
			    dans les domaines de l’Informatique, des
			    Mathématiques appliquées. Son adhésion totale au programme LMD
			    (Licence, Master, Doctorat), lui garantit une grande ouverture sur les
			    institutions universitaires nationales et européennes par la
			    mise en place de collaborations pédagogiques et
			    d’échanges de formateurs et
			    d’étudiants.<br>
                <br>
                Les formations qui sont actuellement assurées concernent
			    deux
			    licences appliquées en informatique  :
			    TNSI et RT, en plus d'un
			    licence fondamentale en Mathématiques
			    Appliquées. D’autres formations sont
			    envisagées.
			    Elles seront progressivement mises en place selon un organigramme au
			    diapason de l’évolution naturelle de
			    l’institut et en
			    interaction avec son environnement scientifique et
			    socio-économique. Il est également
			    prévu de
			    créer au sein de l’institut tout un
			    département de
			    transfert de technologies qui regroupera divers laboratoires de
			    recherche pour, d’une part,&nbsp; soutenir les formations
			    en
			    Master et Doctorat et, d’autre part, constituer une interface
			    de
		      collaboration Ecole - Entreprise. 
			  <br/>		      <br/>
		      <br/>

		      Les formation offerts par l'ISMAIK actuellements sont : 
		     <br/>
		     <strong>Cycle preparatoire</strong> (<strong>scientifique</strong>) : 
		     Math_Physique 
		     / Physique_Chimie
		      <br/>
		      <strong>Licence:		      </strong><br/>
		      Fondamentale en Mathematique Appliquee 
		      <br/>Appliqué en informatique appliquée (<strong>TNSI</strong>)		    
		      <br/>Appliqué en réseau et télécommunication (<strong>RT</strong>)
		       <br/>
		       <strong>Master :		       </strong><br/>
		       Recherche en Mathematique 
		       <br/>Professionnel en informatique(<strong>TNSI</strong>)
		       <br/>
		       Professionnel en ingenierie financiere
		      <br/>
		      <br/>
		      <br/>
		      <p align="center"><span style="padding-right: 10px; padding-left: 10px; padding-bottom: 15px;"><img src="images/Formations.jpg" alt="formation" width="531" height="247" style="width: 465px; height: 207px;"></span></p>
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