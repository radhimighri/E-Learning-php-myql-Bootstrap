          
			<?php

	session_start();
	include ("function.php");

		
					
		    
include("config.php");
			//$test = false;

			
				$email = $_POST['email'];
					//On prépare la commande sql d'insertion
				$sql='select * from  utilisateurs where utilisateurs.confirmer="1" and utilisateurs.mail="'.$email.'"' ;	
				$req = mysqli_query($base,$sql) or die(mysqli_error($base));
				
							$Resultatidannance = 'SELECT * FROM motdepasse where id_motdepasse= (SELECT max(id_motdepasse) FROM motdepasse ) ';
			$reqResultatidannance = mysqli_query($base,$Resultatidannance) or die('Erreur SQL !<br />'.$Resultatidannance.'<br />'.mysqli_error($base)); 
			$data2 = mysqli_fetch_array($reqResultatidannance) ;
			$id=$data2['id_motdepasse']+1;

				
				
				if(mysqli_num_rows($req)>0){
					$sql = 'INSERT INTO motdepasse VALUES("'.$id.'","' . $email . '","0")';
					$req = mysqli_query($base,$sql) or die(mysqli_error($base));
					header('Location: mdp_oublie_envoie_success.php');
					}
					else {
										header('Location: mdp_oublie_envoie_failed.php');
				}
				
			
				//mysql_query($sql) or die('Erreur SQL !' . $sql . '<br />' . mysql_error());
				// on ferme la connexion
				mysqli_close($base);
			
		?>
