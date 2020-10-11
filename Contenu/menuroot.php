<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<?php
include("config.php");
				
					 // conf ens
					$result=mysqli_query($base,"SELECT count(*) as total from demande,utilisateurs where demande.utilisateurs_id_utilisateurs = utilisateurs.id_utilisateurs and  utilisateurs.profil='admin' and demande.vue=0 ");
					$datacen=mysqli_fetch_assoc($result);
					// demane ens
						?>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				
								<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerer publications <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a  href="publicationadmin.php">Ajout Actualités</a></li>
						<li>
							<a  href="listepubadmin.php">Liste Actualités</a></li>

				</ul>
				
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gerer L'équipe administrative <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="ins_admin.php">Ajout Administrateur</a>
						</li>
						<li>
							<a href="listeadmin.php">Liste d'Administrateurs</a>
						</li>

					</ul>
				</li>
				<li>
					<a  href="liste_demanderoot.php">Consulter demandes<span class="badge pull-right"> <?php echo $datacen['total'];?></span></a>
				</li>
				
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
  <button type="button" class="btn btn-danger">Chef de service</button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a  href="changer_mdp_supadmin.php">Modifier mot de passe</a></li>
    <li><a href="logout.php">Déconnexion</a></li>
    
  </ul>
</div>
				</form>
				<?php } ?>
			</div>

		</div>
	</div>

</div>