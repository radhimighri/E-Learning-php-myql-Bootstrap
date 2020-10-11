          
			<?php

	session_start();
	include ("function.php");
			connectMaBase();

			
			
				$password = $_POST['password'];
					$sqlupdate = 'UPDATE `utilisateurs` SET `password`="' . $password . '" where utilisateurs.id_utilisateurs="'.$_SESSION['id_utilisateurs'].'"  ';
										
	mysql_query($sqlupdate);
	header('Location: mdp_change_success.php');
	/*	else {
										header('Location: mdp_change_failed.php');
				}*/
				mysql_close();
			
		?>
