<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
	
	<?php
include("config.php");



				//mdp_oubliées
					$results=mysqli_query($base,"SELECT count(*) as total from motdepasse where motdepasse.vue=0");
					$datamdp=mysqli_fetch_assoc($results);
			
				//conf user
					$results=mysqli_query($base,"SELECT count(*) as total from utilisateurs where utilisateurs.confirmer=0");
					$dataconf=mysqli_fetch_assoc($results);
				
				// demande ens
					$result=mysqli_query($base,"SELECT count(*) as total from demande,utilisateurs where utilisateurs.profil='ens' and demande.utilisateurs_id_utilisateurs = utilisateurs.id_utilisateurs  and demande.vue=0" );
					$dataden=mysqli_fetch_assoc($result);
					
				// demande etud
					$result=mysqli_query($base,"SELECT count(*) as total from demande,utilisateurs where utilisateurs.profil='etud' and demande.utilisateurs_id_utilisateurs = utilisateurs.id_utilisateurs and demande.vue=0" );
					$datadet=mysqli_fetch_assoc($result);
					
					$d['somme']=$dataconf['total'];
					$somme['a']=$d['somme'] + $dataden['total'] + $datadet['total']+$datamdp['total'];
					
					//$sqlcount = 'select count (id_utilisateurs)  from  utilisateurs where utilisateurs.confirmer="0" ';
					//$reqcount = mysql_query($sqlcount) or die(mysql_error());
					//$nb= mysql_fetch_array($reqcount);

				?>
				
					
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gérer publications<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="publicationadmin.php">Ajouter Actualités</a></li>
						<li><a href="listepubadmin.php">Liste Actualités</a></li>
					</ul>
				</li>
			
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Departements<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="ajouterdepadmin.php">Ajouter departement</a></li>
						<li><a href="listedepadmin.php">Liste departement</a></li>
				   </ul>
				</li>
			
			
			
			<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Liste d'utilisateurs<b class="caret"></b></a>
					<ul class="dropdown-menu">
			            <li><a href="liste_ens.php">Liste d'Enseignants</a></li>
				        <li><a href="liste_etud.php">Liste d'Etudiants</a></li>
					</ul>
				</li>	
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Groupes<b class="caret"></b></a>
					<ul class="dropdown-menu">
					    <li><a href="ajoutergroupeadmin.php">Ajouter groupe</a></li>
				        <li><a href="listegroupeadmin.php">Liste groupes</a></li>
				   </ul>
			    </li>
				

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Demandes<b class="caret"></b>
						<span class="badge pull-right"><?php echo $somme['a'];?></span></a>
				<ul class="dropdown-menu">
				<li><a href="demandensadmin.php">Enseignants<span class="badge pull-right"><?php echo $dataden['total'];?></span></a></li>
				<li><a href="demandeetuadmin.php">Etudiants<span class="badge pull-right"><?php echo $datadet['total']; ?></span></a></li>
                <li><a  href="confirmer-inscri_utilis.php">Confirmation<span class="badge pull-right"><?php echo $d['somme']; ?></span></a></li>
                <li><a  href="liste_mdp_oublie.php">Mots de passe oubliées<span class="badge pull-right"><?php echo $datamdp['total']; ?></span></a></li>
			    </ul>
            </li>
			
	
	
				<li><a href="envoiresultat.php">Envoyer Resultats</a></li>
				
	

			    
				<li><a href="demandeadmin.php">Envoyer Demandes</a></li>
			
			
			
			</ul>
			
			
			<div class="navbar-collapse collapse">

				<?php if(empty($_SESSION['cin'])){
				?>

				<form class="navbar-form navbar-right" role="form" method="post" action="connexion/connexion.php">
					<button type="submit" class="btn btn-success">
						Sign in
				  </button>
				</form>
				<?php }
					else{
				?>
				<form class="navbar-form navbar-right" role="form" method="post"  >
					<div class="btn-group">
  <button type="button" class="btn btn-danger">Administrateur</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="changer_mdp_admin.php">Modifier mot de passe</a></li>
    <li><a href="logout.php">Déconnexion</a></li>
    
  </ul>
</div>
				</form>
				<?php } ?>
			</div>

		</div>
	</div>

	<!--/.nav-collapse -->
</div>