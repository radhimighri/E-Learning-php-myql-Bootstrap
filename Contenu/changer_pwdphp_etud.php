          
			<?php

	session_start();
	include ("function.php");
	include ("config.php");

			
			
				$password = $_POST['password'];
					$sqlupdate = 'UPDATE `utilisateurs` SET `password`="' . $password . '" where utilisateurs.id_utilisateurs="'.$_SESSION['id_utilisateurs'].'"  ';
	mysqli_query($base,$sqlupdate);
										header('Location: mdp_change_success.php');
	/*	else {
										header('Location: mdp_change_failed.php');
				}*/
	 
				mysqli_close($base);
			
		?>
