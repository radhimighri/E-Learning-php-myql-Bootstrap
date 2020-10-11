<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		
		
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				
                			<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">ISMAIK <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="presentationens.php">Presentation de l'Institut</a>	</li>
					
                    <li><a  href="mot_directens.php">Mot de directeur</a></li>
						
						<li>
							<a href="organigrammeens.php">Organigramme de ISMAIK</a>						</li>
						                        
                       
							<li><a  href="personel_admins.php">Personnels Administratifs</a></li>



					</ul>
			  </li>
                
                
				<li>
					<a href="index1.php">Accueil</a></li>
			
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Formations <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a  href="formationaaaaens.php">Liste Formations</a>						</li>
						<li>
							<a  href="stages_pfeens.php">Stage & Pfe</a>						</li>

							</ul>
				</li>
				
				
				
			<?php if(isset($_SESSION['cin'])){ ?>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Departements<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="dep_math.php">Mathematique </a></li>
						<li><a href="dep_info.php">Informatique</a></li>
						<li><a href="dep_phys.php">Physique</a></li>

					</ul>
				</li>

			<?php } ?>

				
				
				
				
                 <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Forum&amp;Cours<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="courprof.php">Ajout Cours</a></li>
                        <li><a  href="listecourprof.php">Liste cours</a></li>
				   </ul>
				</li>





                 <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="demandeens.php">Envoyer demandes</a></li>
						
					</ul>
              </li>
                
					<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Bibliotheque<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a  href="bib2.php">Informations et guide</a></li>
						
					<?php if(isset($_SESSION['cin'])){ ?><li><a  href="rech_livre.php">Recherche d'un livre</a></li><?php  }?>
					
					</ul>
				</li>
				
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">ISMAIK en Photos<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a  href="galleryA.php">Local A</a>	</li>
						<li>
							<a href="galleryB.php">Local B</a></li>
						<li>
							<a  href="galleryC.php">Local C</a>	</li>

					</ul>
				</li>
				
				
			</ul>
			<div class="navbar-collapse collapse">

				<?php if(empty($_SESSION['cin'])){
				?>

				<form class="navbar-form navbar-right" role="form" method="post" action="connexion/connexion.php">
					<div class="btn-group">
  <button type="submit" class="btn btn-success">Sign in</button>
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="inscri_etud.php">Inscription étudiant</a></li>
    <li><a href="inscri_ens.php">Inscription enseignant</a></li>
    <li><a href="mdp_oublie.php">Mot de passe oublié</a></li>
    
  </ul>
</div>
				</form>
				<?php }
					else{
				?>
				<form class="navbar-form navbar-right" role="form" method="post" >
					<div class="btn-group" >
  <button type="button" class="btn btn-danger" ><?php echo $_SESSION['prenom'];  ?></button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="changer_mdp_prof.php">Modifier mot de passe</a></li>
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