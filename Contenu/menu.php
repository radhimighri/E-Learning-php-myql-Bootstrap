
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
	<div class="container">
		
		<div class="navbar-collapse collapse" >
			<ul class="nav navbar-nav">
				
				
				
					<li><img src="images/bienvenue.gif" width="105" height="52" />			  </li>
				
				
                	<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">ISMAIK <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a  href="presentation.php">Presentation de l'Institut</a>						</li>
						
                    <li><a  href="mot_direct .php">Mot de directeur</a></li>
						
						<li>
							<a  href="organigramme.php">Organigramme de ISMAIK</a>						</li>
						                        

						
				<li>
				<a  href="reg_inter.php">Reglement interieur</a>						</li>
<?php if(isset($_SESSION['cin'])){ ?>
<li><a  href="personel_admins.php">Personnels Administratifs</a></li><?php  }?>


					</ul>
			  </li>
                
                 <?php if(isset($_SESSION['cin'])){ ?>

				<li>
					<a href="index1.php">Accueil </a></li>
								   <?php  }?>

			
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Formations <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a  href="formationaaaa.php">Liste de formations</a>	</li>
						<li>
							<a href="stages_pfe.php">Stage & Pfe </a></li>
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

				
          
	            <?php if(isset($_SESSION['cin'])){ ?>

           <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="demandeetu.php">Envoyer demandes</a>						</li>
						<li>
							<a href="resultat.php">Consulter resultat </a></li> 
				    </ul>
					
					
						   <?php  }?>
              </li>
              
              
			   <?php if(isset($_SESSION['cin'])){ ?>
			  		<li>
					<a href="listecouretudiant.php" >Forum&amp;Cours</a></li>
			   <?php  }?>
			        </li>
			  
			  		
					
					<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Bibliotheque<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a  href="bib.php">Informations et guide</a></li>
						
					<?php if(isset($_SESSION['cin'])){ ?><li><a  href="rech_livre.php">Recherche d'un livre</a></li><?php  }?>
					
					</ul>
				</li>

									  <?php if(empty($_SESSION['cin'])){
				?>

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
				<?php } ?>
				
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Localiser Sites<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a  href="mapA.php">Local A</a>	</li>
						<li><a  href="mapB.php">Local B</a></li>
						<li><a  href="mapC.php">Local C</a>	</li>
					</ul>
				</li>
					
			 <?php if(empty($_SESSION['cin'])){
				?>
						<li><a  href="telech.php">Téléchargements</a>	</li>

					<?php } ?>
					
			</ul>
			
			<div class="navbar-collapse collapse">

				<p>
				  <?php if(empty($_SESSION['cin'])){
				?>
			  </p>
				<form class="navbar-form navbar-right" role="form" method="post" action="connexion/connexion.php">
					<div class="btn-group">
  <button type="submit" class="btn btn-success">Connexion</button>
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="ins_etud.php">Inscription étudiant</a></li>
    <li><a href="ins_ens.php">Inscription enseignant</a></li>
    <li><a href="mdp_oubl.html">Mot de passe oublié</a></li>
    
  </ul>
  
</div>
				</form>
				<?php }
					else{
				?>
				<form class="navbar-form navbar-right" role="form" method="post"  >
					<div class="btn-group">
  <button type="button" class="btn btn-danger"><?php echo $_SESSION['prenom'];  ?></button>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="changer_mdp_etud.php">Modifier mot de passe</a></li>
    <li><a href="logout.php">Déconnexion</a></li>
    
  </ul>
</div>
				</form>
				<?php } ?>
		  </div>

	  </div>
	</div>

</div>